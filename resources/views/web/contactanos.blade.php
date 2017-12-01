@extends('themes.porto.base')


@section('main')
<section class="page-header page-header-color page-header-quaternary page-header-more-padding custom-page-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<h1>- Contactanos <span>Envianos un mensaje o llamanos</span></h1>
			</div>
			<div class="col-lg-6">
				<ul class="breadcrumb pull-right">
					<li><a href="{{ route('home.index') }}">Inicio</a></li>
					<li class="active">Contactanos</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row pt-1 pb-4 mb-3">
		<div class="col-lg-8">

			<h2 class="font-weight-bold text-color-dark">- Mensaje</h2>
			<p>Bienvenidos, juntos mejoraremos tu organización  siempre serás líder en el mercado. Somos una empresa conformada por especialistas con amplia trayectoria en hacer destacar a empresas y personas.</p>

			<div class="alert alert-success d-none mt-4" id="contactSuccess">
				<strong>Success!</strong> Your message has been sent to us.
			</div>

			<div class="alert alert-danger d-none mt-4" id="contactError">
				<strong>Error!</strong> There was an error sending your message.
				<span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
			</div>
			{!! Form::open(['route'=>'envio.email.contactanos','method'=>'POST','class'=>'custom-contact-form-style-1']) !!}
				<div class="form-row">
					<div class="form-group col">
						<div class="custom-input-box">
							<i class="icon-user icons text-color-primary"></i>
							<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="Nombres*" required>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col">
						<div class="custom-input-box">
							<i class="icon-envelope icons text-color-primary"></i>
							<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="Email*" required>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col">
						<div class="custom-input-box">
							<i class="icon-bubble icons text-color-primary"></i>
							<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" placeholder="Mensaje*" required></textarea>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col">
						<input type="submit" value="Enviar Ahora" class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mb-4" data-loading-text="Loading...">
					</div>
				</div>
			{!! Form::close() !!}
		</div>
		<div class="col-lg-4">

			<div class="row mb-4">
				<div class="col">
					<div class="feature-box feature-box-style-2">
						<div class="feature-box-icon mt-1">
							<i class="icon-location-pin icons"></i>
						</div>
						<div class="feature-box-info">
							<h2 class="font-weight-bold text-color-dark">- Dirección</h2>
							<p class="text-4">
								123 Porto Blvd, Suite 100<br>
								New York, NY
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-4">
				<div class="col">
					<div class="feature-box feature-box-style-2">
						<div class="feature-box-icon mt-1">
							<i class="icon-phone icons"></i>
						</div>
						<div class="feature-box-info">
							<h2 class="font-weight-bold text-color-dark">- Teléfono</h2>
							<p class="text-4">
								01-2313152 <br>
								94-1568766
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-4">
				<div class="col">
					<div class="feature-box feature-box-style-2">
						<div class="feature-box-icon mt-1">
							<i class="icon-envelope icons"></i>
						</div>
						<div class="feature-box-info">
							<h2 class="font-weight-bold text-color-dark">- Email</h2>
							<p class="text-4">
								<a href="mbresultados@gmail.com" class="text-decoration-none">mbresultados@gmail.com</a><br>
							</p>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
</div>
@endsection