@extends('admin.admin')


@section('content')

{!! Form::model($course, ['url' => 'admin/courses/' . $course->slug, 'method' => 'PATCH', 'files'=>true, 'novalidate' => 'novalidate']) !!}
    <div class="row">
        <div class="col-lg-8">
            <h2>Update: {{ $course->title }}</h2>
             <div class="form-group">
                    {!! Form::label('Post Title') !!}
                    {!! Form::text('title', null,
                        array('required', 
                            'class'=>'form-control',
                            'placeholder'=>'Post Title')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Subheading') !!}
                    {!! Form::text('tagline', null,
                        array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Article Body')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Blurb') !!}
                    {!! Form::text('info', null,
                        array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Article Body')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Description') !!}
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
                        'placeholder'=>'slug')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Category ID') !!}
                {!! Form::text('cat_id', null,
                    array('required',
                        'class'=>'form-control',
                        'placeholder'=>'cat_id')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Image URL') !!}
                {!! Form::text('image_url', null,
                    array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Post_slug')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Post Image') !!}
                {!! Form::file('image', null) !!}
            </div>

           
            <div class="form-group">
                {!! Form::submit('Update Course', ['class'=>'btn btn-success']) !!}
            </div>
        </div>
    </div>

{!! Form::close() !!}

@stop