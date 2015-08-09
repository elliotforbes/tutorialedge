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
        <script src="{{ asset('/js/dropzone.js') }}"></script>
        <script src="{{ asset('/js/ckeditor.js') }}"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 sidebar">
                    <h2>Main Nav</h2>
                    <ul class="nav nav-sidebar">
                        <li><a href="#">Home</a></li>
                        <li><a href="/admin/articles">Articles</a></li>
                        <li><a href="/admin/pages">Courses</a></li>
                        <li><a href="/admin/users">Users</a></li>
                        <li><a href="/admin/videos">Videos</a></li>
                        <li><a href="/admin/settings">Settings</a></li>
                        <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                    </ul>
                    
                    
                </div>
                <div class="col-sm-offset-2 col-lg-10 content">
                     @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>