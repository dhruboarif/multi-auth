<?php

namespace App\Http\Controllers\Admin;
use Auth; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    if(!Auth::guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember'))){
        throw ValidationException::withMessages([
            'email'=> 'Invalid email or password'
        ]);
    }

    return redirect()->intended(route('admin.home')); 
    }
}
