<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>@yield('title') | TutorialEdge.net</title>
		@yield('meta')
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="author" href="https://plus.google.com/b/115194233692529836662">
		<meta property="og:site_name" content="TutorialEdge.net" />
		
		<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
		<script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="{{ asset('/css/prism.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/site-style.css') }}">
		
		<link rel="icon" type="image/png" href="{{ asset('/images/favicon.ico') }}">
		<script src="{{ asset('/js/prism.js') }}"></script>
	</head>
	<body>
		
		<div class="header">
			
			<div class="collapse" id="exCollapsingNavbar">
				<div class="bg-inverse p-a">
					<h4>Collapsed content</h4>
					<span class="text-muted">Toggleable via the navbar brand.</span>
				</div>
			</div>
			<nav class="navbar navbar-light navbar-inverse bg-faded">
				<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
					&#9776;
				</button>
				<div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar">
					<a class="navbar-brand" href="{{ url('/') }}">TutorialEdge</a>
					<ul class="nav navbar-nav pull-right">
						<li class="nav-item active">
							<a class="nav-link" href="single.html">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Features</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About</a>
						</li>
						@if (Auth::guest())
						<li class="nav-item">
							<!-- Number badge on icon -->
							<a class="nav-link" id="demo-menu-lower-right" href="#"><span class="material-icons mdl-badge" data-badge="1">account_box</span></a>
						</li>
						<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
							for="demo-menu-lower-right">
							<li class="mdl-menu__item"><a class="nav-link" href="{{ url('/auth/logout') }}">Logout</a></li>
						</ul>
						@else
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/auth/login') }}">Login</a>
						</li>
						@endif
					</ul>
				</div>
			</nav>		
		</div>
		
		@yield('featured-top')
		
		@yield('content')
		
		@yield('latest-articles')
				
		<footer class="mdl-mega-footer">
			<div class="container">
				<div class="mdl-mega-footer__middle-section">
				
				<div class="mdl-mega-footer__drop-down-section">
					<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
					<h1 class="mdl-mega-footer__heading">Features</h1>
					<ul class="mdl-mega-footer__link-list">
					<li><a href="#">About</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">Partners</a></li>
					<li><a href="#">Updates</a></li>
					</ul>
				</div>
					
				<div class="mdl-mega-footer__drop-down-section">
					<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
					<h1 class="mdl-mega-footer__heading">Details</h1>
					<ul class="mdl-mega-footer__link-list">
					<li><a href="#">Specs</a></li>
					<li><a href="#">Tools</a></li>
					<li><a href="#">Resources</a></li>
					</ul>
				</div>
					
				<div class="mdl-mega-footer__drop-down-section">
					<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
					<h1 class="mdl-mega-footer__heading">Technology</h1>
					<ul class="mdl-mega-footer__link-list">
					<li><a href="#">How it works</a></li>
					<li><a href="#">Patterns</a></li>
					<li><a href="#">Usage</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">Contracts</a></li>
					</ul>
				</div>
					
				<div class="mdl-mega-footer__drop-down-section">
					<input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
					<h1 class="mdl-mega-footer__heading">FAQ</h1>
					<ul class="mdl-mega-footer__link-list">
					<li><a href="#">Questions</a></li>
					<li><a href="#">Answers</a></li>
					<li><a href="#">Contact us</a></li>
					</ul>
					</div>
				
				</div>
					
				<div class="mdl-mega-footer__bottom-section">
					<div class="mdl-logo">TutorialEdge</div>
					<ul class="mdl-mega-footer__link-list">
					<li><a href="#">Help</a></li>
					<li><a href="#">Privacy & Terms</a></li>
					</ul>
				</div>
			</div>
		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('/js/typed.js') }}"></script>
		<script src="{{ asset('/js/scripts.js') }}"></script>
	</body>
</html>