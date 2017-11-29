@extends('themes.porto.base')


@section('main')
<section class="page-header page-header-color page-header-quaternary page-header-more-padding custom-page-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<h1>- Capacitaciones <span></span></h1>
			</div>
			<div class="col-lg-6">
				<ul class="breadcrumb pull-right">
					<li><a href="{{ route('home.index') }}">Inicio</a></li>
					<li class="active"><a href="{{ route('servicios') }}">Servicios</a></li>
					<li class="active"><a href="{{ route('servicios.capacitaciones') }}">Capacitaciones</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row pt-1 pb-4 mb-3">
		<div class="col">
			<p class="lead mb-4">IN HOUSE</p>
			<img src="{{ asset('img/demos/business-consulting/cases/case-5.jpg') }}" class="img-fluid mb-4" alt="" align="right">
			<p>Previo diagnóstico preparamos la capacitación de acuerdo a tus necesidades.
			Lograremos la competencia de tu personal.</p>
			<p class="lead mb-4">DISPONIBLE A PÚBLICO EN GENERAL</p>
			<p>Nuestros capacitadores  especialista desarrollan cursos de mayor demanda en Calidad, Seguridad, Ambiente, Contabilidad, Turismo, Derecho, Administración, Educación, entre otros.
			<p>En las capacitaciones encontraras respuestas a tus necesidades.</p>
			<p>Aplicamos una metodología personalizada</p>
		</div>
	</div>
</div>
@endsection