@extends('admin.admin')

@section('content')
<<<<<<< HEAD
     <div class="info-box">
         <h2>Admin Stuff</h2>  
         
=======
     
     <h2>All Users</h2>  
     <div class="info-box">    
>>>>>>> 1002035d971d88631b0093864e34fb2b5fceeab4
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
