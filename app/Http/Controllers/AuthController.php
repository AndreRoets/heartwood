<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Optional: show a username-only login form
    public function showLoginForm()
    {
        // Redirect back to home with an error that will trigger the modal.
        return redirect()->route('home')
            ->withErrors(['auth' => 'You must be logged in to access this page.']);
    }

    // POST /login — login by username only
    public function attempt(Request $request)
    {
        $data = $request->validate([
            'username' => ['required', 'string', 'max:50'],
        ]);

        $user = User::where('username', $data['username'])->first();

        if (! $user) {
            throw ValidationException::withMessages([
                'username' => [__('auth.failed')],
            ]);
        }

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->intended(route('dashboard'));
    }

    // GET /register — username-only registration form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // POST /register — create user with just username
    public function register(Request $request)
    {
        $data = $request->validate([
            'username' => [
                'required', 'string', 'max:50',
                // Keep usernames sane; tweak if you like
                'regex:/^[A-Za-z0-9._-]+$/',
                'unique:users,username',
            ],
        ]);

        $user = User::create([
            'username' => $data['username'],
            'name'     => $data['username'],
            'email'    => null,   // no email
            'password' => null,   // no password
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->intended(route('dashboard'));
    }

    // Optional: if you want to return to home on validator error from register()
    protected function failedRegistration(\Illuminate\Validation\Validator $validator)
    {
        return redirect()
            ->route('home')
            ->withErrors($validator)
            ->withInput(array_merge($validator->getData(), ['_form_type' => 'register']));
    }
}
