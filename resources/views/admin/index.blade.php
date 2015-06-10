@extends('admin.admin')

@section('content')
     <div class="latest-posts">
         <h2>Admin Panel</h2>  
         <div class="row">
             <div class="col-lg-6">
                 <div class="admin-widget">
                     <h3>Latest Comments</h3>
                 </div>
                 <div class="admin-widget">
                     <h3>Quick Links</h3>
                 </div>
             </div>
             <div class="col-lg-6">
                 <div class="admin-widget">
                     <h3>Weekly Traffic Stats</h3>
                 </div>
                 
                 <div class="admin-widget">
                     <h3>Subscribers</h3>
                 </div>
             </div>
         </div>
     </div>
@endsection
