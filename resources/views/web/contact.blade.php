<section class="section section-text-light section-background m-0" style="background: url('img/demos/business-consulting/contact/contact-background.jpg'); background-size: cover;">
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
								Phone
								<span class="info text-5">
									123-456-7890
								</span>
							</span>
						</a>
					</div>
					<div class="col-lg-6 custom-sm-margin-top">
						<h4 class="mb-1">Nuestra Ubicación</h4>
						<p class="custom-opacity-font">Porto Business Consulting 123 Porto Blvd, Suite 100 New York, NY</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<h4 class="mb-1">Envianos un Email</h4>
						<a href="mail:mail@example.com" class="text-decoration-none" target="_blank" title="Mail Us">
							<span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
								Email
								<span class="info text-5">
									mail@example.com
								</span>
							</span>
						</a>
					</div>
					<div class="col-lg-6 custom-sm-margin-top">
						<h4 class="mb-1">Nuestras Redes sociales</h4>
						<ul class="social-icons custom-social-icons-style-1 mt-2 custom-opacity-font">
							<li class="social-icons-facebook">
								<a href="http://www.facebook.com/" target="_blank" title="Facebook">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li class="social-icons-twitter">
								<a href="http://www.twitter.com/" target="_blank" title="Twitter">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li class="social-icons-instagram">
								<a href="http://www.instagram.com/" target="_blank" title="Instagram">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
							<li class="social-icons-linkedin">
								<a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-6 custom-sm-margin-top">
				<h2 class="font-weight-bold">- Escribenos</h2>
				<div class="alert alert-success d-none mt-4" id="contactSuccess">
					<strong>Success!</strong> Your message has been sent to us.
				</div>

				<div class="alert alert-danger d-none mt-4" id="contactError">
					<strong>Error!</strong> There was an error sending your message.
					<span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
				</div>
				<form id="contactForm" class="custom-contact-form-style-1" action="php/contact-form.php" method="POST">
					<div class="form-row">
						<div class="form-group col">
							<div class="custom-input-box">
								<i class="icon-user icons text-color-primary"></i>
								<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="Name*" required>
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
								<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" placeholder="Message*" required></textarea>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<input type="submit" value="Submit Now" class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase" data-loading-text="Loading...">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
