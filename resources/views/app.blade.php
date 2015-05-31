<!DOCTYPE html>
<html lang="en">

<head>
    <title>TutorialEdge.net | The Definitive Repo for Programming Resources &pound; Tutorials</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <!-- Latest compiled and minified JavaScript -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/front-end.css') }}">
</head>

<body>

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
                    <li><a href="#">Programming Tutorials</a>
                        <ul>
                            <li><a href="/course/LWJGL3">LWJGL 3</a>
                            </li>
<!--
                            <li><a href="/">LibGDX</a>
                            </li>
-->
                        </ul>
                    </li>
                    <li><a href="#">Courses</a>
                        <ul>
                            <li><a href="/course/programming_design_patterns">Programming Design Concepts</a>
                            </li>
                            <li><a href="#">Python Tutorials</a>
                                <ul>
                                    <li><a href="/">Networking Tutorials</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="">Contact</a>
                    </li>
                    @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login</a>
                    </li>
                    <li><a href="{{ url('/auth/register') }}">Register</a>
                    </li>
                    @else
                    <li>
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul>
                            <li><a href="{{ url('/auth/logout') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
                    @endif
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

    <!--
    <div class="latest-posts">
        <div class="container">
           <h2>Featured Tutorials</h2>
            <div class="row">
                <div class="col-md-3">
                    <img class="img-responsive image-responsive-centered" alt="Woman writing in a notebook" title="Woman writing in a notebook" src="//lh5.ggpht.com/bkmfzv_U-lHdif9miQDh9bquTN-d35VM6c1TGIHJmmCr7YzFmgWB0EtawFh4zadk02BDo5VP2zmCdfOc9g=s355#w=1724&amp;h=1060">
                    <h3>Learn Javascript in your Lunch hour!</h3>
                    <div>
						See how to build a career in <a href="http://blog.udacity.com/front-end-web-developer-career-guide" target="_blank">front end web development</a>.
					</div>
                </div>
                <div class="col-md-3">
                    <img class="img-responsive image-responsive-centered" alt="iOS Nanodegree" title="iOS Nanodegree" src="https://lh3.ggpht.com/mgyUnDEyRP_1SWyCqRVLV7YyxXQFIalWcMNHX0n3iL1ohlIfjI_BGnYttbZphiOPK3rbVUy2HJ5Q4SiNeeE=s355#w=1090&amp;h=670">
                    <h3>What skills to learn?</h3>
                    <div>
						See how to build a career in <a href="http://blog.udacity.com/front-end-web-developer-career-guide" target="_blank">front end web development</a>.
					</div>
                </div>
                <div class="col-md-3">
                    <img class="img-responsive image-responsive-centered" alt="Two guys talking in front of a wall covered in different sized devices" title="Two guys talking in front of a wall covered in different sized devices" src="//lh6.ggpht.com/UfMbnNAjbz9gpWVzFhmYyOJg-5paoozIIkVhKWHAGNLpfaptKrysZxyuiQlqVkYiCHhyBBlJiowyxzHStn0P=s355#w=1748&amp;h=1075">
                    <h3>What skills to learn?</h3>
                    <div>
						See how to build a career in <a href="http://blog.udacity.com/front-end-web-developer-career-guide" target="_blank">front end web development</a>.
					</div>
                </div>
                <div class="col-md-3">
                    <img class="img-responsive image-responsive-centered" alt="Strategy" title="Strategy" src="//lh3.googleusercontent.com/yu522724UipioJRuWX5524X3yeeYHFx5pJxQF7_fTvuA309WXHB6NYt2VtBkVEZ_kuLk-7UJ-N2BF7RJHENM=s355#w=436&amp;h=268">
                    <h3>What skills to learn?</h3>
                    <div>
						See how to build a career in <a href="http://blog.udacity.com/front-end-web-developer-career-guide" target="_blank">front end web development</a>.
					</div>
                </div>
               
            </div>
        </div>
    </div>
    
-->


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
                        <li><a href="#">Learning LWJGL 3</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Follow Us!</h3> 
                    <p>If you have found any of the content on this website useful then help the site out by following us on your preferred social media channel!</p>
                    <ul class="footer-connect">
                        <li><a href="http://facebook.com/laracasts"><i class="fa fa-facebook-square fa-3x"></i></a>
                        </li>
                        <li><a href="http://twitter.com/laracasts"><i class="fa fa-twitter-square fa-3x"></i></a>
                        </li>
                        <li><a href="https://github.com/laracasts"><i class="fa fa-github-square fa-3x"></i></a>
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
    <script src="{{ asset('/js/horizontalMenu.js') }}"></script>
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
