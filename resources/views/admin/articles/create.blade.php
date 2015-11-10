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
<div class="main-container">
   <div class="content content-narrow">
    <div class="block">
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
                    <div class="col-sm-8">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="mega-firstname">Post Title</label>
                                {!! Form::text('title', null,
                                    array('required', 
                                        'class'=>'form-control',
                                        'placeholder'=>'Post Title')) !!}
                            </div>
                            <br/>
                            <div class="col-xs-12">
                                <label for="mega-lastname">Excerpt</label>
                                {!! Form::text('excerpt', null,
                                    array('required',
                                        'class'=>'form-control',
                                        'placeholder'=>'Post Excerpt')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="mega-lastname">Image URL</label>
                                {!! Form::text('image_url', null,
                                    array('required',
                                        'class'=>'form-control',
                                        'placeholder'=>'Post_slug')) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="mega-age">Category ID</label>
                                {!! Form::text('cat_id', null,
                                    array('required',
                                        'class'=>'form-control',
                                        'placeholder'=>'cat_id')) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="mega-bio">Post Body</label>
                                {!! Form::textarea('body', null,
                                    array('required',
                                        'class'=>'form-control input-lg',
                                        'placeholder'=>'Article Body',
                                        'name'=>'ckeditor',
                                        'id'=>'js-ckeditor'
                                        )) !!}
                             </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                            <div class="col-lg-12">
                                {!! Form::submit('Submit',
                                    array('class'=>'btn btn-primary btn-lg')) !!}
                            </div>
                        </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
</div>
</div>
<!-- END Mega Form -->


@stop


@section('footerlinks')

<!-- Page JS Plugins -->
<script src="{{ asset('/js/plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    $(function () {
        // Init page helpers (Summernote + CKEditor plugins)
        App.initHelpers(['ckeditor']);
    });
</script>
@endsection