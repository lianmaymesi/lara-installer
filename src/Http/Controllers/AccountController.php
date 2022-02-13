<?php

namespace Lianmaymesi\LaraInstaller\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Lianmaymesi\LaraInstaller\Http\Requests\AccountRegisterRequest;

class AccountController extends Controller
{
    public function index(): View
    {
        return view('lara-installer::account');
    }

    public function save(AccountRegisterRequest $request): RedirectResponse
    {
        $user = DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route(config('lara-installer.redirect_to'));
    }
}
