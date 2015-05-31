@extends('admin.admin')

@section('content')
     <div class="latest-posts">
         <h2>Admin Stuff</h2>  
         
         <table class="table table-striped">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>Name</th>
                     <th>Email</th>                     
                 </tr>
             </thead>
             <tbody>
             @foreach ($users as $user)
                 <tr>
                     <td>{{ $user->id }}</td>
                     <td>{{ $user->name }}</td>
                     <td>{{ $user->email }}</td>
                 </tr>
             @endforeach
             </tbody>
         </table>
     </div>
@endsection
