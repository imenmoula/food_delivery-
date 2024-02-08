<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming your User model is in the App\Models namespace
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Check if the user is authenticated
        if(Auth::check())
        {
            // Get the role of the authenticated user
            $role = Auth::user()->role;

            // Check the role and return views accordingly
            if($role == 'user')
            {
                return view('front.home');
            }
            else if($role == 'admin')
            {
                return view('master');
            }
            else
            {
                // Redirect back if the user's role is neither 'user' nor 'admin'
                return redirect()->back();
            }
        }
        else
        {
            // Redirect to login page or any other appropriate action for unauthenticated users
            return redirect()->route('login');
        }
    }
   
}
