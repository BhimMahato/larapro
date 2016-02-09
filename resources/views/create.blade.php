@extends('app')
@section('content')
{!! Form::open(['method'=>'POST','url'=>'user']) !!}

@include('user.form',['submitbuttom'=>'add'])

{!! Form::close() !!}

@stop
@if (isset($errors) && $errors->any())
	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
	    @endforeach
	</ul>
	@endif
