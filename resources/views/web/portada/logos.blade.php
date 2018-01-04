
<div class="container">
	<div class="row pt-1 pb-4 mb-3">
		<div class="col">
			<h2 class="font-weight-bold text-color-dark mb-3">Nuestros Clientes</h2>
			<div class="row text-center">
				<div class="owl-carousel owl-theme" data-plugin-options="{'items': 6, 'autoplay': true, 'autoplayTimeout': 3000}">
					@foreach ($Logos as $logo)
						<div>
							<img class="img-fluid" src="{{ $logo->ver_imagen }}" style="width: 25%;" alt="{{ $logo->nombre }}">
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>