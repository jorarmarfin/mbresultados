@extends('layouts.admin')

@section('content')
{!! Alert::render() !!}

@component('components.barra-titulo-light',['title'=>'Blog','icon'=>'fa fa-table'])
    <a href="{{ route('admin.blog.create') }}" class="icon-btn">
        <i class="fa fa-plus"></i>
        <div> Nuevo </div>
    </a>
@endcomponent
<div class="row">
    <div class="col-md-12">
        @component('components.portlet-light')
            <table class="table table-bordered table-hover" id="Tabla">
                <thead>
                    <tr>
                        <th> Imagen </th>
                        <th> Titulo </th>
                        <th> orden </th>
                        <th> Activo </th>
                        <th> Opciones </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($Lista as $item)
                    <tr>
                        <td> <img alt="" src="{{ $item->ver_imagen }}" width="55px"> </td>
                        <td> {{ $item->titulo }} </td>
                        <td> {{ $item->orden }} </td>
                        <td>
                        @if ($item->activo)
                            <a href="{{ route('admin.blog.activar',['blog',$item->id,0]) }}" class="label label-sm label-info"> SI </a>
                        @else
                            <a href="{{ route('admin.blog.activar',['blog',$item->id,1]) }}" class="label label-sm label-danger"> NO </a>
                        @endif
                        </td>
                        <td>
                        {!!Form::boton('Edit',route('admin.blog.edit',$item->id),'green','fa fa-edit','btn btn-xs')!!}
                        {!!Form::boton('Delete',route('admin.blog.delete',$item->id),'red-pink','fa fa-trash','btn btn-xs')!!}
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

		@endcomponent
	</div>
</div>
@endsection


@section('js-scripts')
<script>
$('#Tabla').dataTable({
    "language": {
        "emptyTable": "No hay datos disponibles",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ filas",
        "search": "Buscar:",
        "lengthMenu": "_MENU_ registros"
    },

});
</script>
@stop

@section('title','Blogs')
