@extends('admin.admin')

@section('content')

     
     <h2>All Categories</h2>  
     <div class="info-box">
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
                     <td><a href="/course/{{ $category->slug }}"><button class="btn btn-default">View</button></a></td>
                     <td><a href="/admin/pages/{{ $category->slug }}/edit"><button class="btn btn-default">Edit</button></a></td>
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
@endsection
