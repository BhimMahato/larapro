@extends('app')

@section('content')
    <h1>edit user's detail</h1>

    {!! Form::model($users,['method'=>'PATCH','action'=>['vmcontroller@update',$users->id]]) !!}

    @include('user.form',['submitbuttom'=>'update'])

    {!! Form::close() !!}

{{--    @include('errors.list')--}}
    @if (isset($errors) && $errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@stop


