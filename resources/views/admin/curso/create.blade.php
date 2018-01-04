@extends('layouts.admin')

@section('content')
{!! Alert::render() !!}
@include('alerts.errors')
@component('components.barra-titulo-light',['title'=>'Cursos','icon'=>'fa fa-table'])
	<a href="{{ route('admin.curso.index') }}" class="icon-btn">
        <i class="fa fa-mail-reply"></i>
        <div> Regresar </div>
    </a>
@endcomponent
<div class="row">
    <div class="col-md-12">
        @component('components.portlet-light')
		{!! Form::open(['route'=>'admin.curso.store','method'=>'POST','files'=>'true']) !!}
			{!! Field::file('imagen',['label'=>'Imagen del curso Tamaño recomendado 371*255','class'=>'bg-grey-steel margin-bottom-10','template'=>'themes.metronic.fields.texth']) !!}
			{!! Field::text('titulo',['label'=>'Titulo del curso','class'=>'bg-grey-steel margin-bottom-10','template'=>'themes.metronic.fields.texth']) !!}
			{!! Field::text('titulo_corto',['label'=>'Titulo corto','class'=>'bg-grey-steel margin-bottom-10','template'=>'themes.metronic.fields.texth']) !!}
			{!! Field::text('categoria',['label'=>'Categoria','class'=>'bg-grey-steel margin-bottom-10','template'=>'themes.metronic.fields.texth']) !!}
			{!! Field::textarea('cuerpo',['label'=>'Contenido','class'=>'bg-grey-steel margin-bottom-10 SummerNote','template'=>'themes.metronic.fields.texth','rows'=>20]) !!}
			{!! Field::number('orden',['label'=>'Orden de visualizacion','class'=>'bg-grey-steel margin-bottom-10','template'=>'themes.metronic.fields.texth3']) !!}

			<div class="row">
				<div class="col-md-3"></div>
            	<div class="col-md-9">
				    <button type="submit" class="btn btn-default">
				    	<i class="fa fa-save"></i>
				        <div> Guardar </div>
				    </button>
            	</div><!--span-->
            </div><!--row-->
		{!! Form::close() !!}
		@endcomponent
	</div>
</div>
@endsection

@section('js-scripts')
<script>
	$('.SummerNote').summernote({height: 300});
</script>
@stop


@section('title','admin>Cursos>create')

@section('plugins-styles')
{!! Html::style('assets/global/plugins/bootstrap-summernote/summernote.css') !!}
@stop
@section('plugins-js')
{!! Html::script('assets/global/plugins/bootstrap-summernote/summernote.min.js') !!}
@stop