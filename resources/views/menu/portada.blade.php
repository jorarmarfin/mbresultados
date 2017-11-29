<div class="header-column justify-content-end">
	<div class="header-row">
		<div class="header-nav header-nav-dark-dropdown">
			<div class="header-nav-main header-nav-main-square custom-header-nav-main-effect-1">
				<nav class="collapse">
					<ul class="nav nav-pills" id="mainNav">
						<li>
							<a class="nav-link active" href="{{ route('home.index') }}">
								Inicio
							</a>
						</li>
						<li>
							<a class="nav-link" href="{{ route('nosotros') }}">
								Nosotros
							</a>
						</li>
						<li class="dropdown dropdown-primary">
							<a class="dropdown-toggle nav-link" href="{{ route('servicios') }}">
								Servicios
							</a>
							<ul class="dropdown-menu">
								<li>
									<a class="dropdown-item" href="{{ route('servicios.consultorias') }}">
										Consultorias
									</a>
								</li>
								<li>
									<a class="dropdown-item" href="{{ route('servicios.capacitaciones') }}">
										Capacitaciones
									</a>
								</li>
								<li>
									<a class="dropdown-item" href="{{ route('servicios.asesorias') }}">
										Asesorias
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="nav-link" href="{{ route('novedades') }}">
								Novedades
							</a>
						</li>
						<li>
							<a class="nav-link" href="{{ route('contactanos') }}">
								Contactanos
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
				<i class="fa fa-bars"></i>
			</button>
		</div>
	</div>
</div>
