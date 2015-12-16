<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') | TutorialEdge.net</title>
    @yield('meta')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="author" href="https://plus.google.com/b/115194233692529836662">
    <meta property="og:site_name" content="TutorialEdge.net" />
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/newstyle.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon.png') }}">
    
</head>
<body>
    <div class="collapse" id="exCollapsingNavbar">
        <div class="bg-inverse p-a">
            <h4>Collapsed content</h4>
            <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
    </div>
    
    <nav class="navbar navbar-white navbar-light bg-faded">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
        &#9776;
        </button>
        <div class="container collapse navbar-toggleable-xs">
            <a class="navbar-brand logo" href="#">
                <img src="{{ asset('/img/logo.png') }}" alt="TutorialEdge.net | High Quality Programming Tutorials">
            </a>
            
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
            </ul>
            
            <ul class="nav navbar-nav pull-right">
                <li class="nav-item register">
                    <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Log In</a>
                </li>
            </ul>
        </div>
    </nav>
      
      @yield('home')
    
    
      @yield('categories')
    
      <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>About Us</h3>
                    <p>Tutorial-Edge.com was founded in January of 2015 with the main goal of helping people who want to learn how to code.
                        <br>
                        <br>The site initially started out as a hobby for me and more importantly an incentive for me to constantly keep pushing myself and learning new things.</p>
                </div>
                <div class="col-md-3">
                    <h3>Featured Courses</h3>
                    <ul>
                        <li><a href="/category/python">Python</a>
                        </li>
                        <li><a href="/category/laravel-5">Laravel 5</a>
                        </li>
                        <li><a href="/category/game-development">Game Development</a>
                        </li>
                        <li><a href="/category/lwjgl3">LWJGL 3</a>
                        </li>
                        <li><a href="/category/artificial-intelligence">Artificial Intelligence</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="/contact">Contact Us</a>
                        </li>
                        <li><a href="/about">About Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Follow Us!</h3> 
                    <p>If you have found any of the content on this website useful then help the site out by following us on your preferred social media channel!</p>
                    <ul class="footer-connect">
                        <li><a href="https://www.facebook.com/tutorialedge"><i class="fa facebook-icon fa-facebook-square fa-3x"></i></a>
                        </li>
                        <li><a href="http://twitter.com/Tutorialedge"><i class="fa twitter-icon fa-twitter-square fa-3x"></i></a>
                        </li>
                        <li><a href="https://github.com/emforce"><i class="fa fa-github-square github-icon fa-3x"></i></a>
                        </li>
                        <li><a href="https://youtube.com/tutorialedge"><i class="fa fa-youtube-square fa-3x youtube-icon"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Copyright 2015 &copy; TutorialEdge.net</p>
                </div>
                <div class="col-md-6">
                    <p class="pull-right">Designed and Owned by <a href="http://elliotforbes.co.uk/">Elliot Forbes.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('/dist/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/dist/js/height.js') }}" type="text/javascript"></script>
    <script>
        $(function() {
            $('.card').matchHeight();
        });
    </script>
</body>
</html>