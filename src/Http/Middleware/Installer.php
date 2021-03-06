<?php

namespace Lianmaymesi\LaraInstaller\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

class Installer
{
    public function handle(Request $request, Closure $next)
    {
        if ($this->alreadyInstalled()) {
            return redirect()->route(config('lara-installer.redirect_to'));
        }

        return $next($request);
    }

    protected function alreadyInstalled(): bool
    {
        if (Schema::hasTable('migrations') && DB::table('users')->count() > 0) {
            $files = File::files(database_path('migrations'));

            $db = DB::table('migrations')->count();

            return count($files) == $db ? true : false;
        }

        return false;
    }
}
