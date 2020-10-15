<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Login(){
        return view('admin.login');
    }
    public function logout(Request $request){
        $request->session()->flush();

        return redirect()->route('Login');
    }
}