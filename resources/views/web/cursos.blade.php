@extends('themes.porto.base')


@section('main')
<section class="page-header page-header-color page-header-quaternary page-header-more-padding custom-page-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<h1>- Cursos <span>Nuestros Cursos</span></h1>
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
<div class="row">
	@foreach ($Cursos as $curso)
	<div class="col-lg-4 isotope-item economic">
		<a href="{{ route('ver.curso',$curso->slug) }}" class="text-decoration-none">
			<span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
				<span class="thumb-info-wrapper m-0">
					<img src="img/demos/business-consulting/cases/case-1.jpg" class="img-fluid" alt="">
				</span>
				<span class="thumb-info-caption background-color-secondary p-3 pt-4 pb-4">
					<span class="custom-thumb-info-title">
						<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-4">{{ $curso->titulo_corto }}</span>
						<span class="custom-thumb-info-desc font-weight-light">{{ $curso->categoria }}</span>
					</span>
					<span class="custom-arrow"></span>
				</span>
			</span>
		</a>
	</div>
	@endforeach
</div><!--row-->
</div>
@endsection