@extends('admin.admin')


@section('content')
<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
                Update Post <small> {{ $article->title }}</small>
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Articles</li>
                <li><a class="link-effect" href="/admin/articles/create">Create</a></li>
            </ol>
        </div>
    </div>
</div>


<div class="content content-narrow">
    <div class="block">
        <div class="block-content">
            {!! Form::model($article, ['url' => 'admin/articles/' . $article->slug, 'method' => 'PATCH', 'files'=>true, 'novalidate' => 'novalidate']) !!}
                <div class="row">
                    <div class="col-lg-8">
                        <div class="info-box">
                             <div class="form-group">
                                    {!! Form::label('Post Title') !!}
                                    {!! Form::text('title', null,
                                        array('required', 
                                            'class'=>'form-control',
                                            'placeholder'=>'Post Title')) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Excerpt') !!}
                                    {!! Form::text('excerpt', null,
                                        array('required',
                                            'class'=>'form-control',
                                            'placeholder'=>'Post Excerpt')) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('Article Body') !!}
                                    {!! Form::textarea('body', null,
                                        array('required',
                                            'class'=>'form-control',
                                            'rows'=>'25',
                                            'placeholder'=>'Article Body')) !!}
                                </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="info-box">
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
                                {!! Form::label('Post Status') !!}
                                {!! Form::text('post_status', null,
                                    array('required',
                                        'class'=>'form-control',
                                        'placeholder'=>'published || draft')) !!}
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
                                {!! Form::submit('Update Article', ['class'=>'btn btn-success']) !!}
                            </div>
                        </div>
                    </div>
                </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop