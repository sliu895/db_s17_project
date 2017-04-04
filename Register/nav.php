<?php 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="base.css">

<head id="head">
    <title>City Schoolyard Garden</title>
    <style>
        body {
            padding-top: 75px;
             }
        * {
            -webkit-border-radius: 0 !important;
            -moz-border-radius: 0 !important;
              border-radius: 0 !important;
        }

        .col-centered {
            float: none;
            margin: 0 auto;
        }
        .a-no-style {
            text-decoration: none;
            color: inherit;
        }
        .a-no-style:hover {
            color: inherit;
        }
    </style>
</head>
    <body>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href={% url 'home:home' %}>City Schoolyard Garden</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href={% url 'home:home' %}><span class="glyphicon glyphicon-home"></span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                    <li><a href={% url 'surveys:index' %}>Surveys</a></li>
                    <li><a href={% url 'lesson_plans:index' %}>Lesson Plans</a></li>


                    <li><a href={% url 'reports:reports' %}>Reports</a></li>
                    <li><a href={% url 'users:index' %}>Users</a></li>
                    <li><a href={% url 'schools:schools' %}>Schools</a></li>

                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href={% url 'users:register_staff' %}>Register Staff</a></li>
                        <li><a href={% url 'users:register_teacher' %}>Register Teacher</a></li>
                        <li><a href={% url 'users:password_reset' %}>Reset Password</a></li>
                        <li><a href={% url 'users:logout' %}>Logout</a></li>
                    </ul>
                    </li>


                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href={% url 'users:password_reset' %}>Reset Password</a></li>
                        <li><a href={% url 'users:logout' %}>Logout</a></li>
                    </ul>
                    </li>

                    <li><a href={% url 'users:logout' %}>Logout</a></li>



            </ul>
            </div><!--/.nav-collapse -->
        </div>
        </nav>


        <div class="col-sm-8 col-md-8 col-lg-8 col-centered">
            {% block content %}
            {% endblock %}
        </div>

       {% block js %}
       <!-- Bootstrap core JavaScript
       ================================================== -->
       <!-- Placed at the end of the document so the pages load faster -->

       {% endblock %}
    </body>
</html>
?>