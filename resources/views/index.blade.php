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

<div class="top-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>Register Now for More High Quality Tutorials!</h1>
            </div>
            <div class="col-lg-6">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<div class="col-md-8 col-md-offset-2">
								<input type="text" class="form-control" placeholder="Name"  name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8 col-md-offset-2">
								<input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8 col-md-offset-2">
								<input type="password" class="form-control" placeholder="Password" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8 col-md-offset-2">
								<input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-4 col-md-offset-4">
								<button type="submit" class="btn btn-primary btn-register">
									Register
								</button>
							</div>
						</div>
					</form>
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

<div class="gray-content">
    <div class="container">
        <h2>Latest Articles</h2>
        <div class="row">
           @foreach($articles as $article)
            <div class="article-box">
                <div class="col-sm-6 col-xs-12 col-lg-3 col-md-4">
                    <img class="img-responsive image-responsive-centered" alt="{{ $article->excerpt }}" title="{{ $article->excerpt }}" src="/uploads/articles/{{ $article->image_url }}">
                    <div class="article-info">
                        <h3><a href="/{{ $article->slug }}">{{ $article->title }}</a></h3>
                        <p>{{ $article->excerpt }} </p>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>

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

<div class="featured-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="red-circle-bg">
                    39
                </div>
                <h2>Tutorials</h2>
            </div>
            <div class="col-lg-4">
                <div class="red-circle-bg">
                    17
                </div>
                <h2>Video Tutorials</h2>
            </div>
            <div class="col-lg-4">
                <div class="red-circle-bg">
                    132
                </div>
                <h2>YouTube Subscribers</h2>
            </div>
        </div>
    </div>
</div>
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Develop New Skills</h2>
                <p>Enhance your existing programming skills and pad out your github account with interesting projects that will ultimately help you get the job of your dreams.</p>
            </div>
            <div class="col-lg-6">
                <div class="circle-bg orange">
                    <i class="fa fa-briefcase fa-4x"></i>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
