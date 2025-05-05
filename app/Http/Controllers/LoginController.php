<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function showLoginForm(){
        return view ('login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        // Add the 'active' condition to the credentials array
        $credentials['active'] = 1;
    
        if (Auth::attempt($credentials)) {
            // Regenerate session to prevent fixation attacks
            $request->session()->regenerate();
    
            return redirect()->route('products.index');
        }
    
        // Authentication failed: redirect back with error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records or your account is not active.',
        ])->onlyInput('email');
    }
    

    public function dashboard(){
        return view('products');
    }
}
