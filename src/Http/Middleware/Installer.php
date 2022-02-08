<?php

namespace Lianmaymesi\LaraInstaller\Http\Middleware;

use Closure;

class Installer
{
    public function handle($request, Closure $next)
    {
        if ($this->alreadyInstalled()) {
            return redirect()->route('index');
        }

        return $next($request);
    }

    public function alreadyInstaller()
    {
        return "hello";
    }
}
