@extends('app')

@section('content')
  
  <div class="gray-padding"></div>
  
   <div class="container ">
    <div class="post-cont">
        <div class="row">
            <div class="col-md-12">
               <div class="col-md-4 post-image">
                   <img src="{{ asset('images/profile-placeholder.gif') }}" alt="">
               </div>
                <div class="col-md-8 post-title">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Menu 1</a></li>
                        <li><a href="#">Menu 2</a></li>
                        <li><a href="#">Menu 3</a></li>
                    </ul>
                   <h2>{{ $user->name }}</h2>
                   <p>Joined: {{ $user->created_at }}</p>
                </div>
                
            </div>
        </div>
        
        <div class="padding-top"></div>
        <div class="padding-top"></div>
        
    </div>
    </div>
@endsection
