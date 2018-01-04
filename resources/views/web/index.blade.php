@extends('themes.porto.base')


@section('main')
	@include('web.portada.slider')
	@include('web.portada.position1')
	@include('web.portada.about')
	@include('web.portada.cases')
	@include('web.portada.expertises')
	@include('web.portada.logos')
@if (isset($Blog))
	@include('web.portada.blog')
@endif

@endsection