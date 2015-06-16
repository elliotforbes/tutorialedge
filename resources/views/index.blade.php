@extends('app')

@section('title')
In-depth game programming courses
@endsection

@section('meta')
<meta name="description" content="A Tutorial site focused on bringing you high quality programming courses that will advance your knowledge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="author" href="https://plus.google.com/b/115194233692529836662">
@endsection


@section('featured-top')

<div class="parent">
   <div class="container">
       <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6 col-sx-6">
               <div class="child">
                   <h1>In-Depth Programming Tutorials for All Skill Levels</h1>
               </div>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-12 col-sx-12">
               <div class="child">
                   <div class="featured-image">
                       <img src="{{ asset('/images/featured-img.png') }}" alt="TutorialEdge.net | Programming Tutorials">
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>


@endsection

@section('content')
     <div class="latest-posts">
       <h2>Popular Courses</h2>
        <div class="row"> 
           
           @foreach ($courses as $course)
            <div class="col-md-3 col-sm-6 col-sx-12">
               <div class="course-box">
                    <img class="img-responsive image-responsive-centered" alt="{{ $course->slug }}" title="{{ $course->slug }}" src="/uploads/articles/{{ $course->image_url }}" />
                    <h3><a href="/course/{{ $course->slug }}">{{ $course->title }}</a></h3>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
@endsection

@section('home-content')
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="circle-bg">
                    <i class="fa fa-cog fa-4x"></i>
                </div>
            </div>
            <div class="col-lg-6">
                <h2>Sharpen Your Mind</h2>
                <p>Expand your programming knowledge by diving deeper into concepts such as Artificial Intelligence and Graphics Programming. Whether you are just starting out or are a tech industry pro, we are here to provide you with the knowledge you need to excel.</p>
            </div>
        </div>
    </div>
</div>

<div class="grey-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Learn by Example</h2>
                <p>Take advantage of our programming tutorial courses and learn by doing. Create bigger and more complex software systems and learn the ins and outs of managing larger code bases.</p>
            </div>
            <div class="col-lg-6">
                <div class="code-image">
                    <img src="{{ asset('/images/featured-img.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
