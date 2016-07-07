<!DOCTYPE html>
<?php session_start (); ?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Projects page </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Jquery core CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/projectsPageFunctions.js"></script>

    <!-- Custom CSS -->
    <link href="css/myCustomStyle.css" rel="stylesheet">
    <link href="css/navigation.css" rel="stylesheet">
    <link href="css/3-col-portfolio.css" rel="stylesheet">
    <link href="css/circular-progressbar.css" rel="stylesheet">

    <!-- Navigation -->
    <link href="css/navigation.css" rel="stylesheet">
    <script src="js/navigation.js"></script>

    <script>
        var userId;
        var userName;
        var userType;
        var link = "Home.php";

        $(document).ready(function() {
            userId = <?php echo isset($_SESSION['userId']) ? $_SESSION['userId'] : 0; ?>;
            userName = <?php echo isset($_SESSION['name']) ? "'".$_SESSION['name']."'" : "''" ?>;
            userType = <?php echo isset($_SESSION['permission']) ? $_SESSION['permission'] : -1; ?>;

            adaptedNavbar(userName, link);
            getProjects(userType);
        });
    </script>

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

            <!-- Collect the nav links, forms, and other content from navigation.js -->
            <div class="collapse navbar-collapse navbar-dynamic" id="bs-example-navbar-collapse-1">

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

            </div>
            <!-- /.container -->
        </div>
    </nav>
    <!-- /.navbar-collapse -->

    <!------------------------------------------ Page Content ---------------------------------------------->

    <div class="container" id="content">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects content -->
        <div class="row text-center"></div>
		<iframe width="1200" height="480" src="https://www.youtube.com/embed/kgKLGFqY67g" frameborder="0" allowfullscreen></iframe>
		<h2 style="text-align:center;"> Latest crowdfunding campaigns </h2>
		<img src="Projects.jpg" alt="projects" style="width:1200px;height:360px;">
		
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
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Andani Khomola 2016</p>
                </div>
            </div>
        </footer>

    </div>




    <!------------------------------------------ Page Content ---------------------------------------------->

</body>
</html>
