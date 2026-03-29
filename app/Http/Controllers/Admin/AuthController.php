<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function showLogin(): View
    {
        return view('admin.auth.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $admin = AdminUser::query()->where('username', $credentials['username'])->first();

        if (! $admin || ! Hash::check($credentials['password'], $admin->password)) {
            return back()->withErrors([
                'username' => 'Invalid username or password.',
            ])->onlyInput('username');
        }

        $request->session()->regenerate();
        $request->session()->put('admin_auth', [
            'id' => $admin->id,
            'name' => $admin->name,
            'username' => $admin->username,
        ]);

        return redirect()->route('admin.dashboard');
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->forget('admin_auth');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
