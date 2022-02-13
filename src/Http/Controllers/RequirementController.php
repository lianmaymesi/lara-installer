<?php

namespace Lianmaymesi\LaraInstaller\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

class RequirementController extends Controller
{
    public function index()
    {
        $results = [
            'php_version' => PHP_VERSION_ID >= config('lara-installer.php_version_id'),
            'extension_bcmath' => extension_loaded('bcmath'),
            'extension_ctype' => extension_loaded('ctype'),
            'extension_json' => extension_loaded('json'),
            'extension_mbstring' => extension_loaded('mbstring'),
            'extension_openssl' => extension_loaded('openssl'),
            'extension_pdo_mysql' => extension_loaded('pdo_mysql'),
            'extension_tokenizer' => extension_loaded('tokenizer'),
            'extension_xml' => extension_loaded('xml'),
            'env_writable' => File::isWritable(base_path('.env')),
            'storage_writable' => File::isWritable(storage_path()) && File::isWritable(storage_path('logs')),
        ];

        return view('lara-installer::requirements', ['results' => $results]);
    }
}
