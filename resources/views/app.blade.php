<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>@yield('title') | TutorialEdge.net</title>
		@yield('meta')
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="google-site-verification" content="o0UedRQqZULbVZPe6SPx1VD1YxJd6WL-2-15-XHWS1g" />
		<link rel="author" href="https://plus.google.com/b/115194233692529836662">
		<meta property="og:site_name" content="TutorialEdge.net" />
            <link rel="stylesheet" href="{{ asset('/css/material.indigo-pink.min.css') }}">
 		<link rel="stylesheet" href="{{ asset('/fonts/flaticon/flaticon.css') }}">
 		<link rel="stylesheet" href="{{ asset('/css/material-icons.css') }}">
 		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/prismnew.css') }}">
 		<link rel="stylesheet" href="{{ asset('/css/site-style.css') }}">
		<link rel="icon" type="image/png" href="{{ asset('/images/favicon.ico') }}">
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-10255990-23', 'auto');
            ga('send', 'pageview');
        </script>
       
	</head>
	<body>
		
     <div class="header">
			
			<div class="collapse" id="exCollapsingNavbar">
				<div class="bg-inverse p-a">
					<h4>Main Menu</h4>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/') }}/courses">Courses</a></li>
                        <li><a href="{{ url('/search') }}">Search Tutorials</a></li>
                    </ul>
				</div>
			</div>
			<nav class="navbar navbar-light navbar-inverse bg-faded">
				<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
					&#9776;
				</button>
				<div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar">
					<a class="navbar-brand" href="{{ url('/') }}">TutorialEdge</a>
                   
					<ul class="nav navbar-nav pull-right">
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/courses') }}">Courses</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/about') }}">About</a>
						</li>
                        <li class="nav-item">
                            <a href="{{ url('/search') }}" class="nav-link">Search Tutorials</a>
                        </li>
                        @if (Auth::guest())
                        
                        <li class="nav-item">
                            <a href="{{ url('/auth/register') }}" class="nav-link">Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/auth/login') }}" class="nav-link">Log In</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{ url('/auth/logout') }}" class="nav-link">Logout</a>
                        </li>
                        @endif
					</ul>
				</div>
			</nav>		
		</div>
		
        <div class="clear"></div>
        
		@yield('featured-top')
		
		@yield('content')
        
        @yield('registernow')
		
		@yield('latest-articles')
			
        @yield('home-content')
		<footer class="mdl-mega-footer">
			<div class="container">
				<div class="mdl-mega-footer__middle-section">
				
				<div class="mdl-mega-footer__drop-down-section">
					<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
					<h1 class="mdl-mega-footer__heading">Features</h1>
					<ul class="mdl-mega-footer__link-list">
					<li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
					</ul>
				</div>
					
				<div class="mdl-mega-footer__drop-down-section">
					<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
					<h1 class="mdl-mega-footer__heading">Courses</h1>
					<ul class="mdl-mega-footer__link-list">
					<li><a href="{{ url('/category/programming_design_patterns') }}">Programming Design Patterns</a></li>
                    <li><a href="{{ url('/category/python') }}">Python</a></li>
                    <li><a href="{{ url('/category/lwjgl3') }}">LWJGL 3 Programming</a></li>
                    <li><a href="{{ url('/category/artificial-intelligence') }}">Artificial Intelligence</a></li>
					</ul>
				</div>
					
				<div class="mdl-mega-footer__drop-down-section">
					<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
					<h1 class="mdl-mega-footer__heading">More Courses</h1>
					<ul class="mdl-mega-footer__link-list">
					<li><a href="{{ url('/category/laravel-5') }}">Laravel 5</a></li>
                    <li><a href="{{ url('/category/java') }}">Java</a></li>
                    <li><a href="{{ url('/category/angularjs') }}">AngularJS</a></li>
                    <li><a href="{{ url('/category/angular2') }}">Angular 2</a></li>
					</ul>
				</div>
					
				<div class="mdl-mega-footer__drop-down-section">
					<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
					<h1 class="mdl-mega-footer__heading">Social Links</h1>
					<ul class="mdl-mega-footer__link-list">
					<li><a href="https://www.facebook.com/tutorialedge">Facebook</a></li>
					<li><a href="https://twitter.com/TutorialEdge">Twitter</a></li>
					<li><a href="https://www.youtube.com/c/tutorialedge">Youtube</a></li>
					</ul>
					</div>
				
				</div>
					
				<div class="mdl-mega-footer__bottom-section">
					<div class="mdl-logo">TutorialEdge</div>
				</div>
			</div>
		</footer>
        
        @yield('includes')
        <script src="{{ asset('/js/prism.js') }}"></script>
        <script src="{{ asset('/js/all.js') }}"></script>
	</body>
</html>
