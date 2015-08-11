@extends('admin.admin')

@section('content')

     
     <h2>All Videos</h2>  
     <div class="info-box"> 
        
        <a href="/admin/videos/create"><button class="btn btn-default btn-new">New Video</button></a>
            
         <table class="table table-striped">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>title</th>
                     <th>views</th>                     
                     <th>slug</th>                     
                     <th>course ID</th>   
                     <th>view</th>
                     <th>edit</th>
                     <th>delete</th>                  
                 </tr>
             </thead>
             <tbody>
             @foreach ($videos as $video)
                 <tr>
                     <td>{{ $video->id }}</td>
                     <td>{{ $video->title }}</td>
                     <td>{{ $video->views }}</td>
                     <td>{{ $video->slug }}</td>
                     <td>{{ $video->course_id }}</td>
                     <td><a href="/{{ $video->slug }}"><button class="btn btn-default">View</button></a></td>
                     <td><a href="/admin/videos/{{ $video->slug }}/edit"><button class="btn btn-default">Edit</button></a></td>
                     <td>{!! Form::open(['method' => 'DELETE', 'url' => 'admin/videos/' . $video->slug .'/destroy' , 'onsubmit' => 'return ConfirmDelete()']) !!}
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
     
     
     <!--Adds confirmation popup to delete buttons so that accidental deletion doesn't take place-->
<script>
    function ConfirmDelete()
    {
        var x = confirm("Are you sure you want to delete?");
        if (x)
            return true;
        else
            return false;
    }
</script>
@endsection
