@extends('admin.admin')


@section('content')


<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-8">
            <h1 class="page-heading">
                Create New Category <small></small>
            </h1>
        </div>
        <div class="col-sm-4 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Categories</li>
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
            {!! Form::open(array('route' => 'admin.categories.store', 'class' => 'form-horizontal push-10-t push-10', 'files'=>true, 'novalidate' => 'novalidate')) !!}
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="mega-firstname">Category Title</label>
                            {!! Form::text('title', null,
                                array('required', 
                                    'class'=>'form-control',
                                    'placeholder'=>'Post Title')) !!}
                        
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <br/>
                            {!! Form::submit('Add New Category',
                                array('class'=>'btn btn-primary padding')) !!}
                        </div>
                    </div>
                </div>
                
            {!! Form::close() !!}
        </div>
    </div>
    
</div>
</div>
<div class="clear"></div>
</div>
<!-- END Mega Form -->


@stop


@section('footerlinks')

<!-- Page JS Plugins -->
<script src="{{ asset('/js/plugins/ckeditor/ckeditor.js') }}"></script>
<script>
</script>
@endsection