			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<fieldset>
                <legend>Footer</legend>
                <nav class="footer_nav">
                <?php
                wp_nav_menu(
				array(
					'theme_location'  => 'footer-menu',
					'menu'            => '',
					'container'       => 'div',
					'container_class' => 'menu-{menu slug}-container',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul>%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
					)
				);
				?>
                </nav>
				</fieldset>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

	</body>
</html>