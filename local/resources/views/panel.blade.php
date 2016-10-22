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
		    </tr>
		</table>
	</div>
</div>

@stop