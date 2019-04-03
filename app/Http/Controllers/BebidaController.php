<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bebidas;
use DB;

class BebidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Bebidas = Bebidas::all();
        return View('menu4',compact('Bebidas')); 
    }
	
	public function index2()
    {
		$dato="";
        $Bebidas = Bebidas::paginate(5);
        return View('menu4A',compact('Bebidas'))->withUsers($Bebidas)->with("dato", $dato); 
    }

	public function indexB($dato)
    {

		$Bebidas = Bebidas::all();
		$Bebidas=DB::table('bebidas as a')
		    ->where('a.Nombre','like','%'.$dato.'%')
            ->orWhere('a.Sabor','like', '%'.$dato.'%')
            ->select('a.id','a.Nombre','a.Sabor','a.Descripcion','a.Precio')
            ->get();									  
        return View('menu4A',compact('Bebidas'))->with("dato", $dato);
		
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('NuevaBebida');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
	    if($request->hasfile('Foto'))
        {
            $file = $request->file('Foto');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/img/bebidas/', $name);
        }
	
        $Bebidas= new \App\Bebidas;
        $Bebidas->Nombre=$request->get('Nombre');
		$Bebidas->Sabor=$request->get('Sabor');
        $Bebidas->Descripcion=$request->get('Descripcion');
        $Bebidas->Precio=$request->get('Precio');
	    $Bebidas->Foto=$name; 
        $resul=$Bebidas->save();

		if($resul){
			return redirect('home')->with('msj','Bebida guardada');
		}
		else
		{
			return redirect('home')->with('msj','Hubo un error');
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Bebidas=DB::table('bebidas as p')
        ->where('p.id', '=', $id)
        ->select('p.id','p.Nombre','p.Sabor','p.Descripcion','p.Precio','p.Foto')
        ->get();
       return view('bebida', compact('Bebidas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Bebidas= \App\Bebidas::find($id);
		return view('EditarBebida',compact('Bebidas','id'));
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
		
	    if($request->hasfile('Foto'))
        {
            $file = $request->file('Foto');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/img/bebidas/', $name);
        }
	   
        $Bebidas= \App\Bebidas::find($id);
		$Bebidas->Nombre=$request->get('Nombre');
		$Bebidas->Sabor=$request->get('Sabor');
        $Bebidas->Descripcion=$request->get('Descripcion');
        $Bebidas->Precio=$request->get('Precio');
	    $Bebidas->Foto=$name; 
        $resul=$Bebidas->save();

		if($resul){
			return redirect('home')->with('msj','Bebida guardada');
		}
		else
		{
			return redirect('home')->with('msj','Hubo un error');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Bebidas= \App\Bebidas::find($id);
        $Bebidas->delete();

        return redirect('home')->with('msj','Bebida eliminada');

    }
}
