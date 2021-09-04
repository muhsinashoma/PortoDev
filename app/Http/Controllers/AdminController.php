<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show Admin Login Form from Admin folder
     */

    public function showAdminLoginForm(){

        return view('admin.login');
    }



    public function showAdminRegisterForm(){

        return view('admin.register');
    }


    public function showAdminDashboard(){
        return view('admin.dashboard');
    }


}
