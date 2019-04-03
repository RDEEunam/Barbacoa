<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactanos=\App\contactanos::all();
        return view('contactos',compact('contactanos'));
    }

	public function index2()
    {
		$dato="";
        $contactanos = \App\contactanos::paginate(5);
        return View('menuC',compact('contactanos'))->withUsers($contactanos)->with("dato", $dato);
    }
	
	public function indexB($dato)
    {

		$contactanos = \App\contactanos::all();
		$contactanos=DB::table('contactanos as a')
		    ->where('a.Nombre','like','%'.$dato.'%')
            ->orWhere('a.Correo','like', '%'.$dato.'%')
            ->select('a.id','a.Nombre','a.Correo','a.Numero','a.Mensaje')
            ->get();									  
        return View('menuC',compact('contactanos'))->with("dato", $dato);
		
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contactos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $contactanos= new \App\contactanos;
		 $contactanos->Nombre=$request->get('Nombre');
		 $contactanos->Correo=$request->get('Correo');
		 $contactanos->Numero=$request->get('Numero');
		 $contactanos->Mensaje=$request->get('Mensaje');
		 $contactanos->save();
		 
		 return redirect('contactanos')->with('success', 'Enviado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactanos=DB::table('contactanos as p')
        ->where('p.id', '=', $id)
        ->select('p.id','p.Nombre','p.Correo','p.Numero','p.Mensaje')
        ->get();
       return view('Mensajeria', compact('contactanos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactanos= \App\contactanos::find($id);
        $contactanos->delete();

        return redirect('home')->with('msj2','Mensaje eliminado eliminada');
    }
}
