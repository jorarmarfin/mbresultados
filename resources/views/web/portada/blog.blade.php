<section class="custom-section-padding">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="font-weight-bold text-color-dark">- Mi Blog</h2>
			</div>
		</div>
		<div class="row">
			<article class="blog-post col">
				<div class="row">
					<div class="col-sm-8 col-lg-5">
						<div class="blog-post-image-wrapper">
							<img src="{{ $Blog->ver_imagen }}" alt class="img-fluid mb-4" />
							<span class="blog-post-date background-color-primary text-color-light font-weight-bold">
								{{ $Blog->fecha_dia }}
								<span class="month-year font-weight-light">
								{{ $Blog->fecha_mes_anio }}
								</span>
							</span>
						</div>
					</div>
					<div class="col-sm-12 col-lg-7">
						<h2> {{ $Blog->titulo }}</h2>
						{!! $Blog->resumen !!}
						<hr class="solid">
						<div class="post-infos d-flex">
							<span class="info posted-by">
								Publicado por:
								<span class="post-author font-weight-semibold text-color-dark">
									{{ $Blog->posteado }}
								</span>
							</span>
						</div>
						<a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mt-5" href="{{ route('ver.blog',$Blog->slug) }}" title="Read More">Leer Mas</a>
					</div>
				</div>
			</article>
		</div>
	</div>
</section>
