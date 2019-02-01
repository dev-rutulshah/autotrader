<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rutulshah
 */

?>

	</div><!-- #main -->

		<footer id="footer">
			<div class="inner">
				<ul class="icons">
					<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
				</ul>
				<ul class="copyright">
					<li><?php printf( esc_html__( 'Proudly powered by %s', 'rutulshah' ), 'WordPress' ); ?></li><li><?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'rutulshah' ), 'rutulshah', '<a href="https://rutulshah.com/">Rutul Shah</a>' ); ?></li>
				</ul>
			</div>
		</footer>

</div><!-- #wrapper -->
<?php custom_js_include(); ?>
<?php wp_footer(); ?>

</body>
</html>
