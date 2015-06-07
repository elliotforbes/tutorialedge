@extends('admin.admin')


@section('content')

{!! Form::open(array('route' => 'article_store', 'class' => 'form')) !!}
    <div class="row">
        <div class="col-lg-8">
           <h2>Write a new Article</h2>
                <div class="form-group">
                    {!! Form::label('Post Title') !!}
                    {!! Form::text('title', null,
                        array('required', 
                            'class'=>'form-control',
                            'placeholder'=>'Post Title')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Excerpt') !!}
                    {!! Form::textarea('excerpt', null,
                        array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Post Excerpt')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Article Body') !!}
                    {!! Form::textarea('body', null,
                        array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Article Body')) !!}
                </div>
        </div>
        <div class="col-lg-4">
            <h2>Publishing Options</h2>
            <div class="form-group">
                {!! Form::label('Post Slug') !!}
                {!! Form::text('slug', null,
                    array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Post_slug')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Image URL') !!}
                {!! Form::text('img_url', null,
                    array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Post_slug')) !!}
            </div>
            <div class="form-group">
              <label for="catSelect">Category ID</label>
              <select class="form-control" id="catSelect">
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->id }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
                {!! Form::submit('Submit',
                    array('class'=>'btn btn-primary')) !!}
            </div>
        </div>
    </div>
{!! Form::close() !!}

@stop