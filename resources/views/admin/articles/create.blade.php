@extends('admin.admin')


@section('content')


<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
                Create Post <small></small>
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Articles</li>
                <li><a class="link-effect" href="/admin">Create</a></li>
            </ol>
        </div>
    </div>
</div>

<!-- Mega Form -->
                   <div class="container">
                    <h2 class="content-heading">Mega Form</h2>
                    <div class="block block-bordered">
                        <div class="block-header bg-gray-lighter">
                            <ul class="block-options">
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                </li>
                                <li>
                                    <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                </li>
                            </ul>
                            <h3 class="block-title"></h3>
                        </div>
                        <div class="block-content">
                            {!! Form::open(array('route' => 'admin.articles.store', 'class' => 'form-horizontal push-10-t push-10', 'files'=>true, 'novalidate' => 'novalidate')) !!}
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                                <label for="mega-firstname">Post Title</label>
                                                {!! Form::text('title', null,
                                                    array('required', 
                                                        'class'=>'form-control',
                                                        'placeholder'=>'Post Title')) !!}
                                            </div>
                                            <div class="col-xs-6">
                                                <label for="mega-lastname">Excerpt</label>
                                                {!! Form::text('excerpt', null,
                                                    array('required',
                                                        'class'=>'form-control',
                                                        'placeholder'=>'Post Excerpt')) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <label for="mega-lastname">Image URL</label>
                                                {!! Form::text('image_url', null,
                                                    array('required',
                                                        'class'=>'form-control',
                                                        'placeholder'=>'Post_slug')) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <label for="mega-bio">Post Body</label>
                                                {!! Form::textarea('body', null,
                                                    array('required',
                                                        'class'=>'form-control input-lg',
                                                        'placeholder'=>'Article Body')) !!}
<!--                                                <textarea class="form-control input-lg" id="mega-bio" name="mega-bio" rows="22" placeholder="Enter a few details about yourself.."></textarea>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <label for="mega-city">Post Slug</label>
                                                {!! Form::text('slug', null,
                                                    array('required',
                                                        'class'=>'form-control',
                                                        'placeholder'=>'Post_slug')) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <label for="mega-skills">Skills</label>
                                                <select class="form-control" id="mega-skills" name="mega-skills" size="7" multiple>
                                                    <option value="1">HTML</option>
                                                    <option value="2">CSS</option>
                                                    <option value="3">JavaScript</option>
                                                    <option value="4">PHP</option>
                                                    <option value="5">Ruby</option>
                                                    <option value="6">Photoshop</option>
                                                    <option value="7">Illustrator</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                                <label for="mega-age">Category ID</label>
                                                {!! Form::text('cat_id', null,
                                                    array('required',
                                                        'class'=>'form-control',
                                                        'placeholder'=>'cat_id')) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        {!! Form::submit('Submit',
                                            array('class'=>'btn btn-primary')) !!}
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    </div>
                    <!-- END Mega Form -->


{!! Form::open(array('route' => 'admin.articles.store', 'class' => 'form', 'files'=>true, 'novalidate' => 'novalidate')) !!}
    

                    {!! Form::text('title', null,
                        array('required', 
                            'class'=>'form-control',
                            'placeholder'=>'Post Title')) !!}
                    {!! Form::text('excerpt', null,
                        array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Post Excerpt')) !!}
                    {!! Form::textarea('body', null,
                        array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Article Body')) !!}
                {!! Form::label('Post Slug') !!}
                {!! Form::text('slug', null,
                    array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Post_slug')) !!}
                {!! Form::label('Category ID') !!}
                {!! Form::text('cat_id', null,
                    array('required',
                        'class'=>'form-control',
                        'placeholder'=>'cat_id')) !!}
                {!! Form::label('Image URL') !!}
                {!! Form::text('image_url', null,
                    array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Post_slug')) !!}
                {!! Form::label('Post Image') !!}
                {!! Form::file('image', null) !!}
                {!! Form::submit('Submit',
                    array('class'=>'btn btn-primary')) !!}
                            



@stop


@section('footerlinks')

<!-- Page JS Plugins -->
<script src="{{ asset('/js/plugins/ckeditor/ckeditor.js') }}"></script>

@endsection