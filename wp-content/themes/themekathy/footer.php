<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		

		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="fouteur">
				<span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>"><?php printf( __( 'Template by %s', 'twentysixteen' ), 'French_Incubus' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</div>
	<script type="text/javascript" src="<?php home_url(); if(!is_home()) echo "../"; else "";?>wp-content/themes/themekathy/js/script.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
</body>
</html>
