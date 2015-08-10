@extends('app')

@section('content')
    <div class="post-cont">
        <div class="row">
            <div class="col-md-12">
               <div class="post-image">
                   <img src="{{ asset('images/profile-placeholder.gif') }}" alt="">
               </div>
                <div class="post-title">
                   <h2>{{ $user->name }}</h2>
                </div>
                
                <div class="post-content">
                    <p>Under Construction</p>
                </div>
                
            </div>
        </div>
        
        <div class="padding-top"></div>
        <div class="padding-top"></div>
        
    </div>
@endsection
