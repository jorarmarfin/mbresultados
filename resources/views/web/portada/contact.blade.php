<section class="section section-text-light section-background m-0" style="background: url({{ asset('img/demos/business-consulting/contact/contact-background.jpg') }}); background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2 class="font-weight-bold">- Contactanos</h2>
				<p class="custom-opacity-font">Puedes contactarnos por los siguientes medios.</p>
				<div class="row">
					<div class="col-lg-6">
						<h4 class="mb-1">Lamanos</h4>
						<a href="tel:+1234567890" class="text-decoration-none" target="_blank" title="Call Us">
							<span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
								Telefonos
								<span class="info text-4">51-1- 7245312</span>
							</span>
							<span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
								RPC
								<span class="info text-4">941 568 766</span>
								<span class="info text-4">941 568 764</span>
							</span>
							<span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
								RPM
								<span class="info text-4">996 021 784</span>
							</span>
							<span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
								ENTEL
								<span class="info text-4">977 400 092</span>
							</span>
						</a>
					</div>
					<div class="col-lg-6 custom-sm-margin-top">
						<h4 class="mb-1">Nuestra Ubicación</h4>
						<p class="custom-opacity-font">Jiron Teodoro Cardenas N° 475 Int. 202
Santa Beatriz Lima</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<h4 class="mb-1">Envianos un Email</h4>
						<a href="mail:comercial@mbresultados.com" class="text-decoration-none" target="_blank" title="Mail Us">
							<span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
								Email
								<span class="info text-4">
									comercial@mbresultados.com  mbresultados@gmail.com
								</span>
							</span>
						</a>
					</div>
					<div class="col-lg-6 custom-sm-margin-top">
						<h4 class="mb-1">Nuestras Redes sociales</h4>
						<ul class="social-icons custom-social-icons-style-1 mt-2 custom-opacity-font">
							<li class="social-icons-facebook">
								<a href="https://www.facebook.com/mb.resultados.1" target="_blank" title="Facebook">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li class="social-icons-twitter">
								<a href="http://www.twitter.com/" target="_blank" title="Twitter">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-6 custom-sm-margin-top">
				<h2 class="font-weight-bold">- Escribenos</h2>
				<div class="alert alert-success d-none mt-4" id="contactSuccess">
					<strong>Success!</strong> Su mensaje ha sido enviado a nosotros.
				</div>

				<div class="alert alert-danger d-none mt-4" id="contactError">
					<strong>Error!</strong> Hubo un error al enviar su mensaje.
					<span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
				</div>

				{!! Form::open(['route'=>'envio.email.contactanos','method'=>'POST','class'=>'custom-contact-form-style-1']) !!}
					<div class="form-row">
						<div class="form-group col">
							<div class="custom-input-box">
								<i class="icon-user icons text-color-primary"></i>
								<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="Nombre*" required>
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
							<input type="submit" value="Enviar ahora" class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase" data-loading-text="Loading...">
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>
