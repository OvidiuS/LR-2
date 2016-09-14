<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" >
<head>
<?php require('includes/head.inc') ?>
</head>

<body>	

<?php require("includes/header.inc") ?>

<div class="section voucher-bar">
	<a class="voucher-link" href="new-user/find-a-location.html">Get 25% off your first order!</a>
</div>

<div class="section hero-section">
	<div class="wide-container">
		<div class="row">
			<div class="w-col w-col-6 hero-left-column">
				<div class="hero-login-wrapper">

					<h1>Freedom from dry cleaning and laundry is one step away</h1>
					<div class="form-wrapper">
						<form action="/" class="login-form loginVisibility" data-name="Login Form" id="login-form" name="login-form" method="post">
							<input type="hidden" name="action" id="loginAction" value="laundryRepublic/customers/login" />
							<input type="hidden" name="redirect" id="redirect" value="customer-home" />

							<label class="hero-login-label" for="email-3">Email Address:</label>
							<input class="w-input login-field loginEmail" data-name="Email" id="loginEmail" maxlength="256" name="email" placeholder="Enter your email address" required="required" type="email">

							<label class="hero-login-label" for="password-3">Password:</label>
							<input class="w-input login-field last" data-name="Password 3" id="password" maxlength="256" name="password" placeholder="password" required="required" type="password">

							<input class="button hero-login-btn login" data-wait="Please wait..." type="submit" name="loginButton" value="Login" />
							<input class="button hero-login-btn hidden reset" data-wait="Please wait..." type="submit" name="resetButton" value="Request password reset email" />
						</form>

						<form action="/confirm-location" class="w-clearfix new-client-form signupVisibility visible" data-name="Signup Form" id="signup-form" name="signup-form" method="post">
							<input type="hidden" name="action" value="laundryRepublic/customers/location" />
							<input type="hidden" name="redirect" value="confirm-location" />

							<label class="hero-login-label" for="postcode">Postcode:</label>
							<input class="w-input login-field postal-code" data-name="postcode" id="postcode" maxlength="256" name="postcode" placeholder="your full postcode" required="required" type="text">

							<input class="button hero-new-client-btn" data-wait="Please wait..." type="submit" value="Get started">
						</form>
					</div>


					<div class="login-divider signupVisibility visible">
						<div class="blue-line"></div>
						<div class="login-or">already have an account?</div>
						<div class="blue-line"></div>
					</div>

					<div class="hero-login-button-wrapper signupVisibility visible">
						<a class="button login" href="#">Login</a>
						<a href="#" class="resetPassword lrLink">I forgot my password</a>
					</div>


					<div class="login-divider loginVisibility">
						<div class="blue-line"></div>
						<div class="login-or">No account yet?</div>
						<div class="blue-line"></div>
					</div>

					<div class="hero-login-button-wrapper loginVisibility">
						<a class="button signup" href="#">Sign-up now</a>
						<a href="#" class="resetPassword lrLink" >I forgot my password</a> <a href="#" class="loginLink lrLink hidden">I remember my password</a>
					</div>
					<script>
						// Switch to sign-up form
						$("a.signup").click(function() {
							$("a.loginLink").click();
							$(".loginVisibility").removeClass("visible");
							$(".signupVisibility").addClass("visible");
						});
						
						// Switch to login form
						$("a.login").click(function() {
							$(".loginVisibility").addClass("visible");
							$(".signupVisibility").removeClass("visible");
						});
						
						// Switch to reset password form
						$("a.resetPassword").click(function() {
							$("#loginAction").val("laundryRepublic/customers/resetPasswordLink");
							$("#redirect").val("/?login=true");
							$("a.login").click();
							$(".loginEmail").addClass("last");
							
							$("#password").addClass("hidden");
							$("#password").removeAttr("name");
							
							$("input.login").addClass("hidden");
							$("input.reset").removeClass("hidden");
							$(".loginLink").removeClass("hidden");
							$(".resetPassword").addClass("hidden");
						});
						
						// Switch from reset password to login form
						$("a.loginLink").click(function() {
							$("#loginAction").val("laundryRepublic/customers/login");
							$("#redirect").val("customer-home");
							$("#password").val("");
							$("a.login").click();
							$(".loginEmail").removeClass("last");
							$("#password").removeClass("hidden");
							$("#password").attr("name", "password");
							
							$("input.login").removeClass("hidden");
							$("input.reset").addClass("hidden");
							$(".loginLink").addClass("hidden");
							$(".resetPassword").removeClass("hidden");
						});		
					</script>
				</div>
				<!-- /.hero-login-heading -->
			</div>
			<!-- /.w-col w-col-6 hero-left-column -->


			<div class="w-col w-col-6 hero-right-column">
				<h1>Laundry Republic</h1>
				<ul class="hero-list">
					<li>Secure drop points in your building</li>
					<li>On demand (no&nbsp;delivery slots)</li>
					<li>Five-star reviews</li>
					<li>Free delivery (next day option)</li>
					<li>Secure drop points in your building</li>
					<li>Better for the environment</li>
				</ul>
			</div>
			<!-- /.w-col w-col-6 hero-right-column -->

		</div>
	</div>
	<!-- /.wide-container -->
</div>
<!-- /.section hero-section -->

<div class="section homepage-press">
	<div class="wide-container press">
		<img class="press-evening-standard" src="images/eb45c0_f89a85665fa64ec0b9267a4933e931d6.png">
		<div class="press-customer-ratings">Over 2,000 five-star customer&nbsp;ratings</div>
		<img class="press-evening-standard" src="images/eb45c0_406eed3cb96a4afaa64ced9eddc9c706.png">
		<div class="million">1m+ garments cleaned</div>
	</div>
</div>

<div class="section content-section" id="how-it-works">
	<div class="wide-container">

		<h1 class="centered">How It Works</h1>
		<div class="row how-it-works-graphic-wrapper">
			<div class="w-col w-col-4">
				<div class="how-it-works-step-wrapper">
					<h2 class="how-it-works-step-title">1. Drop Off</h2><img class="how-it-works-image drop-off" src="images/drop-off-icon.png">
					<p class="how-it-works-step-text">Leave your clothes at one of our secure&nbsp;drop points</p>

				</div>
			</div>
			<div class="w-col w-col-4">
				<div class="how-it-works-step-wrapper">
					<h2 class="how-it-works-step-title">2. Order</h2><img class="how-it-works-image order" src="images/order-icon.png">
					<p class="how-it-works-step-text">Place your order in seconds, online or via the app</p>

				</div>
			</div>
			<div class="w-col w-col-4">
				<div class="how-it-works-step-wrapper">
					<h2 class="how-it-works-step-title">3. Pick Up</h2><img class="how-it-works-image" src="images/collect-icon.png">
					<p class="how-it-works-step-text">We'll tell you when your clean clothes have been returned</p>

				</div>
			</div>
		</div>	  
	</div>
	
	<div class="section content-section blueBG" id="sendAppLink">
		<div class="wide-container inner clearfix">
			<h1>Get the APP</h1>
			
			<div class="getAppSection">
				<div class="downloadLogos flexChild">
					<a href="" class="downloadLogo" ><img src="/resources/img/download-app-store.png" alt="Download app in Apple app store" /></a>
					<a href="" class="downloadLogo" ><img src="/resources/img/download-google-play.png" alt="Download app in Google Play" /></a>
				</div>
				
				<div class="sendLinkForm flexChild">
					<form action="" method="post" id="sendAppLink">
						
						<input type="hidden" name="action" value="laundryRepublic/customers/sendSMS" />
						<input type="hidden" name="redirect" value="customer-home" />
						
						<input type="text" placeholder="Mobile number" name="mobileNumber" id="mobileNumber" class="w-input" />
						<button type="submit" class="button">Request link</button>

					</form>
				</div>
				
				<div class="linkSentMessage flexChild hidden">
					SMS sent to your phone!
				</div>
			</div>
			
			
		</div>
	</div>
	
	<div class="section content-section darkBlue" id="testimonials">
		<div class="wide-container clearfix">

			<h1>What our lovely customers say</h1>

			<div class="testimonial col-3-1">
				<img src="/resources/img/quote.png" />
				<div class="body">This is a great service you offer. Keep going!</div>
				<div class="name">- David, SW12</div>
			</div>
			<!-- /.testimonial col-3-1 -->

			<div class="testimonial col-3-1">
				<img src="/resources/img/quote.png" />
				<div class="body">I&#039;m a testimonial. Double click here or click Edit Text to add some positive feedback about your services.</div>
				<div class="name">- Marco, Plumstead</div>
			</div>

		</div>
	</div>
	
	<div class="section content-section ">
		<div class="wide-container deals">
			<h1>Our Prices</h1>
			<h2>Deals</h2>
			<table>
				<tr>
					<td>2 Suits Deal</td>
					<td class="standardPrice">£24.00</td>
					<td class="dealPrice" >£20.00</td>
					<td class="dealSave">(save 17%)</td>
				</tr>
				<tr>
					<td>10 Shirts Deal (men&#039;s)</td>
					<td class="standardPrice">£27.00</td>
					<td class="dealPrice" >£20.00</td>
					<td class="dealSave">(save 26%)</td>
				</tr>
				<tr>
					<td>5 Shirts Deal (men&#039;s)</td>
					<td class="standardPrice">£13.50</td>
					<td class="dealPrice" >£11.00</td>
					<td class="dealSave">(save 19%)</td>
				</tr>
				<tr>
					<td>10 Blouses Deal</td>
					<td class="standardPrice">£40.00</td>
					<td class="dealPrice" >£25.00</td>
					<td class="dealSave">(save 38%)</td>
				</tr>
				<tr>
					<td>5 Blouses Deal</td>
					<td class="standardPrice">£20.00</td>
					<td class="dealPrice" >£15.00</td>
					<td class="dealSave">(save 25%)</td>
				</tr>
				<tr>
					<td>Double Bed Deal</td>
					<td class="standardPrice">£20.00</td>
					<td class="dealPrice" >£17.00</td>
					<td class="dealSave">(save 15%)</td>
				</tr>
			</table> 
			<a href="/prices.php" class="button" >view all prices ...</a>
		</div>
		<!-- /.wide-container deals -->
	</div>
	<!-- /.section content-section -->
</div>
<!-- /.section content-section #how-it-works -->


<div class="section footer-section">
	<div class="wide-container">
		<div class="row">
			<div class="w-col w-col-6 footer-column-1">
				<div class="row footer-nav">
					<div class="w-col w-col-6 w-col-small-6 footer-menu-column-1 footer-menu-list">
						<ul class="">
							<li><a href="http://craft.laundryrepublic.dev/sustainable-garment-care-1" title="Sustainable garment care">Sustainable garment care</a></li>
							<li><a href="http://craft.laundryrepublic.dev/customer-satisfaction-guarantee" title="Customer Satisfaction Guarantee">Customer Satisfaction Guarantee</a></li>
							<li><a href="http://craft.laundryrepublic.dev/faqs/how-do-i-pay-for-my-order" title="FAQ">FAQ</a></li>
							<li><a href="http://craft.laundryrepublic.dev/jobs" title="Work at Laundry Republic">Work at Laundry Republic</a></li>
							<li><a href="http://craft.laundryrepublic.dev/customer-signup" title="Signup">Signup</a></li>
						</ul>
					</div>
				</div>
				<!-- /.row .footer-nav -->
			</div>
			<!-- /.wcol .wcol-6 .footer-column-1 -->

			<div class="w-col w-col-6 footer-column-2">
				<a class="w-inline-block footer-social-link" href="https://www.facebook.com/" target="_blank"><img src="/images/facebppk.png">
				</a>
				<a class="w-inline-block footer-social-link" href="https://www.facebook.com/" target="_blank"><img src="/images/twitter.png">
				</a>
				<a class="w-inline-block footer-social-link" href="https://www.facebook.com/" target="_blank"><img src="/images/youtube.png">
				</a>
				<div class="cleardiv"></div><a class="footer-link contact-email phone" href="tel:020 7193 3130">020 7193 3130</a>
				<div class="cleardiv"></div><a class="footer-link contact-email" href="mailto:contactus@laundryrepublic.dev">contactus@laundryrepublic.dev</a>
			</div>
			<!-- /.wcol .wcol-6 .footer-column-2 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.wide-container -->
</div>
<!-- /.footer-section -->
  
<script>
	$(document).ready(function() {
		$("#sendAppLink").submit(function() {
			var data = {};
			data.action = "laundryRepublic/customers/sendSMS";
			data.redirect = "customer-home";
			data.mobileNumber = $("#mobileNumber").val();

			$.ajax({
				method: "POST",
				url: "/customer-home",
				data: data,
				dataType: 'json',
				accepts: {
					xml: 'text/xml',
					text: 'text/plain'
				}
			}).done(function( data ) {
				console.log(data);

							// Hide form only on successful send
							if(data.result == "OK") {
								$(".sendLinkForm").addClass("hidden");
								$(".linkSentMessage").removeClass("hidden");
							}
							
							
							toastr["info"](data.message);
						});
			return false;
		});
	});

</script>


	<script>
		$(document).ready(function() {
			$("a.signup").click(function() {
				$(".loginVisibility").removeClass("visible");
				$(".signupVisibility").addClass("visible");
			});
			
			$("a.login").click(function() {
				$(".loginVisibility").addClass("visible");
				$(".signupVisibility").removeClass("visible");
			});
			
					});
	</script>
	''
</body>
</html>

