<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;
use App\User;
use App\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$users = DB::select('select * from users where id >= ?', [1]);
        return view('menuUA',compact('users'));
    }
	
	public function index2()
    {
		$id=Auth::user()->id;
        $users = DB::select('select * from users where id = ?', [$id]);
        return view('menuU',compact('users','id'));
    }
	

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('NuevoUser2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$role_user = Role::where('name', 'user')->first();
        $users = new \App\User;
        $users->name=$request->get('name'); 
        $users->email=$request->get('email'); 
        $users->password=Hash::make($request->get('password'));  
		$users->save();
		$users->roles()->attach($role_user);
        
         return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$id=Auth::user()->id;
        $users = DB::select('select * from users where id = ', $id);
        return view('Usuario',compact('users','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=\App\User::find($id);
        return view('EditarUser',compact('users','id'));;
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $role_user = Role::where('name', 'user')->first();

        if($request->hasfile('Photo'))
        {
            $file = $request->file('Photo');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/img/usuarios/', $name);
        }	
        $users= \App\User::find($id);
        $users->name=$request->get('name');
        $users->email=$request->get('email');
		$users->Movil=$request->get('Movil');
		$users->password=Hash::make($request->get('password'));  
		$users->Photo=$name;
        $users->save();

        $users->roles()->attach($role_user);
		
		return redirect('home')->with('success');
    }
	
	public function editarContraseña($id)
    {
        $users=\App\User::find($id);
        return view('EditarContraseña',compact('users','id'));;
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update2(Request $request, $id)
    {

        $role_user = Role::where('name', 'user')->first();
		
        if($request->hasfile('Photo'))
        {
            $file = $request->file('Photo');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/img/usuarios/', $name);
        }	
        $users= \App\User::find($id);
        $users->name=$request->get('name');
        $users->email=$request->get('email');
		$users->Movil=$request->get('Movil');
		$users->password=Hash::make($request->get('password'));  
		$users->Photo=$name;
        $users->save();

        $users->roles()->attach($role_user);

        return redirect('home')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users= \App\User::find($id);
        $users->delete();
        
        return redirect('home')->with('success');
    }
}
