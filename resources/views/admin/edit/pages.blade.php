@extends('admin.admin')


@section('content')

{!! Form::model($page, ['url' => 'admin/edit/pages/' . $page->slug, 'method' => 'PATCH', 'files'=>true, 'novalidate' => 'novalidate']) !!}

<div class="row">
    
    
    
    
</div>


{!! Form::close() !!}


@endsection