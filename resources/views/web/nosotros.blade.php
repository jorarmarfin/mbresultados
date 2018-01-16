@extends('themes.porto.base')


@section('main')
<section class="page-header page-header-color page-header-quaternary page-header-more-padding custom-page-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<h1>- Sobre Nosotros <span>Quienes somos</span></h1>
			</div>
			<div class="col-lg-6">
				<ul class="breadcrumb pull-right">
					<li><a href="{{ route('home.index') }}">Inicio</a></li>
					<li class="active">Nosotross</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row pt-1 pb-4 mb-3">
		<div class="col">
			<p class="lead mb-4">Somos una organizaci&oacute;n conformada por especialistas con amplia trayectoria en hacer destacar a empresas y personas.</p>
			<img src="{{ asset('img/demos/business-consulting/cases/case-4.jpg') }}" class="img-fluid mb-4" alt="" align="right"><p>Hemos logrado incrementar la rentabilidad, fidelizar clientes, estandarizar y optimizar procesos, mejorar productos y/o servicios, generar competencias en el personal, cumplir la normatividad aplicable y obtener reconocimientos para nuestros clientes.</p>
			<p>Estamos convencidos que la implementaci&oacute;n de Normas como ISO 9001, 14001, 27001, 26000, 31000, OHSAS, Ley de Seguridad y Salud en el Trabajo, entre otras ayudan a mejorar tu gesti&oacute;n y con nosotros lograr&aacute;s el resultado esperado.</p>
			<p>Podr&aacute;s contar con nosotros en todo el Per&uacute;.</p>

			<p>Si deseas formar parte de este gran equipo enviamos tu CV a rrhh@mbresultados.pe gana experiencia con los mejores.</p>
			<p>Indicar el c&oacute;digo del puesto de postulaci&oacute;n:</p>
			<div class="row pb-4">
				<div class="col-lg-4">
					<ul class="list list-icons list-icons-style-3 list-tertiary">
						<li><i class="fa fa-chevron-right"></i> (AA) Asistente Administrativo.</li>
						<li><i class="fa fa-chevron-right"></i> (CO) Consultor.</li>
					</ul>
				</div>
				<div class="col-lg-4">
					<ul class="list list-icons list-icons-style-3 list-tertiary">
						<li><i class="fa fa-chevron-right"></i> (CA) Capacitador.</li>
						<li><i class="fa fa-chevron-right"></i> (AS) Asesor.</li>
					</ul>
				</div>
				<div class="col-lg-4">
					<ul class="list list-icons list-icons-style-3 list-tertiary">
						<li><i class="fa fa-chevron-right"></i> (AU) Auditor.</li>
						<li><i class="fa fa-chevron-right"></i> (AC) Asistente Comercial.</li>
					</ul>
				</div>
			</div>
			<div class="row pb-4">
            	<div class="col-md-12">
					<div class="accordion without-bg custom-accordion-style-1 pt-4 pb-4" id="accordion7">
						<div class="card card-default">
							<div class="card-header">
								<h4 class="card-title m-0">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion7" href="#collapse7One" aria-expanded="true">
										Nuestra Vision
										<span class="custom-accordion-plus"></span>
									</a>
								</h4>
							</div>
							<div id="collapse7One" class="collapse show" aria-expanded="true">
								<div class="card-body">
									<p>Seremos referentes a nivel nacional e internacional en consultorías, asesorías y capacitaciones en gestión y asuntos legales.</p>
								</div>
							</div>
						</div>
						<div class="card card-default">
							<div class="card-header">
								<h4 class="card-title m-0">
									<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Two" aria-expanded="false">
										Nuestra Misión.
										<span class="custom-accordion-plus"></span>
									</a>
								</h4>
							</div>
							<div id="collapse7Two" class="collapse" aria-expanded="false" style="height: 0px;">
								<div class="card-body">
									<p>El desarrollo de nuestra labor se orienta a obtener y sostener la confianza de nuestros clientes en base a resultados. </p>
								</div>
							</div>
						</div>
						<div class="card card-default">
							<div class="card-header">
								<h4 class="card-title m-0">
									<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Three" aria-expanded="false">
										Los valores de nuestra empresa.
										<span class="custom-accordion-plus"></span>
									</a>
								</h4>
							</div>
							<div id="collapse7Three" class="collapse" aria-expanded="false" style="height: 0px;">
								<div class="card-body">
									<p>Responsabilidad, Confianza, Compromiso, Seguridad.</p>
								</div>
							</div>
						</div>
						<div class="card card-default">
							<div class="card-header">
								<h4 class="card-title m-0">
									<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Four" aria-expanded="false">
										Política del sistema de gestión de la calidad.
										<span class="custom-accordion-plus"></span>
									</a>
								</h4>
							</div>
							<div id="collapse7Four" class="collapse" aria-expanded="false" style="height: 0px;">
								<div class="card-body">
									<p>En MB Resultados, cumplimos los requisitos aplicables y la mejora continua,  siempre pensando en tus necesidades.</p>
								</div>
							</div>
						</div>
					</div>
            	</div><!--span-->
            </div><!--row-->
		</div>
	</div>
</div>
@endsection