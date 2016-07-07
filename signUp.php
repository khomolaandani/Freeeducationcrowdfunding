<!DOCTYPE html>
<?php session_start(); ?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Sign Up </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Jquery core CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/signupFunctions.js"></script>

    <!-- Custom CSS -->
    <link href="css/myCustomStyle.css" rel="stylesheet">
    <link href="css/formStyle.css" rel="stylesheet">

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="smoothscroll" href="Home.php"><img alt="" src="images/free-logo.gif"></a>
            </div>

        
<!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="signUp.php">Sign up</a>
                    </li>
                    <li>
                        <a href="logIn.php">Log in</a>
                    </li>
					<li>
                        <a href="Home.php">Home</a>
                    </li>
					<li>
                        <a href="projectCreate.php">Create a project</a>
                    </li>
                    <li>
                        <a href="#" id="about" onClick="about()">About us</a>
                        <!--<input type="button" value="About us" onClick="about()">-->
                    </li>
                </ul>
            </div>

                        <!--<input type="button" value="About us" onClick="about()">-->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <br><br>

    <div class="container" id="wrap">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="r" method="post" accept-charset="utf-8" class="form" role="form">
                    <legend>Sign Up</legend>
                    <div class="row">
                        <!-- first name input -->
                        <div class="col-xs-6 col-md-6">
                            <input id="firstName" type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name"/>
                        </div>
                        <!-- last name input -->
                        <div class="col-xs-6 col-md-6">
                            <input id="lastName" type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name"/>
                        </div>
                    </div>
                    <!-- email input -->
                    <input id="email" type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email"/>
                    <!-- password input -->
                    <input id="pass1" type="password" name="password" value="" class="form-control input-lg" placeholder="Password"/>
                    <!-- password check input -->
                    <input id="pass2" type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password"/>
                    <!-- occupation input -->
                    <label>Type of occupation</label>
                    <div class="row">
                        <div class="col-xs-4 col-md-6">
                            <select id="type" name="customer" class = "form-control input-lg">
                                <option value="2">Student</option>
                                <option value="3">Funder</option>
                            </select>
                        </div>
                    </div>
                    <label>Gender : </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="M" id=male /> Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="F" id=female /> Female
                    </label>
                    <br>
                    <span class="help-block">
                        By clicking Create my account, you agree to our Terms and conditions.
                    </span>
                    <button id="submit" type="submit" class="btn btn-lg btn-primary btn-block signup-btn" >
                        Create account
                    </button>
                </form>
            </div>
        </div>
    </div>

    <br>
    <hr>
 <!-- /.row -->
<style>
ul.breadcrumb {
    padding: 8px 16px;
    list-style: none;
    background-color: #eee;
}
ul.breadcrumb li {display: inline;}
ul.breadcrumb li+li:before {
    padding: 8px;
    color: black;
    content: "/\00a0";
}
ul.breadcrumb li a {color: green;}
</style>
</head>
<body>

<h4 style="text-align:center;">Navigate the website by clicking the tabs below</h4>
<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="projectsPage.php">Projects</a></li>
  <li><a href="project.php">Project description</a></li>
  <li><a href="projectCreate.php">Create project</a></li>
  <li><a href="projectEdit">Edit Project</a></li>
  <li><a href="signUp.php">Sign Up</a></li>
  <li><a href="logIn.php">Log In</a></li>
  <li><a href="terms.php">Terms</a></li>
  <li><a href="Help">Help</a></li>
    <li>Home</li>
</ul>

</body>
        <hr>
    <!-- Footer -->
    <footer>
        <div class="row container">
            <div class="col-lg-12">
                <p>Copyright &copy; Andani khomola 2016</p>
            </div>
        </div>
    </footer>

</body>
</html>