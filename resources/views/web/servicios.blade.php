@extends('themes.porto.base')


@section('main')
<section class="page-header page-header-color page-header-quaternary page-header-more-padding custom-page-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<h1>- Servicios <span>Nuestros principales servicios</span></h1>
			</div>
			<div class="col-lg-6">
				<ul class="breadcrumb pull-right">
					<li><a href="{{ route('home.index') }}">Inicio</a></li>
					<li class="active">Servicios</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row pt-1 pb-5 mb-3">
		<div class="col">

			<div class="row mb-3">
				<div class="col">
					<div class="feature-box custom-feature-box custom-feature-box-active feature-box-style-2">
						<div class="feature-box-icon">
							<img src="img/demos/business-consulting/expertise/expertise-1.jpg" alt="">
						</div>
						<div class="feature-box-info ml-3">
							<h4 class="font-weight-normal text-5">Consultorias</h4>
							<p>Adaptamos el cumplimiento de las Normas a la realidad de tu empresa con las mejores prácticas.</p>
							<a href="{{ route('servicios.consultorias') }}">Leer más <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col">
					<div class="feature-box custom-feature-box custom-feature-box-active feature-box-style-2">
						<div class="feature-box-icon">
							<img src="img/demos/business-consulting/expertise/expertise-2.jpg" alt="">
						</div>
						<div class="feature-box-info ml-3">
							<h4 class="font-weight-normal text-5">Capacitaciones</h4>
							<p>Previo diagnóstico preparamos la capacitación de acuerdo a tus necesidades.</p>
							<a href="{{ route('servicios.capacitaciones') }}">Leer más <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col">
					<div class="feature-box custom-feature-box custom-feature-box-active feature-box-style-2">
						<div class="feature-box-icon">
							<img src="img/demos/business-consulting/expertise/expertise-3.jpg" alt="">
						</div>
						<div class="feature-box-info ml-3">
							<h4 class="font-weight-normal text-5">Asesorias</h4>
							<p>Nuestros especialistas te ayudaran en la sostenibilidad de Sistemas de Gestión de tu empresa.</p>
							<a href="{{ route('servicios.asesorias') }}">Leer más <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection