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
        <title>E-exam | Student Registeration</title>

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
						<h2>Student Registeration Here</h2>
						<p>
							<!-- Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. -->
						</p>
					</div><!--/.section-header-->
					<div class="contact-content">
						<div class="row">

							<div class="col-sm-12">
								<div class="single-contact-box">
									<div class="contact-form">
                    <form action="do-reg-student.php" method="post">
											<div class="row">
												<div class="col-sm-6 col-xs-12">
													<div class="form-group">
													  <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
													</div>
												</div>
											</div>

                      <div class="row">
												<div class="col-sm-6 col-xs-12">
													<div class="form-group">
													  <input type="text" class="form-control" id="fathername" placeholder="Father's Name" name="fathername" required>
													</div>
												</div>
                        <div class="col-sm-6 col-xs-12">
                          <div class="form-group">
                            <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" required>
                          </div>
                        </div>


											</div>

                      <div class="row">
                      <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3 col-xs-12">
                              <lable>Course :</lable>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                              <lable>MCA
                              <input type="radio" class="form-control" id="male" name="course" value="mca"></lable>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                              <lable>MBA
                               <input type="radio" class="form-control" id="male" name="course" value="mba"></lable>
                           </div></div>

                           <div class="row">

                           <div class="col-sm-offset-3 col-sm-3 col-xs-12">
                             <lable>BCA
                              <input type="radio" class="form-control" id="male" name="course" value="bca"></lable>
                          </div>
                          <div class="col-sm-6 col-xs-12">
                            <lable>BBA
                             <input type="radio" class="form-control" id="male" name="course" value="bba"></lable>
                         </div>
                         </div>


                           </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-xs-12">
                                <lable>Gender :</lable>
                              </div>
                              <div class="col-sm-3 col-xs-12">
                                <lable>Male
                                <input type="radio" class="form-control" id="male" name="gender" value="male"></lable>
                              </div>
                              <div class="col-sm-6 col-xs-12">
                                <lable>Female
                                 <input type="radio" class="form-control" id="male" name="gender" value="female"></lable>
                             </div>
                             </div>
                          </div>
                        </div>
                      </div>


											<div class="row">
												<div class="col-sm-6 col-xs-12">
													<div class="form-group">
														<input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
													</div>
												</div>
												<div class="col-sm-6 col-xs-12">
													<div class="form-group">
														<input type="text" class="form-control" id="rollno" placeholder="Roll No." name="rollno" required>
													</div>
												</div>
											</div>




											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="New Password" name="password" required>
													</div>
												</div>
                        <div class="col-sm-6">
													<div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Confrm Password" name="re_password" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
                          <div class="single-contact-btn pull-left">
														<h4>Already Registered? <a href="login-student.php">Login here</a></h4>
													</div>

													<div class="single-contact-btn pull-right">
														<button class="contact-btn" type="submit">Submit</button>
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
