<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <title> Disney  store - @yield('page-title')</title>
    <link rel="stylesheet" href="css/fancySelect.css" />
    <link rel="stylesheet" href="css/uniform.css" />
    <link rel="stylesheet" href="css/jquery.bxslider.css" />
    <link href="css/jquery-ui-1.10.4.custom.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css" />
    <link media="screen" rel="stylesheet" type="text/css" href="css/screen.css" />
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    @yield('cssCode')
</head>
<body>
<div id="wrapper">
    <div class="wrapper-holder">
        <div class="header-holder">
            <header id="header">
                @include('Frontsite.Layout.Header')
                @include('Frontsite.Layout.Menu')
            </header>
            @yield('Content')
        </div>
    @include('Frontsite.Layout.Footer')
</div>
</div>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jcarousellite.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/fancySelect.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.js"></script>
<script src="js/jquery-ui-1.10.4.custom.js"></script>
<script type="text/javascript" src="js/main.js"></script>
@yield('jsCode')
</body>
</html>
