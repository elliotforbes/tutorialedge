@extends('admin.admin')

@section('content')

     
     <h2>All Videos</h2>  
     <div class="info-box">    
         <table class="table table-striped">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>Name</th>
                     <th>Email</th>                     
                 </tr>
             </thead>
             <tbody>
             @foreach ($videos as $video)
                 <tr>
                     <td>{{ $video->id }}</td>
                     <td>{{ $video->name }}</td>
                     <td>{{ $video->views }}</td>
                 </tr>
             @endforeach
             </tbody>
         </table>
     </div>
@endsection
