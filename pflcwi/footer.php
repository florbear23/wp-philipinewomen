	<div class="clear"></div>
	<?php
		if ( is_front_page() ):
			echo "<!------ Remove Container ------>";
		else:
			echo '</div><!-- .container /-->';
		endif
	?>

<?php tie_banner('banner_bottom' , '<div class="e3lan e3lan-bottom">' , '</div>' ); ?>

<?php get_sidebar( 'footer' ); ?>				





<section class="newsletter">
		<div class="container">
			<h2>Get the latest news and events updates of PFCLW by joining our newsletter!</h2>
			<?= do_shortcode('[contact-form-7 id="36" title="news letter"]') ?>
		</div>
</section>
<?= do_shortcode('[footerMap]') ?>
<?= do_shortcode('[mainFooter]') ?>

<!-- .Footer bottom -->

</div><!-- .inner-Wrapper -->
</div><!-- #Wrapper -->
</div><!-- .Wrapper-outer -->
<?php if( tie_get_option('footer_top') ): ?>
	<div id="topcontrol" class="fa fa-angle-up" title="<?php _eti( 'Scroll To Top' ); ?>"></div>
<?php endif; ?>
<div id="fb-root"></div>
<?php wp_footer();?>

<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/third-party/slick-1.5.9/slick/slick.min.js"></script>
</body>

<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#section-banner').slick ({
			arrows: false,
			dots: true,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: false,
			fade: true,
			autoplaySpeed: 5000,
		});
	});

	jQuery(document).ready(function(){
		jQuery('.bannerContainer').slick ({
			arrows: false,
			dots: false,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: false,
			fade: false,
			autoplaySpeed: 5000,
		});
	});

	jQuery(document).ready(function(){
		jQuery('.slider3Content').slick ({
			arrows: false,
			dots: true,
			infinite: true,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 3,
			autoplay: false,
			fade: false,
			autoplaySpeed: 5000,
			responsive: [
				{
				breakpoint: 768,
				settings: {
					arrows: false,
					slidesToShow: 2
				}
				},
				{
				breakpoint: 480,
				settings: {
					arrows: false,
					slidesToShow: 1
				}
				}
			]
		});
	});

	jQuery(document).ready(function(){
		jQuery('.mainSlider002').slick ({
			centerMode: true,
			centerPadding: '200px',
			slidesToShow: 3,
			slidesToScroll: 1,
			autoplay: true,
  			autoplaySpeed: 2000,
			responsive: [
			
				{
				breakpoint: 768,
				settings: {
					arrows: false,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 3
				}
				},
				{
				breakpoint: 480,
				settings: {
					arrows: false,
					centerMode: true,
					centerPadding: '40px',
					slidesToShow: 1
				}
				}
			]
		});
	});





	var accordions = document.querySelectorAll("button.accordion");

	for (var i = 0; i < accordions.length; i++) {
	accordions[i].onclick = function() {
		this.classList.toggle("active");
		this.nextElementSibling.classList.toggle("show");
		hideAll(this);
	};
	}

	function hideAll(exceptThis) {
	for (var i = 0; i < accordions.length; i++) {
		if (accordions[i] !== exceptThis) {
		accordions[i].classList.remove("active");
		accordions[i].nextElementSibling.classList.remove("show");
		}
	}
	}

	var accordionsInner = document.querySelectorAll("button.accordion-inner");

	for (var n = 0; n < accordionsInner.length; n++) {
	accordionsInner[n].onclick = function() {
		this.classList.toggle("active");
		this.nextElementSibling.classList.toggle("show");
		hideAllinner(this);
	};
	}

	function hideAllinner(exceptThis) {
	for (var n = 0; n < accordionsInner.length; n++) {
		if (accordionsInner[n] !== exceptThis) {
		accordionsInner[n].classList.remove("active");
		accordionsInner[n].nextElementSibling.classList.remove("show");
		}
	}
	}






</script>

</html>