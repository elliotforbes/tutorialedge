@extends('newapp')

@section('home')
   <div class="featured">
        <div class="container">
            <h1>Start Learning Today</h1>
            <h4>Sign up for your free account today and track your learning progress!</h4>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="col-md-3">
                        <img src="{{ asset('/img/logos/angular.png') }}" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('/img/logos/nodejs.png') }}" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('/img/logos/js.png') }}" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('/img/logos/laravel.jpg') }}" alt="">
                    </div>
                    
                     <div class="col-md-3">
                        <img src="{{ asset('/img/logos/mongo.png') }}" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('/img/logos/html5.png') }}" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('/img/logos/css3.png') }}" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('/img/logos/github.png') }}" alt="">
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary">Register Now</button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
	
@endsection


@section('categories')
<div class="courses container">
    <div class="row">
        <h2>Courses</h2>
        @foreach ($categories as $category)
        <div class="col-md-4">     
            <div class="card">
                <a href="{{ url('/') }}/category/{{ $category->slug }}">
                    <img class="card-img-top" src="{{ url('/') }}/uploads/articles/{{ $category->image_url }}" alt="Card image cap">
                </a>
                <div class="card-block">
                    <h4 class="card-title">{{ $category->title }}</h4>
                    <p class="card-text">{{ $category->info }}</p>
                </div>
            </div>
        </div>
        @endforeach
       
        
    </div>
</div>
@endsection