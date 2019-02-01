<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rutulshah
 */

?>
	<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<!-- Get Page Title -->
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							</header>
						</div>
					</section>


	<?php rutulshah_post_thumbnail(); ?>

	<div class="row" style="padding: 50px 0;">
		<div class="col col-lg-2 col-xs-12">&nbsp;</div>
		<div class="col col-lg-8 col-xs-12">
		<?php the_content(); ?>
		</div>
		<div class="col col-lg-2 col-xs-12">&nbsp;</div>
	</div>
