@extends('admin.admin')

@section('content')

     
     <h2>All Courses</h2>  
     <div class="info-box">
         <a href="/admin/courses/create"><button class="btn btn-default">New Course</button></a>
         
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
             @foreach ($courses as $course)
                 <tr>
                     <td>{{ $course->id }}</td>
                     <td>{{ $course->title }}</td>
                     <td>{{ $course->slug }}</td>
                     <td>{{ $course->cat_id }}</td>
                     <td><a href="/course/{{ $course->slug }}"><button class="btn btn-default">View</button></a></td>
                     <td><a href="/admin/courses/{{ $course->slug }}/edit"><button class="btn btn-default">Edit</button></a></td>
                     <td>{!! Form::open(['method' => 'DELETE', 'url' => 'admin/courses/' . $course->slug .'/edit' , 'onsubmit' => 'return ConfirmDelete()']) !!}
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
