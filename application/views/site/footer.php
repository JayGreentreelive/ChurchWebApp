
	<div style="height: 30px; clear: both"></div>
	</div>
<script src="<?php echo base_url(); ?>assets/js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>

<!-- //agents section -->

<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h5><i class="fa fa-phone" aria-hidden="true"></i>+234 8033 8941 77</h5>
			<h5><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="#">banquethouse,com</a></h5>
			<p>Lorem ipsum dolor sit amet, consect etur adipiscing elit. Maec enas quis neque libero.</p>
		</div>
		<div class="col-md-6 footer-center">
		<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a  href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-right">
			<h5><i class="fa fa-home" aria-hidden="true"></i>Address</h5>
			<p>160,okigwe Road</p>
			<p>by Calabar Street, Aba, Abia State, Nigeria</p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //footer -->
<!-- copyright -->
<div class="copyright-agile">
	<p>&copy; 2017 The Banquet House. All rights reserved | Design by <a href="#">Knowvees</a></p>
</div>
<!-- //copyright -->

<!-- modal --><!-- for pop up -->
<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="span2" aria-hidden="true">&times;</span></button>						
				<h4 class="modal-title"> Medical Care </h4>
			</div> 
		<div class="modal-body">
			<div class="agileits-w3layouts-info">
				<img src="<?php echo base_url(); ?>assets/images/11.jpg" alt="" />
				<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem.</p>
			</div>
		</div>
		</div>
	</div>
</div>
<!-- //modal --><!-- //for pop up -->

<!-- OnScroll-Number-Increase-JavaScript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/numscroller-1.0.js"></script>
<!-- //OnScroll-Number-Increase-JavaScript -->

		
<!-- for testimonials slider-js-script-->

	<!-- for testimonials slider-js-file-->
			<script src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>
	<!-- //for testimonials slider-js-file-->
		<script>
		$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
 
			autoPlay: 3000, //Set AutoPlay to 3 seconds
			autoPlay:true,
			items : 3,
			itemsDesktop : [640,5],
			itemsDesktopSmall : [414,4]
		});
		}); 
</script>
<!-- for testimonials slider-js-script-->


<script src="<?php echo base_url(); ?>assets/js/jarallax.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>
	
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->

<!-- pop-up-box -->
		<script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});														
			});
		</script>
	<!--//pop-up-box -->
	
<!-- requried-jsfiles-for owl --><!-- for banner slider -->
		 <script src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>
			<script>
			 $(document).ready(function() {
					$("#owl-demo").owlCarousel({
						 items : 4,
						 lazyLoad : true,
						 autoPlay : true,
							navigation : true,
							navigationText :  true,
							pagination : false,
							});
				});
			</script>
<!-- //requried-jsfiles-for owl -->	<!-- //for banner slider -->
	
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


</body>
</html>