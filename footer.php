			<span class="mk_scrolltop"></span>

			<footer id="main-footer">
				<div class="mk_sectie">
					<div class="mk_rij">

						<div class="mk_kolom mk_kolom_1_1">
							<div class="mk_footer mk_footer1">
								<?php dynamic_sidebar( 'footer-area-1' ); ?>

							</div>

							<div class="mk_footer mk_footer2">
								<?php dynamic_sidebar( 'footer-area-2' ); ?>

							</div>

							<div class="mk_footer mk_footer3">
								<?php dynamic_sidebar( 'footer-area-3' ); ?>

							</div>

							<div class="mk_footer mk_footer4">
								<?php dynamic_sidebar( 'footer-area-4' ); ?>

							</div>
						</div>
						
					</div>
				</div>
 
				<div id="footer_bottom">
					<div class="mk_rij clearfix">

						<div class="inner">
							<div class="footer_info"><span>&copy; <?php echo date("Y"); ?> <?php the_field('bedrijfsnaam', 'options'); ?></span></div>

							<div class="footer_info" class="footer_links">
								<?php if( have_rows('footer_links', 'options') ): while ( have_rows('footer_links', 'options') ) : the_row(); ?>
									<a <?php if( get_sub_field('tabblad') != null && get_sub_field('tabblad')[0] == "ja" ) { echo 'target="_blank "'; } ?>href="<?php the_sub_field('url'); ?>"><?php the_sub_field('titel'); ?></a>					
								<?php endwhile; endif; ?>
							</div>

							<div class="footer_info"><?php echo __( 'Gerealiseerd door', 'MK_Theme'); ?> <a href="http://www.mediakanjers.nl">Mediakanjers</a></div>
						</div>

					</div>	<!-- .container -->
				</div>

			</footer> <!-- #main-footer -->
		</div> <!-- #mk-main-area -->

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
</body>
</html>