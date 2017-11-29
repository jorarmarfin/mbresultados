@extends('themes.porto.base')


@section('main')
<section class="page-header page-header-color page-header-quaternary page-header-more-padding custom-page-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<h1>- Novedades <span>Tenemos las siguientes novedades</span></h1>
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
@endsection