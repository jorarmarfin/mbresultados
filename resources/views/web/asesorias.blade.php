@extends('themes.porto.base')


@section('main')
<section class="page-header page-header-color page-header-quaternary page-header-more-padding custom-page-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<h1>- Asesorias <span></span></h1>
			</div>
			<div class="col-lg-6">
				<ul class="breadcrumb pull-right">
					<li><a href="{{ route('home.index') }}">Inicio</a></li>
					<li class="active"><a href="{{ route('servicios') }}">Servicios</a></li>
					<li class="active"><a href="{{ route('servicios.asesorias') }}">asesorias</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row pt-1 pb-4 mb-3">
		<div class="col">
			<p class="lead mb-4">Asesoría en la Sostenibilidad de Sistemas de Gestión</p>
			<img src="{{ asset('img/demos/business-consulting/cases/case-4.jpg') }}" class="img-fluid mb-4 img-thumbnail" alt="" align="right" style="margin-left: 15px;">
			<p>Previo diagnóstico preparamos la capacitación de acuerdo a tus necesidades.
			Lograremos la competencia de tu personal.</p>

			<p class="lead mb-4">Asesorías en la gestión de Auditorias</p>
			<p>Nuestros capacitadores  especialista desarrollan cursos de mayor demanda en Calidad, Seguridad, Ambiente, Contabilidad, Turismo, Derecho, Administración, Educación, entre otros.
			<p>En las capacitaciones encontraras respuestas a tus necesidades.</p>
			<p>Aplicamos una metodología personalizada</p>

			<p class="lead mb-4">Asesoramiento en Gestión Empresarial</p>
			<img src="{{ asset('img/demos/business-consulting/cases/case-5.jpg') }}" class="img-fluid mb-4 img-thumbnail" alt="" align="left" style="margin-right: 15px;">

			<p>Nuestros capacitadores  especialista desarrollan cursos de mayor demanda en Calidad, Seguridad, Ambiente, Contabilidad, Turismo, Derecho, Administración, Educación, entre otros.
			<p>En las capacitaciones encontraras respuestas a tus necesidades.</p>
			<p>Aplicamos una metodología personalizada</p>

			<p class="lead mb-4">Coaching personal y empresarial</p>
			<p>Nuestros capacitadores  especialista desarrollan cursos de mayor demanda en Calidad, Seguridad, Ambiente, Contabilidad, Turismo, Derecho, Administración, Educación, entre otros.
			<p>En las capacitaciones encontraras respuestas a tus necesidades.</p>
			<p>Aplicamos una metodología personalizada</p>

			<img src="{{ asset('img/demos/business-consulting/cases/case-5.jpg') }}" class="img-fluid mb-4 img-thumbnail" alt="" align="right" style="margin: 5;">
			<p class="lead mb-4">Asesoría Legal</p>
			<p>Nuestros capacitadores  especialista desarrollan cursos de mayor demanda en Calidad, Seguridad, Ambiente, Contabilidad, Turismo, Derecho, Administración, Educación, entre otros.
			<p>En las capacitaciones encontraras respuestas a tus necesidades.</p>
			<p>Aplicamos una metodología personalizada</p>
		</div>
	</div>
</div>
@endsection