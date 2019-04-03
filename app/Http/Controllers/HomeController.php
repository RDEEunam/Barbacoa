<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use DB;
use App\Http\Controllers\UserController;
use App\User;
use App\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
	  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
	   $users = DB::select('select * from users');
       $request->user()->authorizeRoles(['user', 'admin']);
        return view('home',compact('users'));
    }
	

    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        return view('home');
    }

}
