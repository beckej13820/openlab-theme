<?php
/**
 * front page
 *
 * Note to themers: home-right appears before home-left in this template file,
 * to make responsive styling easier
 */
get_header();
?>

<h1 class="site-title sr-only"><?php bloginfo( 'name' ); ?></h1>

<div id="openlab-main-content" class="clearfix row-home-top<?php echo get_theme_mod( 'slider_arrows', 0 ) ? ' has-slider-arrows' : ''; ?>" role="main">
	<div class="login">
		<div id="cuny_openlab_jump_start">
			<?php get_template_part( 'parts/home/login' ); ?>
		</div>
	</div>
	<div class="slider">
		<?php // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		<?php echo openlab_get_home_slider(); ?>
	</div>

</div>
<div class="row row-home-bottom" role="complementary">
	<div id="home-left" class="col-sm-8">
		<?php dynamic_sidebar( 'home-sidebar' ); ?>
	</div>

	<div id="home-right" class="col-sm-16">
		<div id="home-group-list-wrapper" class="row">

		<?php dynamic_sidebar( 'home-main' ); ?>

		<div class="clearfloat"></div>

		<script type='text/javascript'>(function ($) {
		$('.activity-list').css('visibility', 'hidden');
		$('#home-new-member-wrap').css('visibility', 'hidden');
		})(jQuery);</script>
		</div>
	</div>
</div>

<?php
get_footer();

