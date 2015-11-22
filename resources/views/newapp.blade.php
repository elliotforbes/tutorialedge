<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') | TutorialEdge.net</title>
    @yield('meta')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="author" href="https://plus.google.com/b/115194233692529836662">
    <meta property="og:site_name" content="TutorialEdge.net" />
    <link rel="stylesheet" href="{{ asset('/css/newstyle.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('/images/favicon.ico') }}">
</head>
<body>
	
	<div class="header">
		<div class="container">
            
        </div>
	</div>
	
    <div class="container">
        @yield('home')
    </div>
    
</body>
</html>