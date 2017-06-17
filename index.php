<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
		<title>DigitalInc - Solutions for Future.</title>
                <link rel="stylesheet" href=" css/style.css" type="text/css" media="screen">
		<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="css/jcarousel.css" />
		<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
                <link rel="shortcut icon" href="images/Digital_Inc_Icon.ico">

		<script src="js/jquery.min.js"></script>
		<script src="js/bootbox.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
		<script src="js/jquery.sticky.js"></script>
		<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
		<script type="text/javascript" src="js/js.js"></script>
		<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
		<script type="text/javascript" src="js/waypoints.min.js"></script>

		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.src.js"></script>
		<![endif]-->
		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] ||
				function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o), m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

			ga('create', 'UA-53565919-2', 'auto');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');

		</script>
		<script type="text/javascript">
		$(document).ready(function(){
			$("#ajax-contact-form").submit(function() {
				
			if( $('input[name="name"]').val() == "" ||
			  $('input[name="email"]').val() == "" || 
			  $('input[name="message"]').val() == "" )
			{
				$('input[name="name"]').css('border','solid 2px red');
				$('input[name="email"]').css('border','solid 2px red');
				$('textarea[name="message"]').css('border','solid 2px red');
				
			}
			else
			{
				var str = $(this).serialize();
				$.ajax({
				type: "POST",
				async : false,
				url: "/MailContactUs.php",
				data: str,
				success: function(msg) {
					// Message Sent - Show the 'Thank You' message and hide the form
					if(msg == '1') {
					result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
					$("#fields").hide();
					} else {
					result = '<div class="notification_ok">'+ msg +'</div>';
					}
					$('#note').html(result);
					}
				});
			}
				return false;
			});
		});
		</script>

	</head>

	<body>

		<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
			<div class="effect_2">
				<div class="container clearfix">

					<div id="content" class="grid_12">
						<div class="filtr_bg">
							<h1>Quality, The way 2 Success</h1>
							<div class="slogan">
								<div class="left_bord"></div>
								<div class="slogan_text">
									Few Product developers
								</div>
								<div class="right_bord"></div>
							</div>
							<a class="button" title="" data-slide="6"></a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="inset_shadow"></div>
			</div>
		</div>

		<div class="menu">
			<div class="container clearfix">

				<div id="logo">
                                    <a href="index.php"><img src="images/Main_Logo.png"/></a>
				</div>

				<div id="nav">
					<a class="btn_dropdown" data-toggle="collapse" data-target=".nav-collapse_">MENU</a>
					<ul class="navigation">
						<li data-slide="1">
							Home
						</li>
						<li data-slide="6">
							Meet the team
						</li>
						<li data-slide="8">
							Products
						</li>
						<li data-slide="10">
							Contact Us
						</li>
						<div class="clear"></div>
					</ul>
				</div>

			</div>
		</div>

		<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
			<div class="effect_2 padding_slide3">
				<div class="container clearfix">

					<div class="slide_descr">
						<img src="images/slide_icon.png" />
						<h3>You have to dream before your dreams can come true.</h3>
						<div class="author">
							<div class="author_bord"></div>
							<span>A.P.J Abdul Kalam</span>
							<div class="author_bord"></div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- <div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0.5">
		<div class="effect_2 padding_slide5">
		<div class="container clearfix">

		<div class="slide_descr">
		<img src="images/slide_icon.png" />
		<h3>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla sed arcu</h3>
		<div class="author">
		<div class="author_bord"></div>
		<span>Amira Guion</span>
		<div class="author_bord"></div>
		</div>
		</div>

		</div>
		</div>
		</div> -->

		<div class="slide" id="slide6" data-slide="6" data-stellar-background-ratio="0.5">
			<div class="container clearfix">

				<div id="content" class="grid_12">
					<div class="title">
						<div class="left_bord2"></div>
						<h1>Meet our team</h1>
						<div class="right_bord2"></div>
					</div>
				</div>

				<div class="clear"></div>

				<div id="contenet" class="">
					<div class="team_block">
						<div class="team3">
							<div class="team_foto3">
								<img src="/images/Ganesh.jpg" alt="" />
								<!--<div class="team_descr">
									<a class="team_soc1" href="javascript:void(0);"></a>
									<a class="team_soc2" href="javascript:void(0);"></a>
								</div>-->
							</div>
							<p>
								Ganesh Subramaniyam
							</p>
							Product Designer/Developer
							<div class="team_contact">
								<div class="team_contact_icon"><img src="images/contact_icon.png" />
								</div>
								<a href="mailto:ganeshsubramaniyamv@gmail.com" target="_top">Contact</a>
							</div>
						</div>
					</div>

					<div class="team_block">
						<div class="team3">
							<div class="team_foto3">
								<img src="/images/Marudhu.jpg" alt="" />
								<!--<div class="team_descr">
									<a class="team_soc1" href="javascript:void(0);"></a><a class="team_soc2" href="javascript:void(0);"></a>
								</div>-->
							</div>
							<p>
								Marudhu Pandiyan G
							</p>
							Product Designer/Developer
							<div class="team_contact">
								<div class="team_contact_icon"><img src="images/contact_icon.png" />
								</div>
								<a href="mailto:marudhupandiyang@gmail.com" target="_top">Contact</a>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>

		</div>
		</div>

		<div class="slide" id="slide7" data-slide="7" data-stellar-background-ratio="0.5">
			<div class="effect_2 padding_slide3">
				<div class="container clearfix">

					<div class="slide_descr2">
						<img src="images/slide_icon.png" />
						<h3>Achieving Goal will Start, Once we have a correct vision towards it...!</h3>
						<div class="author">
							<div class="author_bord"></div>
							<span>Ganesh Subramaniyam</span>
							<div class="author_bord"></div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="slide" id="slide8" data-slide="8" data-stellar-background-ratio="0.5">
			<div class="container clearfix">

				<div id="content" class="grid_12">
					<div class="title">
						<div class="left_bord2"></div>
						<h1>Products</h1>
						<div class="right_bord2"></div>
					</div>
				</div>
				<div class="clear"></div>

				<div id="contenet">
					<div class="gallery-list">
						<!-- portfolio_block -->
						<div>
							<div class="products">
								<div class="productimg">										
									<img class="portf_img" src="images/product1.jpg" alt=""  />
								</div>
								<div class="productcontent">
									<div class="producttitle">
											PayGuest for Bangalore
									</div>
									<div class="productdesc">
										<p>
											Payguest is the place to find all the paying guest in bangalore. Pay guest are more popular since they are cheap and affordable and resembles hostels.Suited for working professionals.
										</p>
										<div class="sitelink">
										<a href='//www.payguest.in' target="_blank">Visit Site...</a>
										</div>
									</div>
								</div>
							</div>
							<div class="products">
								<div class="productimg">										
									<img class="portf_img" src="images/product2.jpg" alt=""  />
								</div>
								<div class="productcontent">
									<div class="producttitle">
											Placement Preparation
									</div>
									<div class="productdesc">
										<p>
											The PlacementPreparation is a WebApp which allows to prepare for the company placement interviews by taking the neccessary trainings and tutorials for the interviews.
										</p>
										<div class="sitelink">
										<a href='//www.placementpreparation.in' target="_blank">Visit Site...</a>
										</div>
									</div>
								</div>
							</div>
							<div class="products">
								<div class="productimg">										
                                                                    <img class="portf_img" src="images/Filmboard_logo.jpg" alt=""  />
								</div>
								<div class="productcontent">
									<div class="producttitle">
											Film Board
									</div>
									<div class="productdesc">
										<p>
											The FilmBoard is social based application exclusively going to be built for the Flim Industry and bumped with full of music,videos and Radios.
										</p>
										<div class="sitelink">
                                                                                    <a href='//www.filmboard.in' target="_blank">Visit Site...</a>
										</div>
									</div>
								</div>
							</div>
                                                        <div class="products">
								<div class="productimg">										
									<img class="portf_img" src="images/product4.jpg" alt=""  />
								</div>
								<div class="productcontent">
									<div class="producttitle">
											Corp Confession
									</div>
									<div class="productdesc">
										<p>
											The Corp Confession is a blogger for the users to confess or share their experience in IT to the other people across the Globe.
										</p>
										<div class="sitelink">
										<!--<a href='//http://www.corpconfession.in' target="_blank">Visit Site...</a>--> In Maintenance Work.
										</div>
									</div>
								</div>
							</div>
							<h4>Products in R & D ...</h4>
							<br />
                                                        <div class="products">
								<div class="productimg">										
                                                                    <img class="portf_img" src="images/coming_soon.gif" alt=""  />
								</div>
								<div class="productcontent">
									<div class="producttitle">
											Samay
									</div>
									<div class="productdesc">
										<p>
											Samay is an android application that shows weather in the current location. Temperature is showed in celsius, Fahrenheit and Kelvin Scale.
										</p>
										<div class="sitelink">
                                                                                    In Research & Progress..
										</div>
									</div>
								</div>
							</div>
							
							<div class="products">
								<div class="productimg">										
									<img class="portf_img" src="images/coming_soon.gif" alt=""  />
								</div>
								<div class="productcontent">
									<div class="producttitle">
											Metro Transport
									</div>
									<div class="productdesc">
										<p>
											The Metro Transport is a Android Application to be built for the users to know about the metropolitan road transports bus routes and timings.
										</p>
										<div class="sitelink">
										In Research & Progress..
										</div>
									</div>
								</div>
							</div>
							
							<div class="products">
								<div class="productimg">										
									<img class="portf_img" src="images/coming_soon.gif" alt=""  />
								</div>
								<div class="productcontent">
									<div class="producttitle">
											TechnoTurn
									</div>
									<div class="productdesc">
										<p>
											The TechnoTurn is desktop Application built on the .net Framework to write and compile the Java Programs using Java Development kit.
										</p>
										<div class="sitelink">
										In Research & Progress..
										</div>
									</div>
								</div>
							</div>
						<div class="clear"></div>
						</div>
						<!-- //portfolio_block -->
					</div>
				</div>

			</div>
		</div>

		<div class="slide" id="slide9" data-slide="9" data-stellar-background-ratio="0.5">
			<div class="effect_2 padding_slide9">
				<div class="container clearfix">

					<div class="slide_descr3">
						<img src="images/slide_icon.png" />
						<h3>The team one builds is the team that wins.Build a winning team</h3>
						<div class="author">
							<div class="author_bord"></div>
							<span>Marudhu Pandiyan G</span>
							<div class="author_bord"></div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="slide" id="slide10" data-slide="10" data-stellar-background-ratio="0.5">
			<div class="container clearfix">

				<div id="content" class="grid_12">
					<div class="title">
						<div class="left_bord2"></div>
						<h1>Contact</h1>
						<div class="right_bord2"></div>
					</div>
				</div>
				<!--    <div class="clear"></div> -->

				<div class="grid_12">
					<p style='text-indent: 50px'>
						We welcome your Feedback about our products or Group. Incase of any reports about our products we will get in touch with you with 8 to 12 hrs from the Report Submission.
					</p>
					<div class="contact_form">
						<div id="note"></div>
						<div id="fields">
							<form id="ajax-contact-form" action="" method="">
								<div class="grid_6">
									<input type="text" name="name" value="" placeholder="Name" />
									<!-- <input type="text" name="subject" value="" placeholder="Phone" /> -->
									<input type="text" name="email" value="" placeholder="Email" />
									<img src="captcha.php" class="captchaimg" />

								</div>
								<div class="grid_6 omega">
									<textarea name="message" id="message" placeholder="Message"></textarea>
									<input type="text" name="captcha" value="" placeholder="Captcha Code" />
								</div>
								<div class="clear"></div>
								<!-- <input type="reset" class="contact_btn" value="Clear Form" /> -->
								<input type="submit" class="contact_btn send_btn" value="Send" />
								<div class="clear"></div>
								<br />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="footer">
			<div class="container clearfix">
				<div class="copyright">
					DigitalInc &copy; 2020 | <a id="privacypolicy" href="#">Privacy Policy</a>
				</div>
				<div id="back_top">
					<a class="button" title="" data-slide="1"></a>
				</div>
			</div>
		</div>

	</body>
</html>



