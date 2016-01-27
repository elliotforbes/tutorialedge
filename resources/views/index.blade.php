@extends('app')

@section('title')
In-depth Game Programming Tutorials and Courses
@endsection

@section('meta')
<meta name="description" content="A Game Development Tutorial site focused on bringing you high quality programming courses that will advance your knowledge. We cover other subjects such as artificial intelligence, web development and more...">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="author" href="https://plus.google.com/b/115194233692529836662">
@endsection


@section('featured-top')
<div class="stripe"></div>
		
<div class="featured-bar">
    <h2>Learn: <b><span class="featured-text"></span></b></h2>
    <h4>Our Goal is to help new developers land their dream jobs<br/> by teaching you some of the latest and greatest programming frameworks.</h4>
</div>
@endsection


@section('content')
<div class="course-content content">
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title" style="background-image: url('{{url('/uploads/articles') }}/{{ $category->image_url }}')">
                        <h2 class="mdl-card__title-text">{{ $category->title }}</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        {{ $category->info }}
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ url('/category') }}/{{ $category->slug }}">
                        Get Started
                        </a>
                    </div>
                    <!--<div class="mdl-card__menu">
                        <button id="share1" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                        <i class="material-icons">share</i>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="share1">
                            <li class="mdl-menu__item">Facebook</li>
                            <li class="mdl-menu__item">Twitter</li>
                            <li disabled class="mdl-menu__item">Google+ </li>
                            <li class="mdl-menu__item">Mail</li>
                        </ul>
                    </div>-->
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection


@section('latest-articles')
<div class="latest-articles">
    <div class="container">
        <div class="row">
            <h2>Latest Articles</h2>
            @foreach($articles as $article)
            <div class="col-md-4">
                <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">{{ $article->title }}</h2>
                    </div>
                    <div class="mdl-card__supporting-text excerpt">
                        {{ $article->excerpt }}
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ url('/') }}/{{ $article->slug }}">
                        Get Started
                        </a>
                    </div>
                    <!--<div class="mdl-card__menu">
                        <button id="share1" class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                        <i class="material-icons">share</i>
                        </button>
                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="share1">
                            <li class="mdl-menu__item">Facebook</li>
                            <li class="mdl-menu__item">Twitter</li>
                            <li disabled class="mdl-menu__item">Google+ </li>
                            <li class="mdl-menu__item">Mail</li>
                        </ul>
                    </div>-->
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('home-content')

<div class="courses">
    <div class="container">
        <h2>Latest Articles</h2>
        <div class="row">
           @foreach($articles as $article)
           
            <div class="article-box">
                <div class="col-sm-6 col-xs-12 col-lg-3 col-md-4">
                    <img class="img-responsive image-responsive-centered article-image" alt="{{ $article->excerpt }}" title="{{ $article->excerpt }}" src="/uploads/articles/{{ $article->image_url }}">
                    <div class="article-info">
                        <h3><a href="{{ url('/') }}/{{ $article->slug }}">{{ $article->title }}</a></h3>
<!--                        <p></p>-->
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
                    {{ $artCount }}
                </div>
                <h2>Tutorials</h2>
            </div>
            <div class="col-lg-4">
                <div class="red-circle-bg">
                    {{ $userCount }}
                </div>
                <h2>Total Users</h2>
            </div>
            <div class="col-lg-4">
                <div class="red-circle-bg">
                    228
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
