@extends('themes.porto.base')


@section('main')
<section class="page-header page-header-color page-header-quaternary page-header-more-padding custom-page-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<h1>- {{ $blog->titulo }} <span></span></h1>
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
	<div class="row pt-1 pb-4 mb-3">
		<div class="col">

			<div class="row mt-2 mb-2">
				<article class="blog-post">
					<div class="col">
						<div class="post-infos mb-4">
							<span class="info posted-by">
								Escrito por:
								<span class="post-author font-weight-semibold text-color-dark">
									{{ $blog->posteado }}
								</span>
							</span>
							<span class="info like ml-4">
								Fecha de publicacion:
								<span class="like-number font-weight-semibold custom-color-dark">
									{{ $blog->fecha }}
								</span>
							</span>
						</div>

						<hr class="solid">

						<img src="{{ $blog->ver_imagen }}" style="max-width: 350px;" class="img-fluid float-right ml-4 mb-4" alt="">
						{!! $blog->cuerpo !!}

					</div>
				</article>
			</div>

		</div>
	</div>
</div>
@endsection