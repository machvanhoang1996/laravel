<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
    	$session_dashboard = Session::get('session_dashboard');
        $data['title']='Dashboard';
    	return view('dashboard.index',['session_dashboard'=>$session_dashboard,'title'=>$data['title']]);
    }
    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
           $username = $request->input('username');
           $password = $request->input('password');
           if ($username=='admin' && $password == 'admin123') {
               Session::put('session_dashboard',$username);
               return redirect()->route('dashboard.home');
           }
        }
        return view('dashboard.login');
    }
    public function logout(Request $request)
    {
        $logout =  Session::forget('session_dashboard');
        if(!$request->session()->has('session_dashboard'))
        {
            return redirect()->route('dashboard.login');
        }
    }
}
