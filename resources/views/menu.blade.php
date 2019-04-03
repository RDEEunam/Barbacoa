@extends('app2')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link href="{{asset('css/style.css')}}" rel="stylesheet">
  <!-- platillos del restauran -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <section id="menu-list" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center marb-35">
                <h1 class="header-h">Menu</h1>
		        <div class="row">
					<div class="card2">
						<div class="card">
							<img src="/img/quesadillas.jpg">
							<h4>Antojitos</h4>
							<p>En este menú encontrara la gran variedad de platillos que están disponibles</p>
							<a href="{{Action('AntojitoController@index')}}">Ver Menu</a>
						</div>
						<div class="card">
							<img src="/img/Queso.jpg">
							<h4>Especialidades</h4>
							<p>En este menú encontrara todos las Especialidades del local que están disponibles</p>
							<a href="{{Action('MasComidaController@index')}}">Ver Menu</a>
						</div>
						<div class="card">
							<img src="/img/micheladas.jpg">
							<h4>BEBIDAS</h4>
							<p>En este menú encontrara todos los tipos de bebidas que están disponibles</p>
							<a href="{{Action('BebidaController@index')}}">Ver Menu</a>
						</div>
					</div>
		        </div>
            </div>
        </div>
    </div>
  </section>

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
@endsection
