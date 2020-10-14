<?php

$conn=mysqli_connect('localhost','root','','universitydb');

if(!$conn){
    echo 'connection error:'.mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Job Requesting Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="assets/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="assets/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="assets/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jobRequest.css">
    <link rel="stylesheet" href="assets/css/event.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a href="index.html" class="logo mr-auto"><img src="assets/img/lg.png" alt=""></a>

        <!-- .nav-menu -->
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <li class="drop-down"><a href="">Apply</a>
                    <ul>
                        <li><a href="#">Admission</a></li>
                        <li><a href="#">Part Time Job</a></li>
                        <li><a href="#">Housing</a></li>
                    </ul>
                <li class="drop-down"><a href="">Gallery</a>
                    <ul>
                        <li><a href="#">Exhibition</a></li>
                        <li><a href="#">Yale photo MFA</a></li>
                        <li><a href="#">Yale BA Art</a></li>
                        <li><a href="#">Spring</a></li>
                    </ul>
                <li><a href="#">Publications</a></li>
                <li><a href="#">News</a></li>
                <li><a href="event.html">Event</a></li>
                <li class="drop-down"><a href="">About</a>
                    <ul>
                        <li><a href="#">About Yale</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Facilities</a></li>
                        <li><a href="#">Study Area</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact Us</a></li>

            </ul>
        </nav><!-- .nav-menu -->

        <a href="#" class="RegisterLogin-btn scrollto">
            <span class="d-none d-md-inline"></span>Register</a>
        <a href="#" class="RegisterLogin-btn scrollto">
            <span class="d-none d-md-inline"></span> Login</a>
    </div>
</header><!-- End Header -->
<br><br><br>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url(assets/img/bg-01.jpg);">
					<span class="login100-form-title-1">
						Job REQUESTING FORM
					</span>
            </div>

            <form class="login100-form validate-form" method="post" action="jobRequest.php">
                <div class="wrap-input100 validate-input m-b-26" data-validate="First Name is required">
                    <span class="label-input100">First Name</span>
                    <input class="input100" type="text" name="firstname" >
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate = "Last Name is required">
                    <span class="label-input100">Last Name</span>
                    <input class="input100" type="text" name="pass">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate = "Email is required">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="email" name="pass">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate = "Telephone is required">
                    <span class="label-input100">Telephone</span>
                    <input class="input100" type="number" name="pass">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18">
                    <span class="label-input100">Faculty</span>
                    <div>
                        <select class="custom_select">
                            <option value="">Select</option>
                            <option value="undergraduate">Grapghic Design</option>
                            <option value="graduatestudent">Painting/Paintmaking</option>
                            <option value="faculty">Photography</option>
                            <option value="faculty">Sculpture</option>
                        </select>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18">
                    <span class="label-input100">Job Type</span>
                    <div>
                        <select class="custom_select">
                            <option value="">Select</option>
                            <option value="undergraduate">On Campus</option>
                            <option value="graduatestudent">Local Community</option>
                            <option value="faculty">Community SErvice</option>
                        </select>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18">
                    <span class="label-input100">Job Title</span>
                    <div>
                        <select class="custom_select">
                            <option value="">Select</option>
                            <option value="undergraduate">Internship</option>
                            <option value="graduatestudent">Full Time</option>
                            <option value="faculty">Part Time</option>
                            <option value="faculty">Fresh Graduate</option>
                        </select>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate = "Date is required">
                    <span class="label-input100">Desired move Date</span>
                    <input class="input100" type="date" name="pass" >
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" name="create">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>YaleArtUniversity</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by TeamAlpha
        </div>
    </div>


</footer><!-- End Footer -->

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/vendor2/jquery/jquery-3.2.1.min.js"></script>
<script src="assets/vendor2/animsition/js/animsition.min.js"></script>
<script src="assets/vendor2/js/popper.js"></script>
<script src="assets/vendor2/js/bootstrap.min.js"></script>
<script src="assets/vendor2/select2.min.js"></script>
<script src="assets/vendor2/moment.min.js"></script>
<script src="assets/vendor2/daterangepicker.js"></script>
<script src="assets/vendor2/countdowntime.js"></script>
<script src="assets/js/form.js"></script>

</body>
</html>