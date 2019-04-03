<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasComidas;
use DB;

class MasComidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $MasComidas = MasComidas::all();
        return View('menu3',compact('MasComidas')); 
    }

	public function index2()
    {
		$dato="";
        $MasComidas = MasComidas::paginate(5);
        return View('menu3A',compact('MasComidas'))->withUsers($MasComidas)->with("dato", $dato); 
    }
	
	public function indexB($dato)
    {
		$MasComidas = MasComidas::all();
		$MasComidas=DB::table('mas_comidas as a')
		    ->where('a.Nombre','like','%'.$dato.'%')
            ->orWhere('a.Sabor','like', '%'.$dato.'%')
            ->select('a.id','a.Nombre','a.Sabor','a.Descripcion','a.Precio')
            ->get();									  
        return View('menu3A',compact('MasComidas'))->with("dato", $dato);
		
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('NuevoComida');
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
            $file->move(public_path().'/img/masComidas/', $name);
        }
	
        $MasComidas= new \App\MasComidas;
        $MasComidas->Nombre=$request->get('Nombre');
		$MasComidas->Sabor=$request->get('Sabor');
        $MasComidas->Descripcion=$request->get('Descripcion');
        $MasComidas->Precio=$request->get('Precio');
	    $MasComidas->Foto=$name; 
        $resul=$MasComidas->save();

		if($resul){
			return redirect('home')->with('msj','Comida guardada');
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
        $MasComidas=DB::table('mas_comidas as p')
        ->where('p.id', '=', $id)
        ->select('p.id','p.Nombre','p.Sabor','p.Descripcion','p.Precio','p.Foto')
        ->get();
       return view('comida', compact('MasComidas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $MasComidas = MasComidas::find($id);
		return view('EditarComida',compact('MasComidas','id'));
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
            $file->move(public_path().'/img/masComidas/', $name);
        }
	   
        $MasComidas = MasComidas::find($id);
        $MasComidas->Nombre=$request->get('Nombre');
		$MasComidas->Sabor=$request->get('Sabor');
        $MasComidas->Descripcion=$request->get('Descripcion');
        $MasComidas->Precio=$request->get('Precio');
	    $MasComidas->Foto=$name; 
        $resul=$MasComidas->save();

		if($resul){
			return redirect('home')->with('msj','Comida guardada');
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
        $MasComidas = MasComidas::find($id);
        $MasComidas->delete();

        return redirect('home')->with('msj','Comida eliminada');
    }
}
