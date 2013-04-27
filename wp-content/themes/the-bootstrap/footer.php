<?php
/** footer.php
 *
 * @author		Clayton Phillipp
 * @package		Claymoredesigns
 * @since		1.0.0	- 05.02.2012
 */

				tha_footer_before(); ?>
				</div><!-- #page -->
		</div><!-- .container -->
			<div class="green-footer">
				<footer id="colophon" role="contentinfo" class="span12">
					<div id="footer-sidebar" class="secondary">
						<div id="footer-sidebar1">
						<?php
						if(is_active_sidebar('footer-sidebar-1')){
						dynamic_sidebar('footer-sidebar-1');
						}
						?>
						</div>
						<div id="footer-sidebar2">
						<?php
						if(is_active_sidebar('footer-sidebar-2')){
						dynamic_sidebar('footer-sidebar-2');
						}
						?>
						</div>
					</div>
					<?php tha_footer_top(); ?>
					<div id="page-footer" class="well clearfix">
						<?php wp_nav_menu( array(
							'container'			=>	'nav',
							'container_class'	=>	'subnav',
							'theme_location'	=>	'footer-menu',
							'menu_class'		=>	'credits nav nav-pills pull-left',
							'depth'				=>	3,
							'fallback_cb'		=>	'the_bootstrap_credits',
							'walker'			=>	new The_Bootstrap_Nav_Walker,
						) );
						?>
						<div id="site-generator"<?php echo has_nav_menu('footer-menu') ? ' class="footer-nav-menu"' : ''; ?>>
							Powered by - <a href="http://www.locallogicmedia.com/" target="_blank">Local Logic Media</a>
						</div>
					</div><!-- #page-footer .well .clearfix -->
					<?php tha_footer_bottom(); ?>
				</footer><!-- #colophon -->
				<?php tha_footer_after(); ?>
			</div><!-- .green-footer -->
	<!-- <?php printf( __( '%d queries. %s seconds.', 'the-bootstrap' ), get_num_queries(), timer_stop(0, 3) ); ?> -->
	<?php wp_footer(); ?>
	</body>
</html>
<?php


/* End of file footer.php */
/* Location: ./wp-content/themes/the-bootstrap/footer.php */