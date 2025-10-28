<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginCheck(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'email' => 'required|string|email',
            'password' => 'required|min:5'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = User::where('email', $r->email)
            ->where('role', 'admin') 
            ->first();

        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'User tidak ditemukan atau tidak aktif'
            ], 401);
        }

        if (password_verify($r->password, $user->password)) {
            Auth::login($user);
            $r->session()->regenerate();

            return response()->json([
                'status' => 'success',
                'message' => 'Login successful',
                'redirect' => '/dashboard'
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Invalid credentials'
        ], 401);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'wa' => 'required|string|max:15',
            'kursus' => 'required|string|min:5',
        ]);

        $user = User::create([
            'name' => $request->name,
            'wa' => $request->wa,
            'kursus' => $request->kursus,
            'email' => Str::uuid() . '@starone.com',
            'password' => Hash::make('123'),
            'role' => 'student'
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Proses pendaftaran berhasil!',
        ]);
    }



    // public function register(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|max:255|unique:users|regex:/^[a-zA-Z0-9_]+$/',
    //         'password' => 'required|string|min:5|confirmed',
    //     ], [
    //         'name.required' => 'The full name is required.',
    //         'email.required' => 'A Email is required.',
    //         'email.unique' => 'This Email is already taken.',
    //         'email.regex' => 'Email can only contain letters, numbers, and underscores.',
    //         'password.required' => 'A password is required.',
    //         'password.min' => 'Password must be at least 5 characters.',
    //         'password.confirmed' => 'Passwords do not match.',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'Validation failed',
    //             'errors' => $validator->errors()
    //         ], 422);
    //     }

    //     $user = User::create([
    //         'name' => $request->name,
    //         'username' => $request->username,
    //         'password' => Hash::make($request->password),
    //         'role' => 'student'
    //     ]);

    //     Auth::login($user);

    //     return response()->json([
    //         'status' => 'success',
    //         'message' => 'Registration successful!',
    //         'redirect' => '/dashboard'
    //     ]);
    // }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerate();

        return redirect('/login');
    }
}
