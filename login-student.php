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
        <title>E-exam | Login</title>

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


<?php include "inc/header.php"?>


		<!--contact start-->
		<section id="contact"  class="contact">
			<div class="container">
				<div class="contact-details">
					<div class="section-header contact-head  text-center">
						<h2>Login Here</h2>
						<p>
							<!-- Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. -->
						</p>
					</div><!--/.section-header-->
					<div class="contact-content">
						<div class="row">

							<div class="col-sm-12">
								<div class="single-contact-box">
									<div class="contact-form">
										<form>

                      <div class="row">
												<div class="col-sm-offset-3 col-sm-6 col-xs-12">
													<div class="form-group">
                            <select class="form-control">
                              <option selected disabled value="User Type">User Type</option>
                              <option>Teacher</option>
                              <option>Student</option>

                            </select>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-sm-offset-3 col-sm-6 col-xs-12">
													<div class="form-group">
														<input type="text" class="form-control" id="username" placeholder="Username" name="username">
													</div>
												</div>
											</div>

                      <div class="row">
												<div class="col-sm-6 col-sm-offset-3 col-xs-12">
													<div class="form-group">
														<input type="password" class="form-control" id="password" placeholder="Password" name="password">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">

                          <div class="single-contact-btn pull-left">
                            <h4>Not yet Regestered? Register Here</h4>
                            <br>
                            <h4><a href="register-student.php">As Student</a> / <a href="register-teacher.php">As Teacher</a></h4>

													</div>


													<div class="single-contact-btn pull-right">
														<button class="contact-btn" type="button">Login</button>
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
