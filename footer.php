<section class="fotr-stripe wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-9 col-xs-12">
					<div class="ques">
					<p>Do you still have a question regarding our products?</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-3 col-xs-12">
					<div class="fotr-stripe-btn">
						<a href="">Contact Us</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="footer-main wrapper pd-40">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="ftr-abt">
						<div class="f-logo">
							<img src="images/f-logo.png">
						</div>
						<div class="ftr-about">
							<p>We provide higher and collaborations for the product and services of our customers and business associates in functions critical to their success. We stand to lead our business through productivity, performance, creativity, technologies and operating practice.</p>
						</div>
						<div class="ftr-social">
							<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fotr">
						<h3>quick link</h3>
						<ul>
							<li><a href=""> <i class="fa fa-angle-right" aria-hidden="true"></i> home</a></li>
							<li><a href=""> <i class="fa fa-angle-right" aria-hidden="true"></i> about us</a></li>
							<li><a href=""> <i class="fa fa-angle-right" aria-hidden="true"></i> services</a></li>
							<li><a href=""> <i class="fa fa-angle-right" aria-hidden="true"></i> products</a></li>
							<li><a href=""> <i class="fa fa-angle-right" aria-hidden="true"></i> contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fotr">
						<h3>get in touch</h3>
						<div class="info">
							<ul>
								<li><img src="images/loc.png"><p>Jasnee Biotech Co. Railway Road,   District Ambala, Barara-133201, Haryana, India</p></li>
								<li><img src="images/call.png"><p><a href=""> +919896576260 , +918950297924 </a></p></li>
								<li><img src="images/f-mail.png"><p><a href="">info@jasnee.com</a></p></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="fotr">
						<h3>our newsletter</h3>
						<div class="ftr-subscribe">
							<p>get newsletter here</p>
							<form id="subscribe-form">
								<input id="subcribe" name="subscriber-name" placeholder="Email Address" type="text">
							<div class="submit-button">
								<button type="submit">subscribe</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="copyright wrapper">
		<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="right">
						<p>Copyrights ©2017. All Rights Reserved.</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-sm-6 col-xs-12">
				<div class="design">
					<h4>Designed by Ayush Singh Dogra.</h4>
				</div>
			</div>
		</div>
	</div>
	</section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<script src="js/menubar.js"></script>
<script type="text/javascript">
	$("#cssmenu").menumaker({
		title: "Menu",
		format: "multitoggle"
	});
</script>

<script src="utilcarousel-files/utilcarousel/jquery.utilcarousel.min.js"></script>
<script src="utilcarousel-files/magnific-popup/jquery.magnific-popup.js"></script>
<script>
			$(function() {
				$('#features-carousel').utilCarousel({
					responsiveMode : 'itemWidthRange',
					itemWidthRange : [260, 300],
					autoPlay : true,
					interval : 3000
				});
				$('#features-carousel1').utilCarousel({
					navigation : false,
					breakPoints : [[1900, 3], [1200, 3], [992, 2], [768, 2], [480, 1]]
				});

				$('#simpleImg').utilCarousel({
					responsiveMode : 'itemWidthRange',
					itemWidthRange : [260, 320]
				});

				$('#team-showcase').utilCarousel({
					responsiveMode : 'itemWidthRange',
					itemWidthRange : [300, 360]
				});

				$('#navtopbox').utilCarousel({
					navigation : true,
					navigationText : ['<i class="icon-left-open-big"></i>', '<i class=" icon-right-open-big"></i>'],
					breakPoints : [[1900, 5], [1200, 4], [992, 3], [768, 2], [480, 1]]
				});

				$('#normal-imglist').utilCarousel({
					pagination : false,
					navigationText : ['<i class="icon-left-open-big"></i>', '<i class=" icon-right-open-big"></i>'],
					navigation : true,
					rewind : false
				});
				$('#normal-imglist2').utilCarousel({
					pagination : false,
					responsiveMode : 'itemWidthRange',
					itemWidthRange : [100, 130],
					navigationText : ['<i class="icon-left-open-big"></i>', '<i class=" icon-right-open-big"></i>'],
					navigation : true,
					rewind : false
				});

				$('#logo-showcase').utilCarousel({
					breakPoints : [[5000, 5], [992, 3], [768, 3], [480, 2] , [320,1]],
					navigationText : ['<i class="icon-left-open-big"></i>', '<i class=" icon-right-open-big"></i>'],
					navigation : false,
					rewind : false,
					autoPlay: true,
					inverval: 3000
					
				});
				$('#logo-showcase-gray').utilCarousel({
					showItems : 5,
					responsiveMode : 'itemWidthRange',
					itemWidthRange : [200, 210],
					interval : 3000,
					autoPlay : true,
					pagination : false
				});

				$('#testimonial').utilCarousel({
					showItems : 1,
					breakPoints : [[1920, 1]],
					autoPlay : true
				});

				$('#fullwidth').utilCarousel({
					breakPoints : [[600, 1], [900, 2], [1200, 3], [1500, 4], [1800, 5]],
					mouseWheel : true,
					rewind : false
				});

				$('#portfolio').utilCarousel({
					breakPoints : [[1200, 6], [992, 3], [768, 2], [480, 1]],
					navigationText : ['<i class="icon-left-open-big"></i>', '<i class=" icon-right-open-big"></i>'],
					navigation : true,
					rewind : false
				});
			});
		</script>


  </body>
</html>