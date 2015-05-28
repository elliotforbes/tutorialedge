@extends('admin')


@section('content')

<h1>Write a new Article</h1>

{!! Form::open(['url' => 'Programming_Design_Patterns']) !!}
   <div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('excerpt', 'Excerpt:') !!}
        {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
    </div>
{!! Form::close() !!}

@stop