@extends('admin.admin')

@section('content')
<<<<<<< HEAD
     <div class="info-box">
         <h2>All Courses</h2>  
=======
     
     <h2>All Courses</h2>  
     <div class="info-box">
>>>>>>> 1002035d971d88631b0093864e34fb2b5fceeab4
         <a href="/admin/pages/create"><button class="btn btn-default">New Course</button></a>
         
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
             @foreach ($pages as $page)
                 <tr>
                     <td>{{ $page->id }}</td>
                     <td>{{ $page->title }}</td>
                     <td>{{ $page->slug }}</td>
                     <td>{{ $page->cat_id }}</td>
                     <td><a href="/{{ $page->slug }}"><button class="btn btn-default">View</button></a></td>
                     <td><a href="/admin/{{ $page->slug }}/edit"><button class="btn btn-default">Edit</button></a></td>
                     <td>{!! Form::open(['method' => 'DELETE', 'url' => 'admin/{{ $page->slug }}/edit' . $page->slug, 'onsubmit' => 'return ConfirmDelete()']) !!}
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
