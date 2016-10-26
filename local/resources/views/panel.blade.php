@extends('layout.master')
@section('title', 'Panel de Usuarios')

<!--Barra de Navegacion-->
@section('navbar')
<div class="container">
	<div class="row">
		<div class="col-xs-4 col-sm-4 col-md-4">
			<img src="{{url('')}}/img/justadmin.png"/>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4"></div>
		<div class="col-xs-4 col-sm-4 col-md-4 align-right" style="padding:50">Login</div>
	</div>
</div>
@stop

<!--Contenido-->
@section('content')
<div class="container">
	<div class="table-responsive">
		<table class="table table-striped">
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Password</th>
				<th>Opciones</th>
		    </tr>
		    <!--@if (!empty($usuarios))-->
			    @foreach($usuarios as $usuario)
			    <tr id="usr{{$usuario->id}}">
				    <td>{{$usuario->id}}</td>
				    <td>{{$usuario->nombre}}</td>
				    <td>{{$usuario->apellido}}</td>
				    <td>{{$usuario->email}}</td>
				    <td>{{$usuario->password}}</td>
				    <td><button class="button-link btn-eliminar" value="{{$usuario->id}}">Eliminar</button></td>
				</tr>
			    @endforeach
		    <!--@endif-->
		</table>
	</div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}" />

@stop