<?php

namespace Lianmaymesi\LaraInstaller\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;

class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['lara-installer']);
    }

    public function index(): View
    {
        return view('lara-installer::welcome');
    }
}
