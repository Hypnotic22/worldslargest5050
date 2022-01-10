<?php

	require_once 'config.php';

	session_start();

	if($_SESSION['loggedin'] != true){
		$_SESSION['loggedin'] = true;
		header('location:index.php');
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Worlds largest 50/50</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script>

			window.onload=function(){
			    runAnimations();
			};

			// How long you want the animation to take, in ms
			const animationDuration = 3000;
			// Calculate how long each ‘frame’ should last if we want to update the animation 60 times per second
			const frameDuration = 1000 / 60;
			// Use that to calculate how many frames we need to complete the animation
			const totalFrames = Math.round( animationDuration / frameDuration );
			// An ease-out function that slows the count as it progresses
			const easeOutQuad = t => t * ( 2 - t );

			// The animation function, which takes an Element
			const animateCountUp = el => {
				let frame = 0;
				const countTo = parseInt( el.innerHTML, 10 );
				// Start the animation running 60 times per second
				const counter = setInterval( () => {
					frame++;
					// Calculate our progress as a value between 0 and 1
					// Pass that value to our easing function to get our
					// progress on a curve
					const progress = easeOutQuad( frame / totalFrames );
					// Use the progress value to calculate the current count
					const currentCount = Math.round( countTo * progress );

					// If the current count has changed, update the element
					if ( parseInt( el.innerHTML, 10 ) !== currentCount ) {
						el.innerHTML = currentCount;
					}

					// If we’ve reached our last frame, stop the animation
					if ( frame === totalFrames ) {
						clearInterval( counter );
					}
				}, frameDuration );
			};

		// Run the animation on all elements with a class of ‘countup’
		const runAnimations = () => {
			const countupEls = document.querySelectorAll( '.countup' );
			countupEls.forEach( animateCountUp );
		};


		</script>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">support@worldslargest5050.com</a>
      </div>
      <div class="social-links d-none d-md-block">
        <a href="https://twitter.com/worldslargest50?s=20" class="twitter" target='_blank'><i class="bi bi-twitter"></i></a>
        <a href="https://instagram.com/worldslargest5050?utm_medium=copy_link" class="instagram" target='_blank'><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <!--<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        <a class="nav-link scrollto" href="purchase.php">Buy Now</a>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
    	<div style='width:100%; display:flex; flex-direction:column; text-align:center; margin-bottom: 150px;'>
      		<h1 style='color: white;'>$<span class='countup'>1000</h1>
      		<h6 h2 style='color: white;'>Current Prize Pool</h6>
      	</div>
      <h1>Welcome to the World's Largest 50/50 Raffle</h1>
      <h2>Our goal is to set the guiness world record for the largest 50/50 ever held</h2>
      <a href="purchase.php" class="btn-get-started scrollto">Buy Now</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

  	   <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <span>Pricing</span>
          <h2>Pricing</h2>
        </div>

        <div class="row">
        	<div style='width: 100%; display: flex; flex-direction: column; text-align: center;'
           class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in">
            <div class="box featured">
              <h3>Tickets</h3>
              <h4><sup>$</sup>5<span> / ticket</span></h4>
              <ul>
                <li>One flat rate</li>
              </ul>
              <div class="btn-wrap">
                <a href="purchase.php" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>The Goal</h3>
            <p class="fst-italic">
              Our goal is simple. To set the world record for the largest 50/50 ever held, in terms of total prize pool. Your goal is to win.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> We believe in transparency, as a ressult all financials will be made public at the end of the raffle.</li>
              <li><i class="bi bi-check-circle"></i> We use major companies for all payment transactions, to keep your information secure.</li>
              <li><i class="bi bi-check-circle"></i> Ticket drawing will be live. This is to prevent any speculation on legitimacy.</li>
            </ul>
            <p>
              We have decided to use Square and Coinbase as the two companies to process payments. This keeps all banking information secure. We will also release statements showing total donations received once the drawing is complete. This is to ensure all parties involved know the true value and secures transparency between you and us. Lastly, on the day of the drawing, we will livestream the entire process showing that all tickets are present and are drawn legitimately.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up">
            <div class="box">
              <span>01</span>
              <h4>Buy a Ticket</h4>
              <p>Everything good starts with that first risk. You can't win if you don't play.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
            <div class="box">
              <span>02</span>
              <h4>Get your confirmation</h4>
              <p>After buying your ticket(s) you will receive an email, within 24 hours, with your confirmation and ticket number(s).</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <span>03</span>
              <h4>WIN</h4>
              <p>The winning ticket will be drawn on March 1st. Come check back to see if you won!</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

        <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Ready to take the next step?</h3>
          <p> All it takes is a few clicks to change your financial lifestyle. Buy a ticket now.</p>
          <a class="cta-btn" href="purchase.php">Buy Now</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <span>Team</span>
          <h2>Team</h2>
          <p>A one man show</p>
        </div>

        <div style='width: 100%; display: flex; flex-direction: column; text-align: center;'
          class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="logan.JPG">
              <h4>Logan Ercanbrack</h4>
              <span></span>
              <p>
                Just an Idaho kid with a dream of holding a guiness world record.
              </p>
              <div class="social">
                <a href="https://twitter.com/loganercanbrack?s=20" target='_blank'><i class="bi bi-twitter"></i></a>
                <a href="https://instagram.com/logan_ercanbrack?utm_medium=copy_link" target='_blank'><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>World's Largest 50/50</h3>
              <p><br><br>
                <strong>Phone:</strong> We do not have one, please email us :)<br>
                <strong>Email:</strong> support@worldslargest5050.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/worldslargest50?s=20" class="twitter" target='_blank'><i class="bx bxl-twitter"></i></a>
                <a href="https://instagram.com/worldslargest5050?utm_medium=copy_link" class="instagram" target='_blank'><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="terms.php">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacy.php">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>World's Largest 5050</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

	</body>
</html>