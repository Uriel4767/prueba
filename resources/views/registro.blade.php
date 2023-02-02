@extends('layouts.layoutPrincipal')

@section('titulo')
Registro
@endsection

@section('contenido')
<form action="/registro" method="POST">
  @csrf
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="name" name="name" class="form-control" />
        <label class="form-label" for="form6Example1">Nombre</label>
      </div>
    </div>
    @error ('name')
    <p style="color: red">{{$message}} </p>
    @enderror

    <div class="col">
      <div class="form-outline">
        <input type="text" id="username" name="username" class="form-control" />
        <label class="form-label" for="form6Example2">Usuario</label>
      </div>
    </div>
  </div>
  @error ('username')
    <p style="color: red">{{$message}} </p>
    @enderror

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="email" name="email" class="form-control" />
    <label class="form-label" for="form6Example5">Email</label>
  </div>
  @error ('email')
    <p style="color: red">{{$message}} </p>
    @enderror

  <!-- Number input -->
  <div class="form-outline mb-4">
    <input type="password" id="password" name="password" class="form-control" />
    <label class="form-label" for="form6Example6">Password</label>
  </div>
  @error ('password')
    <p style="color: red">{{$message}} </p>
    @enderror

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Aceptar</button>
</form>



@endsection