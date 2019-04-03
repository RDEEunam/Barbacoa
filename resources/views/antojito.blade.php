@extends('app2')

@section('content')
<link href="{{asset('css/index.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link href="{{asset('css/style.css')}}" rel="stylesheet">
  <!-- platillos del restauran -->

<section id="menu-list" class="section-padding"> 
@foreach($Antojitos as $productos)
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center marb-35">
			<div class="card2">
			    <div class="card">
					<img src="/img/antojitos/{{$productos->Foto}}" width="200px">
		            <div class="col-md-12 text-center marb-35">	  
                         <h3 style="color:yellow;">{{$productos->Nombre}}</h3>
                    </div>
		            <div class="form-grup">
                         <h4>{{$productos->Sabor}}<h4>
		                 <h4>{{$productos->Descripcion}}<h4>
		                 <h4>{{$productos->Precio}}<h4>
                    </div>
				 </div>						
			</div>
        </div>
    </div>
</div>
@endforeach
</section>

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="{{ asset('contactform/contactform.js') }}"></script>
@endsection