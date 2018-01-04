@extends('themes.porto.base')


@section('main')
<section class="page-header page-header-color page-header-quaternary page-header-more-padding custom-page-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<h1>- {{ $curso->titulo }} <span>{{ $curso->categoria }}</span></h1>
			</div>
			<div class="col-lg-6">
				<ul class="breadcrumb pull-right">
					<li><a href="{{ route('home.index') }}">Inicio</a></li>
					<li class="active">Cursos</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row pt-1 pb-5 mb-3">
		<div class="col">
			<div class="container">
					<div class="row pt-1 pb-5 mb-3">
						<div class="col">
							{!! $curso->cuerpo !!}
						</div>
					</div>

				</div>

		</div>
	</div>
</div>
@endsection