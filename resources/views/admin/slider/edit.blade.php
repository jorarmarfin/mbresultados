@extends('layouts.admin')

@section('content')
{!! Alert::render() !!}
@include('alerts.errors')
@component('components.barra-titulo-light',['title'=>'sliders','icon'=>'fa fa-table'])
	<a href="{{ route('admin.slider.index') }}" class="icon-btn">
        <i class="fa fa-mail-reply"></i>
        <div> Regresar </div>
    </a>
@endcomponent
<div class="row">
    <div class="col-md-12">
        @component('components.portlet-light')
		{!! Form::model($slider,['route'=>['admin.slider.update',$slider],'method'=>'PUT','files'=>'true']) !!}
			<img src="{{ $slider->ver_imagen }}" width="25%"><p>imagen del Slider</p>
			{!! Field::file('imagen',['label'=>'Imagen Principal','class'=>'bg-grey-steel margin-bottom-10','template'=>'themes.metronic.fields.texth']) !!}
			{!! Field::text('titulo1',['label'=>'Titulo superior','class'=>'bg-grey-steel margin-bottom-10','template'=>'themes.metronic.fields.texth']) !!}
			{!! Field::text('titulo2',['label'=>'Titulo Inferior','class'=>'bg-grey-steel margin-bottom-10','template'=>'themes.metronic.fields.texth']) !!}
			{!! Field::text('link',['label'=>'Url a donde quiere redirigir','class'=>'bg-grey-steel margin-bottom-10','template'=>'themes.metronic.fields.texth']) !!}
			{!! Field::text('orden',['label'=>'Orden de visualizacion','class'=>'bg-grey-steel margin-bottom-10','template'=>'themes.metronic.fields.texth']) !!}

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


@section('title','admin>usuarios>create')
