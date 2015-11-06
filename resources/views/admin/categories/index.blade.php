@extends('admin.admin')

@section('content')
  <!-- Page Header -->
<div class="content bg-image overflow-hidden" style="background-image: url('../img/photos/photo3@2x.jpg');">
    <div class="push-50-t push-15">
        <h1 class="h2 text-white animated zoomIn">All Categories</h1>
    </div>
</div>
     
<div class="content content-narrow">
     <div class="block">
         <div class="block-header">
             
         </div>
         <div class="block-content">
             <a href="/admin/categories/create"><button class="btn btn-default">New Category</button></a>
         
         <table class="table table-striped">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>Title</th>
                     <th>slug</th>
                     <th>cat_id</th>
                     <th>view</th>
                     <th>edit</th>
                     <th>delete</th>
                 </tr>
             </thead>
             <tbody>
             @foreach ($categories as $category)
                 <tr>
                     <td>{{ $category->id }}</td>
                     <td>{{ $category->title }}</td>
                     <td>{{ $category->slug }}</td>
                     <td>{{ $category->cat_id }}</td>
                     <td><a href="/categories/{{ $category->slug }}"><button class="btn btn-default">View</button></a></td>
                     <td><a href="/admin/categories/{{ $category->slug }}/edit"><button class="btn btn-default">Edit</button></a></td>
                     <td>{!! Form::open(['method' => 'DELETE', 'url' => 'admin/categories/' . $category->slug .'/edit' , 'onsubmit' => 'return ConfirmDelete()']) !!}
                                <div class="form-group">
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger', ]) !!}
                                </div>
                         {!! Form::close() !!}
                     </td>
                 </tr>
             @endforeach
             </tbody>
         </table>
         </div>
     </div>
</div>
@endsection
