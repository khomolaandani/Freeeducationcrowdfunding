<!DOCTYPE html>
<?php session_start(); ?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Help </title>

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
            <!-- /.navbar-collapse -->
        </div>
       <!-- /.help -->

<h2 style="color:white;"> Free education Help </h2>
<hr>

<h3 style="color:white;">What is Free Education?</h3>
<p style="color:white;">
Welcome to Free Education . Free Education is a great new way for  students, faculty, staff and alumni to create, fund and develop ideas. A good idea can grow and spread quickly. Communicating your idea here will allow you to start that process, and with a large audience to give encouragement (and of course money) your idea can become reality.
</p>

<h3 style="color:white;">Creating a project:</h3>

<p style="color:white;">
Anyone can create a project. Click the "Create a Project" link at the top and you will be taken through the process. You should give your project a descriptive name, and in order to get noticed you will want to upload a picture that relates to your project. You can also upload a video about your project.
</p><p style="color:white;">
Once you have filled out the new project form, you will be directed to Paypal Payments. We have partnered with Paypal to make getting money for projects and contributing to projects not only quick and easy, but also safe and secure. You will need to have an Paypal Payments account in order to give or receive money through Free Education. The good news is that it is very easy to get one. Just follow the instructions from Paypal and you will be ready to start using Free Education in no time! 
</p><p style="color:white;">
Once you link your Paypal Payments account with your Free Education account, you will be directed back to your project. At this point, your project is not yet visible to the public, and you can still edit it until it is perfect. Once you are satisfied, click the "Activate Project" button to make your project visible to the world and start receiving donations. After clicking the "Activate Project" button, you will no longer be able to edit your project, so plan accordingly.
</p><p style="color:white;">
If your project is fully funded by the deadline, you will receive all of the contributions to your project in your Paypal account. If your project is not funded, the contributions will be returned.
</p>

<h3 style="color:white;">Contributing to a project:</h3>
<p style="color:white;">
Contributing to a project is easy. When you see a project that you like, and want to succeed, all you have to do is go to that project's page, and click "Contribute to this project." You will be taken to another page where you enter the amount you want to donate. After making your contribution, you will be directed to Paypal Payments to make your contribution. 
</p><p style="color:white;">
We have partnered with Paypal to make getting money for projects and contributing to projects not only quick and easy, but also safe and secure. You will need to have an Paypal Payments account in order to give or receive money through Free Education. The good news is that it is very easy to get one. Just follow the instructions from Paypal and you will be ready to start using Free Education in no time!
</p><p style="color:white;">
Currently, Free Education is powered by an all-or-nothing funding method. A project must be fully funded before any money changes hands. If any of the projects you have Free Educationd to meet their goal by the deadline, your contribution will be sent to them. If they do not reach their goal by the deadline, you will receive your money back. Please note that for the duration of the project there will be a hold on the money you Free Education, but until the project deadline no money changes hands.
</p><p style="color:white;">
If you have additional concerns, pleas email <a href="mailto:Andani.Khomola@students.wits.ac.za">gethelp</a>
</p>
<br>
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