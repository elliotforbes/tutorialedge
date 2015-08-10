@extends('app')

@section('content')
    <div class="post-cont">
        <div class="row">
            <div class="col-md-12">
               <div class="col-md-4 post-image">
                   <img src="{{ asset('images/profile-placeholder.gif') }}" alt="">
               </div>
                <div class="col-md-4 post-title">
                   <h2>{{ $user->name }}</h2>
                   <p>Joined: {{ $user->created_at }}</p>
                </div>
                
                <div class="col-md-4 post-content">
                    <p>About Me:</p>
                </div>
                
            </div>
        </div>
        
        <div class="padding-top"></div>
        <div class="padding-top"></div>
        
    </div>
@endsection
