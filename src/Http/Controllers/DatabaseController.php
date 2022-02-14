<?php

namespace Lianmaymesi\LaraInstaller\Http\Controllers;

use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Lianmaymesi\LaraInstaller\Http\Requests\InstallDatabaseRequest;
use PDOException;

class DatabaseController extends Controller
{
    protected $dbConfig;

    public function index(): View
    {
        return view('lara-installer::database');
    }

    public function save(InstallDatabaseRequest $request)
    {
        $this->dbConfig = config('database.connections.mysql');


        $this->dbConfig['host'] = $request->db_host;
        $this->dbConfig['port'] = $request->db_port;
        $this->dbConfig['database'] = $request->db_name;
        $this->dbConfig['username'] = $request->db_user;
        $this->dbConfig['password'] = $request->db_pass;

        Config::set('database.connections.lara-installer', $this->dbConfig);

        if ($this->databaseHasData() && !$request->has('overwrite_data')) {

            return redirect()->back()->with('data_present', true)->withInput();
        }


        $migrationResult = $this->migrateDatabase();


        if ($migrationResult === false) {
            return redirect()->back()->withInput();
        }

        $this->storeConfigurationInEnv($this->dbConfig);

        return redirect()->route('li.account');
    }

    protected function migrateDatabase(): bool
    {
        try {
            Artisan::call('migrate:fresh', [
                '--database' => 'lara-installer',
                '--force' => true,
                '--no-interaction' => true,
            ]);
        } catch (Exception $th) {

            return false;
        }

        return true;
    }

    protected function storeConfigurationInEnv($config): void
    {
        $envContent = File::get(base_path('.env'));

        // dd($config['password']);

        $envContent = preg_replace([
            '/DB_HOST=(.*)\S/',
            '/DB_PORT=(.*)\S/',
            '/DB_DATABASE=(.*)\S/',
            '/DB_USERNAME=(.*)\S/',
            '/DB_PASSWORD=(.*)\S/',
        ], [
            'DB_HOST=' . $config['host'],
            'DB_PORT=' . $config['port'],
            'DB_DATABASE=' . $config['database'],
            'DB_USERNAME=' . $config['username'],
            'DB_PASSWORD=' . $config['password'],
        ], $envContent);


        File::put(base_path('.env'), $envContent);
    }

    protected function databaseHasData(): bool
    {
        try {
            $present_tables = DB::connection('lara-installer')->getDoctrineSchemaManager()->listTableNames();
        } catch (PDOException $th) {
            Log::error($th->getMessage());

            return false;
        }

        return count($present_tables) > 0;
    }
}
