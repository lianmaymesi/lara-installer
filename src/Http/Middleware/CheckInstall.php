<?php

namespace Lianmaymesi\LaraInstaller\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

class CheckInstall
{
    public function handle(Request $request, Closure $next)
    {
        if (! $this->alreadyInstalled()) {
            return redirect()->route('li.index');
        }

        return $next($request);
    }

    protected function alreadyInstalled(): bool
    {
        if (Schema::hasTable('migrations')) {
            $files = File::files(database_path('migrations'));

            $db = DB::table('migrations')->get()->count();

            return count($files) == $db ? 1 : 0;
        }

        return 0;
    }
}
