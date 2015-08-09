@extends('admin.admin')

@section('content')

     
     <h2>All Users</h2>  
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
