<?php

namespace Lianmaymesi\LaraInstaller\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Contracts\View\View;

class WelcomeController extends Controller
{
    public function index(): View
    {
        return view('lara-installer::welcome');
    }
}
