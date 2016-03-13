<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>OneUI - Admin Dashboard Template & UI Framework</title>

        <meta name="description" content="OneUI - Admin Dashboard Template & UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{ secure_asset('/img/favicons/favicon.png', Request::secure()) }}">

        <link rel="icon" type="image/png" href="{{ secure_asset('/img/favicons/favicon-16x16.png', Request::secure()) }}" sizes="16x16">
        <link rel="icon" type="image/png" href="{{ secure_asset('/img/favicons/favicon-32x32.png', Request::secure()) }}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{ secure_asset('/img/favicons/favicon-96x96.png', Request::secure()) }}" sizes="96x96">
        <link rel="icon" type="image/png" href="{{ secure_asset('/img/favicons/favicon-160x160.png', Request::secure()) }}" sizes="160x160">
        <link rel="icon" type="image/png" href="{{ secure_asset('/img/favicons/favicon-192x192.png', Request::secure()) }}" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="{{ secure_asset('/img/favicons/apple-touch-icon-57x57.png', Request::secure()) }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ secure_asset('/img/favicons/apple-touch-icon-60x60.png', Request::secure()) }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ secure_asset('/img/favicons/apple-touch-icon-72x72.png', Request::secure()) }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ secure_asset('/img/favicons/apple-touch-icon-76x76.png', Request::secure()) }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ secure_asset('/img/favicons/apple-touch-icon-114x114.png', Request::secure()) }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ secure_asset('/img/favicons/apple-touch-icon-120x120.png', Request::secure()) }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ secure_asset('/img/favicons/apple-touch-icon-144x144.png', Request::secure()) }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ secure_asset('/img/favicons/apple-touch-icon-152x152.png', Request::secure()) }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ secure_asset('/img/favicons/apple-touch-icon-180x180.png', Request::secure()) }}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

        <!-- Bootstrap and OneUI CSS framework -->
        <link rel="stylesheet" href="{{ secure_asset('/css/bootstrap.min.css', Request::secure()) }}">
        <link rel="stylesheet" id="css-main" href="{{ secure_asset('css/oneui.css', Request::secure()) }}">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="secure_assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Login Content -->
        <div class="bg-white pulldown">
            <div class="content content-boxed overflow-hidden">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                        <div class="push-30-t push-50 animated fadeIn">
                            <!-- Login Title -->
                            <div class="text-center">
                               <h3>TutorialEdge.net</h3>
                                <i class="fa fa-2x fa-circle-o-notch text-primary"></i>
                                <p class="text-muted push-15-t">The home of high quality programming tutorials</p>
                                <p class="text-muter push-15-t">Register now for new tutorials delivered straight to your inbox!</p>
                            </div>
                            <!-- END Login Title -->

                            <!-- Login Form -->
                            <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            @if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					 <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
                        <div class="form-group">
                            <label class="col-md-4 control-label">First Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                            </div>
                        </div>
 
                        <div class="form-group">
                            <label class="col-md-4 control-label">Last Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                            </div>
                        </div>
 
                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>
 
                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
 
                        <div class="form-group">
                            <label class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
 
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                            <!-- END Login Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Login Content -->

        <!-- Login Footer -->
        <div class="pulldown push-30-t text-center animated fadeInUp">
            <small class="text-muted"><span class="js-year-copy"></span> &copy; OneUI 1.2</small>
        </div>
        <!-- END Login Footer -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <script src="{{ secure_asset('/js/core/jquery.min.js', Request::secure()) }}"></script>
        <script src="{{ secure_asset('/js/core/bootstrap.min.js', Request::secure()) }}"></script>
        <script src="{{ secure_asset('/js/core/jquery.slimscroll.min.js', Request::secure()) }}"></script>
        <script src="{{ secure_asset('/js/core/jquery.scrollLock.min.js', Request::secure()) }}"></script>
        <script src="{{ secure_asset('/js/core/jquery.appear.min.js', Request::secure()) }}"></script>
        <script src="{{ secure_asset('/js/core/jquery.countTo.min.js', Request::secure()) }}"></script>
        <script src="{{ secure_asset('/js/core/jquery.placeholder.min.js', Request::secure()) }}"></script>
        <script src="{{ secure_asset('/js/core/js.cookie.min.js', Request::secure()) }}"></script>
        <script src="{{ secure_asset('/js/app.js', Request::secure()) }}"></script>

        <!-- Page JS Plugins -->
        <script src="{{ secure_asset('/js/plugins/jquery-validation/jquery.validate.min.js', Request::secure()) }}"></script>

        <!-- Page JS Code -->
        <script src="{{ secure_asset('/js/pages/base_pages_login.js', Request::secure()) }}"></script>
    </body>
</html>

