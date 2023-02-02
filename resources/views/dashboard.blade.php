@extends('layouts.layoutPrincipal')

@section('titulo')
Perfil
@endsection

@section('contenido')
<div class="col-10">
    <h2 class="h2">{{auth()->user()->username}}</h2>
</div>

@endsection
