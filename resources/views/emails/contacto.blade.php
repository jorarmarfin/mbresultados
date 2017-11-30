@extends('layouts.email')

@section('title')
Tienes un mensaje de {{ $datos['name'] }}
@stop

@section('content')
{{ $datos['message'] }}
<p><strong>Email de usuario:</strong> {{ $datos['email'] }} </p></br>

<p>Este mensaje se ha enviado desde la pagina web.</p>
@stop

@section('notes','Para mayor detalles comuniquese al siguiente correo luis.mayta@gmail.com')
