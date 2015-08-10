@extends('admin.admin')

@section('content')

     
     <h2>All Videos</h2>  
     <div class="info-box">    
         <table class="table table-striped">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>title</th>
                     <th>views</th>                     
                     <th>slug</th>                     
                     <th>course ID</th>                     
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
                 </tr>
             @endforeach
             </tbody>
         </table>
     </div>
@endsection
