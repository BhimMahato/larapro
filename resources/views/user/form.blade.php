{!! form::hidden('user_id',1) !!}

{!! Form::label('title','Title:') !!}
{!! Form::text('title', null) !!}<br><br>

{!! Form::label('body','Body:')!!}
{!! Form::text('body', null ) !!}<br><br>

{{--{!! Form::label('password','Password:') !!}--}}
{{--{!! Form::password('password',null) !!}<br><br>--}}

{!! Form::submit($submitbuttom)!!}