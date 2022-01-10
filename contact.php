<?php

	require_once 'config.php';

	$name = $email = $subject = $ticket = $message = $confirmation = '';

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$ticket = $_POST['ticket'];
		$message = $_POST['message'];

		$sql = "INSERT INTO contact (name, email, subject, ticket, message) VALUES ('$name', '$email', '$subject', '$ticket', '$message')";

		if($link->query($sql)){
			echo "<script type='text/javascript'>alert('Message has been sent');</script>";
		}else{
			echo "<script type='text/javascript'>alert('Message failed to send, please try again');</script>";
		}
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Contact</title>
		<meta charset="utf-8">
		  <meta content="width=device-width, initial-scale=1.0" name="viewport">

		  <meta content="" name="description">
		  <meta content="" name="keywords">

		  <!-- Favicons -->
		  <link href="assets/img/favicon.png" rel="icon">
		  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

		  <!-- Google Fonts -->
		  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

		  <!-- Vendor CSS Files -->
		  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
		  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
		  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
		  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

		  <!-- Template Main CSS File -->
		  <link href="assets/css/style.css" rel="stylesheet">
		  <style>
		  	.active{
  				background-color: #cc1616;
  				color:  white;
  				text-decoration: none;
  				padding: 25px;
  				position:  absolute;
			}

			.active:hover{
				color: blue;
			}
		</style>
	</head>
	<body>
		<a class="active" href="index.php">Home</a>

		<!-- ======= Contact Section ======= -->
	    <section id="contact" class="contact">
	      <div class="container">

	        <div class="section-title">
	          <span>Contact</span>
	          <h2>Contact</h2>
	          <p>We usually respond within 48 hours</p>
	        </div>

	        <div class="row" data-aos="fade-up">
	          <div class="col-lg-6">
	            <div class="info-box mb-4">
	              <i class="bx bx-map"></i>
	              <h3>Our Address</h3>
	              <p>Boise, Idaho</p>
	            </div>
	          </div>

	          <div class="col-lg-3 col-md-6">
	            <div class="info-box  mb-4">
	              <i class="bx bx-envelope"></i>
	              <h3>Email Us</h3>
	              <p>support@worldslargest5050.com</p>
	            </div>
	          </div>

	          <div class="col-lg-3 col-md-6">
	            <div class="info-box  mb-4">
	              <i class="bx bx-phone-call"></i>
	              <h3>Call Us</h3>
	              <p>We do not have a number, please email us :)</p>
	            </div>
	          </div>

	        </div>

	        <div class="row" data-aos="fade-up">

	          <div class="col-lg-6 ">
	            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92456.6562631281!2d-116.30393783858685!3d43.600908984911676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54aef172e947b49d%3A0x9a5b989b36679d9b!2sBoise%2C%20ID!5e0!3m2!1sen!2sus!4v1641835422932!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
	          </div>

	          <div class="col-lg-6">
	            <form action="" method="post" role="form" class="php-email-form">
	              <div class="row">
	                <div class="col-md-6 form-group">
	                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
	                </div>
	                <div class="col-md-6 form-group mt-3 mt-md-0">
	                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
	                </div>
	              </div>
	              <div class="form-group mt-3">
	                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
	              </div>
	              <div class="form-group mt-3">
	                <select class="form-control" name="ticket" id="ticket" placeholder="Have you Purchased a ticket?" required>
	                	<option>No</option>
	                	<option>Yes</option>
	                </select>
	              </div>
	              <div class="form-group mt-3">
	                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
	              </div>
	              <div class="my-3">
	                <div class="loading">Loading</div>
	                <div class="error-message"></div>
	                <div class="sent-message"></div>
	              </div>
	              <div class="text-center"><button type="submit">Send Message</button></div>
	            </form>
	          </div>

	        </div>

	      </div>
	    </section><!-- End Contact Section -->
	</body>
</html>