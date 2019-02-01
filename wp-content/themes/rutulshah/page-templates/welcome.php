<?php
/*
 Template Name: Welcome Page
 */

get_header();
?>

<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<!-- Get Page Title -->
								<h1><?php the_title(); ?></h1>
							</header>
							<div class="content">
								<?php //Get Page Content
									while ( have_posts() ) : the_post(); 
										the_content();
    								endwhile; 
								wp_reset_query(); ?>
							</div>
						</div>
					</section>

	<div id="main" class="site-content">

<div class="row">
	<div class="col col-lg-9 col-xs-12">


		<section id="one" class="tiles">
			<?php

			// The Query
			$the_query = new WP_Query( array( 'author_name' => 'rshah' ) );

			// The Loop
			if ( $the_query->have_posts() ) {

				while ( $the_query->have_posts() ) {
					$the_query->the_post();
			?>
			<article>
				<span class="image">					
					<img src="<?= get_the_post_thumbnail('medium'); ?>" alt="" />
				</span>			

				<header class="major">
					<h3><a href="<?= get_the_permalink(); ?>" class="link"><?= get_the_title(); ?></a></h3>
					<p><?= get_the_excerpt(); ?></p>
				</header>
			</article>
			<?php
			}

			/* Restore original Post Data */
			wp_reset_postdata();
			}
			?>


		</section>
	</div>
	<div class="col col-lg-3 col-xs-12">
		<section id="two">
			<div class="inner">
				<header class="major">
					<h2>Massa libero</h2>
				</header>
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
		</section>
	</div>
</div>



<?php get_footer(); ?>