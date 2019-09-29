<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Best Interior designers in chennai creating design, decor and thoughts for functional and artistic spaces.  At Eclectic we help you in Space planning,  3d visualization,  Interior design, Home interiors,  Shop interiors, vasthu and home automation. We also do complete turnkey projects and  rennovation projects">
    <link rel="shortcut icon" type="image/ico" href="./assets/img/favicon.ico"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146393732-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146393732-1');
</script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript" src="assets/assets/js/animate.txt.js"></script>
    <link type="text/css" rel="stylesheet" href="assets/assets/css/animate.txt.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"> -->
    <!-- <script type="text/javascript" src="assets/assets/js/respond.min.js"></script> -->
    <!-- <script type="text/javascript" src="assets/assets/js/modernizr.min.js"></script> -->
    <!-- <link type="text/css" rel="stylesheet" href="assets/assets/css/styles.min.css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://kit.fontawesome.com/284331321e.js"></script>

    <title>ECLECTIC</title>
    <script>

        $(document).ready(function () {
            variable = 0;
            if (window.performance.navigation.type == window.performance.navigation.TYPE_BACK_FORWARD) {

                variable = 1;
                var $div1 = $("#load");
                var $div2 = $("#contnav");
                $div1.hide();
                $div2.show();
            }
            // do something

            if (variable === 0) {
                var $div1 = $("#load");
                var $div2 = $("#contnav");
                setTimeout(function () {
                    $div1.animate({
                        height: 0,
                        opacity: 0,
                        margin: 0,
                        padding: 0
                    }, 'slow', function () {
                        $(this).hide();
                        $div2.show();
                    });

                }, 2500);
                variable = variable + 1;
                // console.log(variable)
            }
        });
    </script>
    <script>
        var position = $(window).scrollTop();

        // should start at 0

        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll > position) {
                //console.log('scrollDown');
                $("#navbarSupportedContent").removeClass('show');
                $("#contnav").hide();

            } else {
                //console.log('scrollUp');
                $("#contnav").show();

            }
            position = scroll;
        });
    </script>

</head>

<body class="caviar">
    <div id="load" class="section-intro-logo" style=" z-index:99; height:100%">
        <h1 class="text-center animated zoomIn" style="height: 100vh;line-height: 100vh;">
            <img class="logo img-fluid" width="400" height="auto" src="assets/img/Eclectic png Logo.png" alt="logo">
            <!-- <a class="typewrite" data-period="50" data-type='[ " E clectic design and decor" ]'></a> -->
            <!-- <a class="typewrite typewrite1" data-period="20" data-type='[ "   Design and Decor" ]' style="font-size: 3rem;"></a>
            <a class="typewrite" data-period="20" data-type='[ "" ]' style="font-size: 3rem;"> -->

            <!-- <a href="" class="typewrite" data-period="20" data-type='[ "Design and Decor " ]'> -->

            <span class="wrap"></span>
            </a>
        </h1>



    </div>
    <div id="contents">
        <nav class="navbar fixed-top navbar-light bg-white" id="contnav"
            style="justify-content: flex-end;display: none;">

            <!-- <div class="collapse mx-auto" id="navbarSupportedContent">
                        <div class="bg-white p-2" style="display: inline-flex;">
                            <h4 class="text-dark px-2"><a class="text-dark" href="#">ABOUT</a></h4>
                            <h4 class="text-dark px-2"><a class="text-dark" href="#">CONTACT</a></h4>
                            <h4 class="text-dark px-2"><a class="text-dark" href="#">TESTIMONIALS</a></h4>
                        </div>
                    </div> -->

            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="audrey navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-dark" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#contact">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#testimonials">TESTIMONIALS</a>
                    </li>
                    <li class="nav-item" id="nav-img">
                        <a href="./index.php" class="nav-link text-dark">
                            <img width="220" height="auto" src="assets/img/logo landscape eclectic.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>

            <button id="hover-toggle" class="custom-toggler navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="custom-toggler navbar-toggler-icon"></span>
            </button>
        </nav>

        <section class="section-hero text-center" style="margin-top: 50px;">
            <div class="container-fluid" style="padding-right: 0; padding-bottom: 40px;">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom:50px;">
                        <img class="logo" width="300" height="auto" src="assets/img/logo landscape eclectic.png" alt="">
                    </div>
                </div>
                <div class="row section-between">
                    <div class="col-sm-4 col-md-3 p-0 hovereffect">
                        <a href="./space_planning.html">
                            <img class="img-fluid loaded" src="./assets/img/1 space planning.jpg">
                            <div class="overlay">
                                <h2>Space Planning</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-3 p-0 hovereffect">
                        <a href="./Visualization.html">
                            <img class="img-fluid loaded" src="./assets/img/2 visualization.jpg">
                            <div class="overlay">
                                <h2>3D Visualization</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-3 p-0 hovereffect">
                        <a href="./interior_design.html">
                            <img class="img-fluid loaded" src="./assets/img/3 Interior design.jpeg">
                            <div class="overlay">
                                <h2>Interior Design</h2>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="col-sm-4 col-md-3 p-0 hovereffect">
                        <a href="./furniture.html">
                            <img class="img-thumbnail loaded" src="./assets/img/4 furniture.jpg">
                            <div class="overlay">
                                <h2>Furniture</h2>
                            </div>
                        </a>
                    </div> -->
                    <div class="col-sm-4 col-md-3 p-0 hovereffect">
                        <a href="./home_automation.html">
                            <img class="img-fluid loaded" src="./assets/img/5 Home Automation.jpg">
                            <div class="overlay">
                                <h2>Home Automation</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <a id="visit" href="#contact" class="btn btn-outline-dark">Book Site Visit</a>
        </section>


        <section id="about" class="section-gems text-center">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gems-text audrey">
                            <h1 style="font-weight: bolder;" class="wow fadeInLeft">A B O U T</h1>

                        </div>
                    </div>
                </div>

                <div class="row"
                    style="padding-top: 40px; padding-bottom: 40px;padding-left: 20px;padding-right: 20px;">
                    <div class="col-md-6 col-lg-4">
                        <div class="gem-heading">
                            <h3>
                                Hello, I’m Vignesh, Designer and Founder, Eclectic Design
                                &amp; Decor. We create designs with Knowledge and Passion.
                                We believe in the ability of Art, Architecture and Design
                                thinking to effect good in the world.
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <div class="gem-copytext">
                            <h4 class="pt-2 audrey">What is Eclectic?</h4>
                            “Methods, beliefs, ideas, etc. that seems the best or most useful derived from a broad and
                            diverse range of systems, rather than following a single system.”
                        </div>
                        <div class="gem-copytext">
                            <h4 class="pt-2 audrey">Our Approach</h4>
                            At eclectic we strive to gain perspective on all of the different ways, to
                            finally find the one design that meets our objective. We believe that no two
                            projects are same and one client’s space differs to a great extent with
                            another’s, in terms of details and overall design. Our first step is to sit down
                            with you and discuss your specific requirements and vision for the
                            space in detail. This process not only helps us realize what we want but also
                            helps us in bringing your imagination into reality. It provides us a clear
                            vision and opportunity to get accurate and realistic information regarding
                            the project because the clearer the vision, better the results. This thorough
                            research and understanding, allows us to get to the pinnacle of your dream
                            for a comfortable space.
                        </div>
                        <div class="gem-copytext">
                            <h4 class="pt-2 audrey">Our Vision</h4>
                            <p class="pb-2 m-0" style="font-weight: 600;">“Design, Decor and Thoughts for Functional
                                and Artistic spaces.”</p>
                            Our projects are thoughtfully designed to make the product not for the
                            product but for the result, for the profit of human being. Our main source of
                            inspiration always remains the wellness of the world.
                        </div>
                    </div>

                </div>

                <div class="row" style="padding-top: 50px; padding-bottom: 10px;">
                    <div class="col-md-3">

                        <div class="gem-icon">
                            <svg class="gem__icon-wind" xmlns="http://www.w3.org/2000/svg" width="80" height="54"
                                viewBox="0 0 79.4 53.9">
                                <g fill="none" stroke="#1D1D1F" stroke-width="3" stroke-miterlimit="10">
                                    <path class="wind-1"
                                        d="M57.6,24.3c-0.6-1.2-1-2.6-1-4.1c0-5,4-9,9-9c5,0,9,4,9,9s-4,9-9,9l-61.1,0">
                                    </path>
                                    <path class="wind-2"
                                        d="M42.2,17.4c0-2.7,2.2-4.9,4.9-4.9c2.7,0,4.9,2.2,4.9,4.9s-2.2,4.9-4.9,4.9H9.6">
                                    </path>
                                    <path class="wind-3"
                                        d="M57.9,41.3c0.6,1.2,1.7,2,3.1,2c1.9,0,3.5-1.6,3.5-3.5s-1.6-3.5-3.5-3.5l-46.4,0">
                                    </path>
                                </g>
                            </svg>
                        </div>

                        <div class="gem-text">
                            <p>Space Planning</p>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="gem-icon">
                            <svg class="gem__icon-waves" xmlns="http://www.w3.org/2000/svg" width="80" height="54"
                                viewBox="0 0 79.4 53.9">
                                <g fill="none" stroke="#1D1D1F" stroke-width="3" stroke-linejoin="bevel"
                                    stroke-miterlimit="10">
                                    <path class="wave-1"
                                        d="M19.2,18.1c8.8,0,10.2-7.8,10.2-7.8c0,0,1.4,7.8,10.2,7.8s10.2-7.8,10.2-7.8s1.4,7.8,10.2,7.8">
                                    </path>
                                    <path class="wave-2"
                                        d="M19.2,31.1c8.8,0,10.2-7.8,10.2-7.8c0,0,1.4,7.8,10.2,7.8s10.2-7.8,10.2-7.8s1.4,7.8,10.2,7.8">
                                    </path>
                                    <path class="wave-3"
                                        d="M19.2,44.1c8.8,0,10.2-7.8,10.2-7.8c0,0,1.4,7.8,10.2,7.8s10.2-7.8,10.2-7.8s1.4,7.8,10.2,7.8">
                                    </path>
                                </g>
                            </svg>
                        </div>

                        <div class="gem-text">
                            <p>3D Visualization</p>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="gem-icon">
                            <svg class="gem__icon-leaf" xmlns="http://www.w3.org/2000/svg" width="80" height="54"
                                viewBox="0 0 79.4 53.9">
                                <g fill="none" stroke="#1D1D1F" stroke-width="3" stroke-miterlimit="10">
                                    <polyline class="leaf-left"
                                        points="40.7,3.5 29.2,14.7 34.2,19.2 24.2,28.9 39.7,42.8">
                                    </polyline>
                                    <polyline class="leaf-right"
                                        points="38.7,43.9 55.2,28.9 45.1,19.2 50.2,14.7 39.7,4.6">
                                    </polyline>
                                    <line class="stem-right" x1="39.7" y1="32.8" x2="45.2" y2="27.9"></line>
                                    <line class="stem-left" x1="39.7" y1="32.8" x2="34.1" y2="27.9"></line>
                                    <line class="stem" x1="39.7" y1="22.8" x2="39.7" y2="50.8"></line>
                                </g>
                            </svg>
                        </div>

                        <div class="gem-text">
                            <p>Interior Design</p>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="gem-icon">
                            <img class="img-fluid" src="./assets/img/picostone.jpg" alt="" style="width: 60px;">
                        </div>

                        <div class="gem-text">
                            <p>Home Automation</p>
                        </div>
                    </div>
                </div>
				
				<div class="row my-5">
				<div class="col-md-12 text-black" style="position:relative;border:1px solid rgba(0,0,0,.125);">
					<a href="https://www.instagram.com/eclecticdesigndecor/" target="_blank" style="display: flex;color: black;text-decoration: none;align-content: flex-start;font-size: 1.45rem;font-weight: 600;">#eclecticdesigndecor</a>
					<i class="fab fa-instagram" style="position: absolute;font-size:1.5rem;bottom:4px;right:10px;"></i>
				</div>
				<div class="col-md-12">
				    <div class="insta-images mx-auto">
				<?php
		// Supply a user id and an access token
		$userid = "self";
		$accessToken = "9988719258.e000e4a.d4e91c8994574ad29921ade07333e0e4";
		// Gets our data
		function fetchData($url){
		     $ch = curl_init();
		     curl_setopt($ch, CURLOPT_URL, $url);
		     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		     curl_setopt($ch, CURLOPT_TIMEOUT, 20);
		     $result = curl_exec($ch);
		     curl_close($ch);
		     return $result;
		}
		// Pulls and parses data.
		$result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}");
		#https://api.instagram.com/v1/users/self/media/recent/?access_token=9988719258.e000e4a.d4e91c8994574ad29921ade07333e0e4
		#echo $result;
		$result = json_decode($result);
	?>
	<div class="owl-carousel owl-theme">
	
	

	<?php $count=0; foreach ($result->data as $post): ?>
	<div class="item">
		<!-- Renders images. @Options (thumbnail,low_resoulution, high_resolution) -->
		<a href="https://www.instagram.com/eclecticdesigndecor/" target="_blank"><img class="img-thumbnail insta-img" src="<?= $post->images->standard_resolution->url ?>"></a>
	</div>
		
	<?php $count++;
		if($count==4)
		{
			break;
		} endforeach ?>
	</div>
	</div>
				</div>
			
</div>

            </div>

        </section>

        <section id="testimonials" class="section-gems text-center p-0">
            <div class="container-fluid">
                <div class="row" style="padding-bottom: 40px;">
                    <div class="col-md-12">
                        <div class="gems-text audrey">
                            <h1 style="font-weight: bolder;padding-top: 0px;margin-top: 100px;" class="wow fadeInLeft">T
                                E S T I M O N I A L S
                            </h1>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        <div class="item" style="height: 440px;">
                            <div class="card" style="height:100%;">
                                <div class="card-body" style="background-color:#FFF;padding-top: 110px;">
                                    <h5 style="font-size: 16px;font-weight: 700;">99</h5>
                                    <h4 style="font-size:1.2rem;">I made my home interior with
                                        Eclectic. Their work ethics are commendable. Also, the team's energy is
                                        infectious! They get the work done right on schedule.

                                    </h4>
                                    <h5 style="font-size: 16px;font-weight: 700;">66</h5>
                                    <b>-Ms.Sujatha D'cruz</b>
                                </div>
                                <!-- <div class="card-footer h-100"></div> -->
                            </div>
                        </div>
                        <div class="item" style="height: 440px;">
                            <div class="card" style="height:100%;">
                                <div class="card-body" style="background-color:#FFF;padding-top: 50px;">
                                    <h5 style="font-size: 16px;font-weight: 700;">99</h5>
                                    <h4 style="font-size:1.2rem;">I had started the flooring work
                                        before Mr. Vignesh was appointed as the designer for my home. Since i
                                        wanted professional expertise i sort after his help. I was impressed
                                        with his approach and his suggestions for my home, keeping in mind the
                                        rest of the work that was already completed. I loved his energy and the
                                        output has come out really well.

                                    </h4>
                                    <h5 style="font-size: 16px;font-weight: 700;">66</h5>
                                    <b>-Mr.L.Dhayanidhi</b>
                                </div>
                                <!-- <div class="card-footer h-100"></div> -->
                            </div>
                        </div>
                        <div class="item" style="height: 440px;">
                            <div class="card" style="height:100%;">
                                <div class="card-body" style="background-color:#FFF;padding-top: 100px;">
                                    <h5 style="font-size: 16px;font-weight: 700;">99</h5>
                                    <h4 style="font-size:1.2rem;">I am a contractor. I came to know them through one of
                                        my friends from the same field. I wanted elevation design and interior also for
                                        my construction. They gave a good output design.

                                    </h4>
                                    <h5 style="font-size: 16px;font-weight: 700;">66</h5>
                                    <b>-Mr. Manikandan</b>
                                </div>
                                <!-- <div class="card-footer h-100"></div> -->
                            </div>
                        </div>
                        <div class="item" style="height: 440px;">
                            <div class="card" style="height:100%;">
                                <div class="card-body" style="background-color:#FFF;padding-top: 120px;">
                                    <h5 style="font-size: 16px;font-weight: 700;">99</h5>
                                    <h4 style="font-size:1.2rem;">Good vaasthu suggestions. Vaasthu changes were done for
                                        my home and remedies for that also was suggested. Good.

                                    </h4>
                                    <h5 style="font-size: 16px;font-weight: 700;">66</h5>
                                    <b>-Mrs. Saraswathi Radhakrishnan.</b>
                                </div>
                                <!-- <div class="card-footer h-100"></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
        </section>

        <section id="contact" class="section-hero text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gems-text audrey">
                            <h1 style="font-weight: bolder;padding-top: 0px;margin-top: 100px;" class="wow fadeInLeft">C
                                O N T A C T</h1>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 40px;padding-bottom: 20px;">
                    <div class="col-md-12">
                        <form id="contactForm1" method="post">
                            <div class="form-row" >
                                <div class="form-group col-md-3">

                                    <input type="text" name="cpname" class="form-control" id="inputName" placeholder="Enter Your Name"
                                        required>
                                        <div class="invalid-feedback">
                                            Please enter a valid name
                                            </div>
                                </div>

                                <div class="form-group col-md-3">

                                    <input type="tel" class="form-control" id="inputphone" name="cpphone"
                                        placeholder="Enter Your Phone" required>
                                    <div class="invalid-feedback">
                                            Please enter a valid phone number
                                        </div>
                                </div>

                                <div class="form-group col-md-3">

                                    <input type="email"  class="form-control" id="inputEmail4" name="cpmail"
                                        placeholder="Enter Your Email" required>
                                    <div class="invalid-feedback">
                                    Please enter a valid email address
                                    </div>
                                </div>

                                <div class="form-group col-md-3">

                                    <input type="text"  class="form-control" id="inputMessage" name="cpmailmessage"
                                        placeholder="Enter Your Message" required>
                                </div>
                            </div>
                            <button type="submit" id="submitfrm" class="btn btn-outline-dark">Submit</button>
                        </form>
                    </div>
                </div>

                <div class="row p-1" style="margin-bottom: 50px;">
                    <div class="text-center col-12">
                        <div id="contact-mail">
                            <i class="fas fa-envelope"></i><a href="mailto:eclecticdesigndecor@gmail.com"
                                style="font-size: 1.1rem;padding-left: 10px;text-decoration: none;color: black;">eclecticdesigndecor@gmail.com</a>
                        </div>
                        <div id="contact-phone" style="margin-top: 10px;">
                            <i class="fas fa-phone-alt" style="padding-right: 10px;"></i>
                            <a href="tel:+918939907815" style="text-decoration: none;color: black;">+91
                                    8939907815</a><span>,</span>
                            <a href="tel:+918610556926" style="text-decoration: none;color: black;">+91
                                    8610556926</a>
                            <!-- <span style="color: black;">+91
                                8939907815, &nbsp;+91 8610556926</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>








        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <script src="./assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <!-- </div> -->
    <script src="assets/assets/js/wow.min.js"></script>
    <script src="./assets/assets/js/custom.js"></script>
    <script>
        $(function () {
            var wow = new WOW({
                animateClass: 'animated',
                offset: 100,
                callback: function (box) {
                    //console.log(box.tagName);
                }
            });
            wow.init();
        });
    </script>
    <script>
        function resize() {
            if ($(window).width() < 514) {
                $('html').addClass('mobile');
            }
            else { $('html').removeClass('mobile'); }
        }

        $(document).ready(function () {
            $(window).resize(resize);
            resize();
        });
    </script>
    <script>
        $('.owl-carousel').owlCarousel({
            autoplay: false,
            // autoplayTimeout: 2000,
            autoplayHoverPause: true,
            stagePadding: 0,
            lazyLoad: true,
            items: 4,
            margin: 5,
            loop: false,
            // autoWidth:true,
            dots: false,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    loop: true,
                    dots: true
                },
                485: {
                    items: 2,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    loop: true,
                    dots: true
                },
                728: {
                    items: 3,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    loop: true,
                    dots: true
                },
                960: {
                    items: 4,
                    autoplay: false,
                    dots: false
                },
                1200: {
                    items: 4,
                    autoplay: false,
                    dots: false
                }
            }
        })
    </script>
    <script>
        $('body').scrollspy({ target: '#contnav' });

        // Add smooth scrolling
        $('#contnav a').on('click', function (e) {
            // Check for a hash value
            if (this.hash !== '') {
                // Prevent default behavior
                e.preventDefault();

                // Store hash
                const hash = this.hash;

                // Animate smooth scroll
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function () {
                    // Add hash to URL after scroll
                    window.location.hash = hash;
                });
            }
        });
    </script>
    <script>
        $('body').scrollspy({ target: '#visit' });

        // Add smooth scrolling
        $('#visit').on('click', function (e) {
            // Check for a hash value
            if (this.hash !== '') {
                // Prevent default behavior
                e.preventDefault();

                // Store hash
                const hash = this.hash;

                // Animate smooth scroll
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function () {
                    // Add hash to URL after scroll
                    window.location.hash = hash;
                });
            }
        });
    </script>
	
</body>

</html>