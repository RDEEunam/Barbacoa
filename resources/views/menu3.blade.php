@extends('app2')

@section('content')
<link href="{{asset('css/index.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
  <!-- platillos del restauran -->
  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Lista de menús</h1>
          <p class="header-p">Mas comidas
            <br></p>
        </div>
        <!-- menu de platillos -->
        <div class="col-md-12  text-center" id="menu-flters">
          <ul>
            <li><a class="filter active" data-filter=".menu-restaurant">Menu completo</a></li>
			<li><a class="filter" data-filter=".Costra">Costras</a></li>
			<li><a class="filter" data-filter=".Queso">Quesos fundidos</a></li>
            <li><a class="filter" data-filter=".Nacho">Nachos</a></li>
            <li><a class="filter" data-filter=".Desayuno">Desayunos</a></li>
          </ul>
        </div>
        <!-- todos los platillos -->
        <div id="menu-wrapper">
		
		@foreach($MasComidas as $q)
          <div class="{{$q->Nombre}} menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="{{Action('MasComidaController@show', $q->id)}}">{{$q->Nombre}} de {{$q->Sabor}}</a>
              <span style="left: 200px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">${{$q->Precio}}</span>
            </span>
          </div>
		@endforeach	

		
        </div>

      </div>
    </div>
  </section>

@endsection