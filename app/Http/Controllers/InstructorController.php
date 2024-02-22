<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstructorController extends Controller
{
    public function InstructorDashboard(){
        return view('instructor.index');
    } // End Mehtod 

    public function InstructorLogout(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logout Successfully',
            'alert-type' => 'info'
        );

        return redirect('/instructor/login')->with($notification);
    } // End Method

    public function InstructorLogin(){
        return view('instructor.instructor_login');
    } // End Method 

}
