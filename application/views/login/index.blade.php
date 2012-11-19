<!DOCtype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    {{ HTML::style('css/bootstrap.css') }}

    <title>ikariApp</title>

</head>
<body>
<div class="container">
    @if (Session::has('logout'))
    <div class="alert alert-success">
        Logged out.
    </div>
    @endif
    <div class="well span4 offset3">

        <!-- title -->
        <div class="text-center" style="padding-bottom: 25px;">
            <h1>Ikari App</h1>
        </div>

        <!-- If there was a failed login, display the error -->
        @if (Session::has('login_errors'))
        <div class="alert alert-error">
            Invalid username or password.
        </div>
        @endif

        <!-- Login form -->
        {{ Form::open('login'); }}

        <!-- Twitter Bootstrap form styling -->
        <!-- if $errors have 'email' echo error, else (which is : ) insert whatever you want in '' or leave blank -->
        <div class="control-group {{ $errors->has('email') ? 'error' : '' }}">

            <!-- username field -->
            <p>{{ Form::label('email', 'Email') }}</p>
            <div class="controls">
                {{ Form::text('email', '', array('class' => ('span4'))) }}
                <!-- Display error when invalid email address is entered -->
                @if ($errors->has('email'))
                <a href="#" rel="tooltip" data-original-title="Invalid email address">
                    <i class="icon-warning-sign"></i>
                </a>
                @endif

            </div>
        </div>

        <div class="control-group">
            <!-- password field -->
            <p>{{ Form::label('password', 'Password') }}</p>
            <p>{{ Form::password('password', array('class' => 'span4')) }}</p>
        </div>
        <p>{{ Form::submit('Login', array('class' => 'btn btn-primary')) }}</p>
    </div>
</div>
</div>

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap-transition.js"></script>
<script src="js/bootstrap-alert.js"></script>
<script src="js/bootstrap-modal.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap-scrollspy.js"></script>
<script src="js/bootstrap-tab.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script src="js/bootstrap-popover.js"></script>
<script src="js/bootstrap-button.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/bootstrap-carousel.js"></script>
<script src="js/bootstrap-typeahead.js"></script>
<script src="js/app.js"></script>


</body>
</html>
