    </div>
	
	<!-- Content End  -->
<?php get_sidebar(); ?>
<!-- Footer -->
	<footer class="site-footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 footer-col-4">
						<div class="widget widget_about">
							<div class="logo-footer"><img src="<?php bloginfo('template_url'); ?>/images/logo-white.png" alt=""></div>
							<p class="m-tb20"><strong>ACME</strong> Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus.  cons ectetur elit. Vestibulum nec odios Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec.</p>
							<ul class="rdx-social-icon border rdx-social-icon-lg">
								<li><a target="_blank" href="https://www.facebook.com/ACME-Learning-2112227632125891/" class="fa fa-facebook fb-btn"></a></li>
								<li><a target="_blank" href="https://twitter.com/acme_learning" class="fa fa-twitter tw-btn"></a></li>
								<li><a target="_blank" href="https://www.instagram.com/acmelearning/" class="fa fa-instagram" style="font-size:44px;color:#d10869;"></a></li>
								<li><a target="_blank" href="https://plus.google.com/u/0/111022261421186555692" class="fa fa-google-plus-square" style="font-size:44px;color:#db4437;"></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 footer-col-4" >
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widgets') ) : ?> 
				<?php endif; ?>
					</div>
					<div class="col-md-4 col-sm-6 footer-col-4">
						<div class="widget widget_getintuch">
							<h4 class="m-b15 text-uppercase">Contact us</h4>
							<div class="rdx-separator bg-primary"></div>
							<ul>
								<li><i class="fa fa-map-marker"></i><strong>Address</strong> ACME Learning Center, No.29, Old Mumbai Hwy, Jayabheri Pine Valley Park, GachiBowli, <br /> Hyderabad Telangana 500032 </li>
								<li><i class="fa fa-phone"></i><strong>Phone</strong>0800-123456 (24/7 Support Line)</li>
								<li><i class="fa fa-fax"></i><strong>Email</strong>acme.learning76@gmail.com</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer bottom part -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-left"> <span>&copy; Copyright 2018</span> </div>
					<div class="col-md-4 text-center"> <span> Design With <i class="fa fa-heart text-red heart"></i> By ACME </span> </div>
					<div class="col-md-4 text-right "> <a href="about-2.html"> About</a> <a href="help.html"> Help Desk</a> <a href="privacy-policy.html"> Privacy Policy</a> </div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up" ></button>
</div>
<!-- JavaScript  files ========================================= -->
<script  src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<!-- jquery.min js -->
<script  src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<!-- bootstrap.min js -->
<script  src="<?php bloginfo('template_url'); ?>/js/bootstrap-select.min.js"></script>
<!-- Form js -->
<script  src="<?php bloginfo('template_url'); ?>/js/jquery.bootstrap-touchspin.js"></script>
<!-- Form js -->
<script  src="<?php bloginfo('template_url'); ?>/js/magnific-popup.js"></script>
<!-- magnific-popup js -->
<script  src="<?php bloginfo('template_url'); ?>/js/waypoints-min.js"></script>
<!-- waypoints js -->
<script  src="<?php bloginfo('template_url'); ?>/js/counterup.min.js"></script>
<!-- counterup js -->
<script src="<?php bloginfo('template_url'); ?>/js/imagesloaded.js"></script>
<!-- masonry  -->
<script src="<?php bloginfo('template_url'); ?>/js/masonry-3.1.4.js"></script>
<!-- masonry  -->
<script src="<?php bloginfo('template_url'); ?>/js/masonry.filter.js"></script>
<!-- masonry  -->
<script  src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js"></script>
<!-- OWL  Slider  -->
<script  src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
<!-- custom fuctions  -->
<script  src="<?php bloginfo('template_url'); ?>/js/dz.ajax.js"></script>
<!-- dz ajax js -->
<script  src="<?php bloginfo('template_url'); ?>/js/dz.carousel.js"></script>
<!-- sortcode fuctions  -->

<!-- revolution JS FILES -->
<script src="<?php bloginfo('template_url'); ?>/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="<?php bloginfo('template_url'); ?>/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/rev.slider.js"></script>
<script>
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_1();
});	/*ready*/
</script>


</body>
</html>