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
          <p class="header-p">Todos los platillos disponibles
            <br></p>
        </div>
        <!-- menu de platillos -->
        <div class="col-md-12  text-center" id="menu-flters">
          <ul>
            <li><a class="filter active" data-filter=".menu-restaurant">Menu completo</a></li>
			<li><a class="filter" data-filter=".Quesadilla">Quesadillas</a></li>
			<li><a class="filter" data-filter=".Especialidad">Especialidades</a></li>
            <li><a class="filter" data-filter=".Taco">Tacos</a></li>
            <li><a class="filter" data-filter=".Torta">Tortas</a></li>
            <li><a class="filter" data-filter=".Gringa">Gringas</a></li>
            <li><a class="filter" data-filter=".Alambre">Alambres</a></li>
          </ul>
        </div>
        <!-- todos los platillos -->
        <div id="menu-wrapper">
		
		@foreach($Antojitos as $q)
          <div class="{{$q->Nombre}} menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="{{Action('AntojitoController@show', $q->id)}}">{{$q->Nombre}} de {{$q->Sabor}}</a>
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