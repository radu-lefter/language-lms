<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminDashboard(){

        return view('admin.index');

    } // End Method 

    public function AdminLogout(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logout Successfully',
            'alert-type' => 'info'
        );
 
        return redirect('/admin/login')->with($notification);
    } // End Method 
}
