@extends('admin.admin')

@section('content')
     <div class="latest-posts">
         <h2>Admin Stuff</h2>  
         
         <table class="table table-striped">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>Title</th>
                     <th>slug</th>
                     <th>cat_id</th>
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
                     <td><button class="btn btn-default">Edit</button></td>
                     <td><button class="btn btn-error">delete</button></td>
                 </tr>
             @endforeach
             </tbody>
         </table>
     </div>
@endsection
