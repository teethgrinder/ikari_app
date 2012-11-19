<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Torque App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/responsive.css') }}

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="{{ URL::home() }}">Ikari App</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active">
                        <a href="{{ URL::home() }}">
                            <i class="icon-home"></i> Home</a></li>
                    <li><a href="#inbox"><i class="icon-envelope"></i> Inbox</a></li>
                    <li><a href="#contacts"><i class="icon-book"></i> Contacts</a></li>
                    <li><a href="#calendar"><i class="icon-calendar"></i> Calendar</a></li>
                    <li><a href="#tasks"><i class="icon-check"></i> Tasks</a></li>
                </ul>

                <ul class="nav pull-right">
                    <li class="divider-vertical"></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="profile-pic-thumb">
                                    <img alt="" class="pull-left" src="http://placekitten.com/30/30" />
                                </span>
                            {{ Auth::user()->first_name }}
                            {{ Auth::user()->last_name }}

                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                            <li><a href="{{ URL::to('logout'); }}"><i class="icon-signout"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>

            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

{{ $content }}

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/bootstrap-transition.js') }}
{{ HTML::script('js/bootstrap-transition.js') }}
{{ HTML::script('js/bootstrap-alert.js') }}
{{ HTML::script('js/bootstrap-modal.js') }}
{{ HTML::script('js/bootstrap-dropdown.js') }}
{{ HTML::script('js/bootstrap-scrollspy.js') }}
{{ HTML::script('js/bootstrap-tab.js') }}
{{ HTML::script('js/bootstrap-tooltip.js') }}
{{ HTML::script('js/bootstrap-popover.js') }}
{{ HTML::script('js/bootstrap-button.js') }}
{{ HTML::script('js/bootstrap-collapse.js') }}
{{ HTML::script('js/bootstrap-carousel.js') }}
{{ HTML::script('js/bootstrap-typeahead.js') }}

</body>
</html>