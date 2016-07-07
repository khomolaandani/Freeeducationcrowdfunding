<!DOCTYPE html>
<?php session_start(); ?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Terms and conditions </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Jquery core CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/loginFunctions.js"></script>

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
        <!-- /.terms and conditions -->
		
<h2 style="color:white;"> Terms and Conditions </h2>
<hr>
<p style="color:white;">
Free education is not responsible for any of the content posted on this website. All projects/campaigns are owned by their creators.
Please do not post images and/or videos that you do not have the rights to post.
</p>
<p style="color:white;">
Funds do not change hands until the specified deadline for a project has arrived and the project has received enough
donations to fully fund it.
</p>
<p style="color:white;">
Do not contribute money to your own project/campaign. Free education  policy
is to not allow contributions to ones own projects.
</p>
<p style="color:white;">
Creators are under no legal obligation to use the money for the project specified.  However, there is a social
obligation to the donors to use the money for the specified project, or something as close as possible and at least as
interesting as the specified project or campaign.
</p>
<br>

<img src="Terms_Conditions.jpg" alt="sample" style="width:960px;height:360px;">
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
                <p>Copyright &copy; Andani Khomola 2016</p>
            </div>
        </div>
    </footer>

</body>
</html>