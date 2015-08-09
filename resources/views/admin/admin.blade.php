<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Page | TutorialEdge.net</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ asset('/css/admin-new.css') }}">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 sidebar">
                    <h2>Main Nav</h2>
                    <ul class="nav nav-sidebar">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Posts</a></li>
                        <li><a href="#">Videos</a></li>
                    </ul>
                </div>
                <div class="col-sm-offset-3 col-lg-9 content">
                     @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>