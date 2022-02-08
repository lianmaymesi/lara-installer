<?php

namespace Lianmaymesi\LaraInstaller\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Lianmaymesi\LaraInstaller\Http\Requests\AccountRegisterRequest;

class AccountController extends Controller
{
    public function index(): View
    {
        return view('lara-installer::account');
    }

    public function save(AccountRegisterRequest $request): RedirectResponse
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }
}
