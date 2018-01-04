@extends('themes.porto.base')


@section('main')
<section class="page-header page-header-color page-header-quaternary page-header-more-padding custom-page-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<h1>- Blogs <span></span></h1>
			</div>
			<div class="col-lg-6">
				<ul class="breadcrumb pull-right">
					<li><a href="{{ route('home.index') }}">Inicio</a></li>
					<li class="active">Blog</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row pt-1 pb-5 mb-3">
		<div class="col">
@foreach ($blogs as $blog)
			<div class="row mt-2 mb-2">
				<article class="blog-post col">
					<div class="row">
						<div class="col-sm-8 col-lg-5">
							<div class="blog-post-image-wrapper">
								<a href="{{ route('ver.blog',$blog->slug) }}" title="Leer Mas">
									<img src="{{ $blog->ver_imagen }}" alt class="img-fluid mb-4" />
								</a>
								<span class="blog-post-date background-color-primary text-color-light font-weight-bold">
									{{ $blog->fecha_dia }}
									<span class="month-year font-weight-light">
										{{ $blog->fecha_mes_anio }}
									</span>
								</span>
							</div>
						</div>
						<div class="col-sm-12 col-lg-7">
							<h2> {{ $blog->titulo }}</h2>
								{{ $blog->resumen }}
							<hr class="solid">
							<div class="post-infos d-flex">
								<span class="info posted-by">
									Publicado por:
									<span class="post-author font-weight-semibold text-color-dark">
										{{ $blog->posteado }}
									</span>
								</span>
							</div>
							<a class="btn btn-outline custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mt-5" href="{{ route('ver.blog',$blog->slug) }}" title="Read More">Leer Mas</a>
						</div>
					</div>
				</article>
			</div>

			<hr class="solid tall mt-5">

@endforeach

		</div>
	</div>
</div>

@endsection