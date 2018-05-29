<?php
  session_start();

  if (!isset($_SESSION['rollno'])) {
  	$_SESSION['msg'] = "You must log in first";
    header("Location:login-student.php?err=" . urlencode("please login first"));
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['rollno']);
  	header("Location:login-student.php?err=" . urlencode("please login first"));
  }

?>
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- META DATA -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <!-- TITLE OF SITE -->
        <title>E-exam</title>

        <!-- for title img -->
		<link rel="shortcut icon" type="image/icon" href="assets/images/logo/favicon.png"/>

        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!--linear icon css-->
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- bootsnav -->
		<link href="assets/css/bootsnav.css" rel="stylesheet"/>

        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

	<body>





    		<!--menu start-->
    		<section id="menu">
    			<div class="container">
    				<div class="menubar">
    					<nav class="navbar navbar-default">

    						<!-- Brand and toggle get grouped for better mobile display -->
    						<div class="navbar-header">
    							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    								<span class="sr-only">Toggle navigation</span>
    								<span class="icon-bar"></span>
    								<span class="icon-bar"></span>
    								<span class="icon-bar"></span>
    							</button>
    							<a class="navbar-brand" href="index.php">
    								<img src="assets/img/logo.png" alt="logo" width="200px">
    							</a>
    						</div><!--/.navbar-header -->

    						<!-- Collect the nav links, forms, and other content for toggling -->
    						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    							<ul class="nav navbar-nav navbar-right">
    								<li class="smooth-menu">
    									<a href="index.php">Home</a>
    								</li>

    								<li class="smooth-menu"><a href="#">About</a></li>
    								<!-- <li class="smooth-menu"><a href="#">Register</a></li> -->


    								<li class="smooth-menu"><a href="#">Contact</a></li>
                    <li class="smooth-menu"><a href="logout.php">Logout</a></li>
    							</ul><!-- / ul -->
    						</div><!-- /.navbar-collapse -->
    					</nav><!--/nav -->
    				</div><!--/.menubar -->
    			</div><!-- /.container -->

    		</section><!--/#menu-->
    		<!--menu end-->



        <!--contact start-->
        <section id="contact"  class="contact">
          <div class="container">
            <div class="contact-details">
              <div class="section-header contact-head  text-center">
                <h2>STUDENT DETAIL</h2>
                <p>
                The main objective of project on E-EXAMS is to manage the detail of the examination,
                  its scheduling ,faculty duty chart, student's detail and their result.
                </p>
              </div><!--/.section-header-->
              <div class="contact-content">
                <div class="row">

                  <div class="col-sm-12">
                    <div class="single-contact-box">
                      <div class="contact-form">
                        <form action="javascript:void(0);" method="post">

                        

                          <div class="row">
                            <div class="col-sm-4 col-sm-offset-1">
                              <div class="single-contact-btn">
                                <button class="contact-btn" type="submit" name="login_user">View Marks</button>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="single-contact-btn">
                                <button class="contact-btn" type="submit" name="login_user">View Datesheet</button>
                              </div>
                            </div>

                            <div class="col-sm-3">
                              <div class="single-contact-btn">
                                <button class="contact-btn" type="submit" name="login_user">View Sitting Arrangement</button>
                              </div>
                            </div>
                          </div>



                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>
<?php include "inc/footer.php"?>
