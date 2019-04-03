@extends('app2')

@section('content')
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<!-- paquetes del restauran -->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
        <h1 class="header-h2">PAQUETES</h1>
        <!-- 1° paquete -->
        </div>

        <!--#######################################-->
        <div class="container">
        <div class="row">
          
					<div class="card3">
						<div class="card">
              <img src="/img/quesadillas.jpg">
              <h1 class="header-h">PAQUETE 1: $85</h1>
							<h4>Tacos al Pastor</h4>
							<p>Aguas(horchata y jamaica)</p>
            </div>
            
            
						<div class="card">
              <img src="/img/Queso.jpg">
              <h1 class="header-h">PAQUETE 2: $115</h1>
							<h4>Barbacoa, Cochinita y Pastor</h4>
							<p>Aguas(horchata y jamaica)</p>
            </div>
            
            
						<div class="card">
              <img src="/img/micheladas.jpg">
              <h1 class="header-h">PAQUETE 3: $135</h1>
							<h4>Chuleta, Sirloin y Arrachera</h4>
							<p>Aguas(horchata y jamaica)</p>
            </div>
            
					</div>
		        </div>
            </div>
        </div>
    </div>

      </div>
    </div>
  </section>
  @endsection
  
