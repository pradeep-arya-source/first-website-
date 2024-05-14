<?php include 'include/header.php'; ?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/vendor/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap-dropdownhover.min.css">

	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css./style.css" />

	<script type="text/javascript" src="js/vendor/modernizr.min.js"></script>

    <title>Contact-us-</title>
</head>

<body>

	<!-- LOAD PAGE -->
	
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	
	<!-- BANNER -->
	<div class="section banner-page" style="background:#29A81D;">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page" style="color: #fff;">Contact</div>
					<div class="breadcrumb-container">
						<ol class="breadcrumb">
							<li><a href="index.php" style="color: #fff;">Home</a></li>
							<li class="active" style="color: #fff;">Contact</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CONTENT -->
	<div class="section contact">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12 col-md-12">
					<!-- MAPS -->
					
				<div class="col-sm-6 col-md-6">
					
					<div class="row">
						<div class="col-sm-10 col-md-10">
							<h2 class="section-heading">
								Contact Details
							</h2>
							<ul class="list-info">
								<li>
									<div class="info-icon">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="info-text">R-3/104 Nawada Housing Complex, Dwarka Mor, New Delhi - 110059</div> </li>
								<li>
									<div class="info-icon">
										<span class="fa fa-phone"></span>
									</div>
									<div class="info-text">+91-9711829786</div>
								</li>
								<li>
									<div class="info-icon">
										<span class="fa fa-envelope"></span>
									</div>
									<div class="info-text">enquiry@euitypro.in</div>
								</li>
								<!-- <li>
									<div class="info-icon">
										<span class="fa fa-clock-o"></span>
									</div>
									<div class="info-text">Mon - Sat 09:00 - 17:00</div>
								</li> -->
							</ul>
							
						</div>
						
						<div class="col-sm-10 col-md-10">
							<p class="pline">Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days.
                            <br>
                            
                        </p>
						</div>
					</div>

				</div>
				<div class="col-sm-6 col-md-6">
					<div class="content">
						<form action="#" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
							<div class="form-group">
								<input type="text" class="form-control" id="name" placeholder="Full Name..." required="">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<input type="phone" class="form-control" id="phone" placeholder="Enter Phone No..." required="">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" placeholder="Enter Email Id...">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								 <textarea id="message" class="form-control" rows="6" placeholder="Write message"></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<div id="success"></div>
								<button type="button" class="btn btn-primary" onclick="sendEmail()">SUBMIT</button>
							</div>
						</form>
						
				</div>

			</div>

			</div>
		</div>
	</div>
		

	<!-- CTA -->
	<div class="section cta section-no-padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="cta-1">
		              	<div class="body-text color_white ">
		                	<h3>Don't hesitate to contact us any time.</h3>
		              	</div>
		              	<div class="body-action">
		                	<a href="#" class="btn btn-secondary">GET A QUOTE</a>
		              	</div>
		            </div>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER SECTION -->
	<?php include 'include/footer.php'; ?>
	
	<!-- JS VENDOR -->
	<script type="text/javascript" src="js/vendor/jquery.min.js"></script>
	<script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery.superslides.js"></script>
	<script type="text/javascript" src="js/vendor/owl.carousel.js"></script>
	<script type="text/javascript" src="js/vendor/bootstrap-dropdownhover.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/vendor/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/vendor/imagesloaded.pkgd.min.js"></script>


	<!-- SENDMAIL -->
	<script src="https://smtpjs.com/v3/smtp.js"></script>
	<script>

	function sendEmail(){

		let name = document.getElementById("name").value;
		let phone = document.getElementById("phone").value;
		let email = document.getElementById("email").value;
		let message = document.getElementById("message").value;

		let body = "Name:" + name +"<br/> Phone:" + phone + "<br/> Email:" + email +"<br/> Message:" + message; 

		console.log(body);
	
		Email.send({
		SecureToken : "7a3c2091-ceb0-4d96-ac84-732c766c3b29",
		To : 'pradeeparya995846@gmail.com',
		From : "pradeeparya995846@gmail.com",
		Subject : "Message From Contact For",
		Body : body
	}).then(
		message => alert(message)
	);
		}

	</script>
		
	
	

	

		
</body>
</html>
