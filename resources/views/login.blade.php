<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login | TutorialEdge.net</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <!-- Latest compiled and minified JavaScript -->
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{ asset('/css/admin.css') }}">
    </head>
    <body>
        <div class="gray-padding"></div>
        
        <div class="container">
            <div class="login-form">
                <form action="">
                    <div class="form-group">
                        <label for="usernameInput">Username</label>
                        <input type="text" class="form-control"  placeholder="username" id="usernameInput">
                    </div>
                    <div class="form-group">
                        <label for="passwordInput">Password</label>
                        <input type="password"  class="form-control" placeholder="password" id="passwordInput">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>