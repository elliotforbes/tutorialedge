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
		
		<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
		<script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="{{ asset('/css/prism.css', Request::secure()) }}">
		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css', Request::secure()) }}">
		<link rel="stylesheet" href="{{ asset('/css/site-style.css?v=543', Request::secure()) }}">
		
		<link rel="icon" type="image/png" href="{{ asset('/images/favicon.ico', Request::secure()) }}">
		<script src="{{ asset('/js/prism.js', Request::secure()) }}"></script>
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
		
            <!-- Uses a transparent header that draws on top of the layout's background -->
    <style>
    .demo-layout-transparent {
    background: url('../assets/demos/transparent.jpg') center / cover;
    }
    .demo-layout-transparent .mdl-layout__header,
    .demo-layout-transparent .mdl-layout__drawer-button {
    /* This background is dark, so we set text to white. Use 87% black instead if
        your background is light. */
    color: white;
    }
    </style>

        <div class="demo-layout-transparent mdl-layout mdl-js-layout">
            <header class="mdl-layout__header mdl-layout__header--transparent">
                <div class="mdl-layout__header-row">
                <!-- Title -->
                <a class="mdl-navigation__link" href="{{ url('/') }}"><span class="mdl-layout-title">TutorialEdge.net</span></a>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation -->
                <nav class="mdl-navigation">
                     @if (Auth::guest())
                    <a class="mdl-navigation__link" href="{{ url('/courses') }}">Courses</a>
                    <a class="mdl-navigation__link" href="{{ url('/auth/register') }}">Register Now</a>
                    <a class="mdl-navigation__link" href="{{ url('/auth/login') }}">Login</a>
                    @else
                    <a class="mdl-navigation__link" href="{{ url('/auth/logout') }}">Logout</a>
                    @endif
                </nav>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Nav Links</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="{{ url('/') }}">Home</a>
                    <a class="mdl-navigation__link" href="{{ url('/category/laravel-5') }}">Laravel 5</a>
                    <a class="mdl-navigation__link" href="{{ url('/category/java') }}">Java</a>
                    <a class="mdl-navigation__link" href="{{ url('/category/angularjs') }}">AngularJS</a>
                    <a class="mdl-navigation__link" href="{{ url('/category/angular2') }}">Angular 2</a>
                    <a class="mdl-navigation__link" href="{{ url('/category/programming_design_patterns') }}">Programming Design Patterns</a>
                    <a class="mdl-navigation__link" href="{{ url('/category/python') }}">Python</a>
                    <a class="mdl-navigation__link" href="{{ url('/category/lwjgl3') }}">LWJGL 3 Programming</a>
                    <a class="mdl-navigation__link" href="{{ url('/category/artificial-intelligence') }}">Artificial Intelligence</a>
					
                </nav>
            </div>
            <main class="mdl-layout__content">
            </main>
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


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="{{ asset('/js/bootstrap.min.js', Request::secure()) }}"></script>
		<script src="{{ asset('/js/typed.js', Request::secure()) }}"></script>
		<script src="{{ asset('/js/scripts.js', Request::secure()) }}"></script>
	</body>
</html>
