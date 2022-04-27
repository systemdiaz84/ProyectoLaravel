@extends('layouts.template')

@section('title')
Crear {{$param}}
@endsection

@section('header')
Cabecera para crear {{$param}}
@endsection

@section('content')

Cuerpo para crear de {{$param}}
<br>
<a href="{{route('arbol.index')}}">Regresar</a>
<br>
<form action="{{route('arbol.store')}}" method="POST">
@csrf
<label>Nombre: <br>
    <input type="text" name="nombre">
<br>
<label>Especie: <br>
    <input type="text" name="especie">
</label>
<br>
<label>Descripción <br>
<textarea name="descripcion" cols="30" rows="10"></textarea>
</label>
<br>

<button type="submit">Enviar formulario</button>

</form>
@endsection

@section('footer')
Pie para crear {{$param}}
@endsection
