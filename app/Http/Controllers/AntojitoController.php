<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Antojitos;
use DB;

class AntojitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Antojitos = Antojitos::all();
        return View('menu2',compact('Antojitos')); 
    }

	public function index2()
    {
	   $dato="";
       $Antojitos = Antojitos::paginate(10);					  
       return View('menu2A',compact('Antojitos'))->with("dato", $dato);	
    }
	
	public function indexB($dato)
    {

		$Antojitos = Antojitos::all();
		$Antojitos=DB::table('antojitos as a')
		    ->where('a.Nombre','like','%'.$dato.'%')
            ->orWhere('a.Sabor','like', '%'.$dato.'%')
            ->select('a.id','a.Nombre','a.Sabor','a.Descripcion','a.Precio')
            ->get();									  
        return View('menu2A',compact('Antojitos'))->with("dato", $dato);
		
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('NuevoAntojito');
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
            $file->move(public_path().'/img/antojitos/', $name);
        }

        $Antojitos= new \App\Antojitos;
        $Antojitos->Nombre=$request->get('Nombre');
		$Antojitos->Sabor=$request->get('Sabor');
        $Antojitos->Descripcion=$request->get('Descripcion');
        $Antojitos->Precio=$request->get('Precio');
	    $Antojitos->Foto=$name; 
        $resul=$Antojitos->save();

		if($resul){
			return redirect('home')->with('msj','Antojito guardado');
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
         $Antojitos=DB::table('antojitos as p')
        ->where('p.id', '=', $id)
        ->select('p.id','p.Nombre','p.Sabor','p.Descripcion','p.Precio','p.Foto')
        ->get();
       return view('antojito', compact('Antojitos'));
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Antojitos= \App\Antojitos::find($id);
		return view('EditarAntojito',compact('Antojitos','id'));
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
            $file->move(public_path().'/img/antojitos/', $name);
        }

        $Antojitos=\App\Antojitos::find($id);
        $Antojitos->Nombre=$request->get('Nombre');
		$Antojitos->Sabor=$request->get('Sabor');
        $Antojitos->Descripcion=$request->get('Descripcion');
        $Antojitos->Precio=$request->get('Precio');
        $Antojitos->Foto=$name; 
        $resul=$Antojitos->save();

		if($resul){
			return redirect('home')->with('msj','Antojito Editado');
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
        $Antojitos= \App\Antojitos::find($id);
        $Antojitos->delete();

        return redirect('home')->with('msj2','Antojito eliminado eliminada');
    }
}
