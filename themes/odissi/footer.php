<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<footer id='footer'>
    <div class="container">
		<div class="col-12">
			<div class="row">
				<div class="col-7">
					<div class="footer__menus">
						<div class="row">
							<div class="col-4">
								<div class="footer__menus-item">
									<h3>Pages</h3>
									<?php 
										wp_nav_menu([
											'theme_location'=>'header',
											'container'=> false
										])
									?>
								</div>
							</div>
							<div class="col-4">
								<div class="footer__menus-item">
									<h3>Tomothy</h3>
									<?php 
										wp_nav_menu([
											'theme_location'=>'header',
											'container'=> false
										])
									?>
								</div>
							</div>
							<div class="col-4">
								<div class="footer__menus-item">
									<h3>Jane Black</h3>
									<?php 
										wp_nav_menu([
											'theme_location'=>'header',
											'container'=> false
										])
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-5"></div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>

</body>

</html>

