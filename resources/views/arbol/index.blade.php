@extends('layouts.template')

@section('title')
Página principal de {{$param}}
@endsection

@section('header')
Cabecera de Página Principal de {{$param}}
@endsection

@section('content')
Cuerpo de Página Principal de {{$param}} <br>
<a href="{{route('arbol.create')}}">Registrar Árbol</a>
<ul>
@foreach ($arboles as $arbol)

    <li>
       <a href="{{route('arbol.show',$arbol)}}">{{$arbol->nombre}}</a>
    </li>
@endforeach
   
</ul>

{{$arboles->links()}}

@endsection

@section('footer')
Pie de Página Principal de {{$param}}
@endsection