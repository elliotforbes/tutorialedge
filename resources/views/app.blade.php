<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') | TutorialEdge.net</title>
    @yield('meta')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="author" href="https://plus.google.com/b/115194233692529836662">
    <meta property="og:site_name" content="Tutorial-Edge.com"/>
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <!-- Latest compiled and minified JavaScript -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/prism.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/front-end.css?v=2') }}">
</head>

<body>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->                    
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-556ed8694fee5529" async="async"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-556ed8694fee5529" async="async"></script>

    <div class="header-container m-top-30 clearfix">

        <div class="header-logo-container ">
            <div class="logo-container">
                <a href="/" class="logo">TutorialEdge.net</a>
            </div>
        </div>

        <div class="header-menu-container right">
            <!-- TOP MENU -->
            <nav id="main-nav">
                <ul class="sf-menu clearfix">
                    <li class="current"><a href="/">Home</a>
                    </li>
<!--
                    <li><a href="#">Programming Tutorials</a>
                        <ul>
                            <li><a href="/course/LWJGL3">LWJGL 3</a>
                            </li>
                            <li><a href="/">LibGDX</a>
                            </li>
                        </ul>
                    </li>
-->
                    <li><a href="#">Courses</a>
                        <ul>
                            <li><a href="/course/programming_design_patterns">Programming Design Concepts</a>
                            </li>
                            <li><a href="/course/python">Python Tutorials</a>
                            <li><a href="/course/lwjgl3">LWJGL 3 Tutorials</a></li>
<!--
                                <ul>
                                    <li><a href="/">Networking Tutorials</a>
                                    </li>
                                </ul>
-->
                            </li>
                        </ul>
                    </li>
                                
                </ul>
            </nav>

        </div>

    </div>

    @yield('featured-top')

    <div class="content">
        <div class="container">

            @yield('content')

        </div>
    </div>

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
                    <h3>Community</h3>
                    <ul>
                        <li><a href="#">link</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="/contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Follow Us!</h3> 
                    <p>If you have found any of the content on this website useful then help the site out by following us on your preferred social media channel!</p>
                    <ul class="footer-connect">
                        <li><a href="http://facebook.com/"><i class="fa fa-facebook-square fa-3x"></i></a>
                        </li>
                        <li><a href="http://twitter.com/Tutorialedge"><i class="fa fa-twitter-square fa-3x"></i></a>
                        </li>
                        <li><a href="https://github.com/emforce"><i class="fa fa-github-square fa-3x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="col-md-6">
                <p>Copyright 2015 @copy; Tutorial-Edge.com</p>
            </div>
            <div class="col-md-6">
                <p class="pull-right">Designed and Owned by <a href="http://elliotforbes.co.uk/">Elliot Forbes.</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    
    <!-- Finally, to actually run the highlighter, you need to include this JS on your page -->
    <script src="{{ asset('/js/horizontalMenu.js') }}"></script>
    <script src="{{ asset('/js/prism.js') }}"></script>
    <script>
        $(function () {
            cbpHorizontalMenu.init();
        });
    </script>

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
</body>

</html>
