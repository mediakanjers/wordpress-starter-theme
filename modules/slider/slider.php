<div class="swiper-container frontpageslider">
	<div class="swiper-wrapper">
		<?php if( have_rows('slider', 'options') ): while ( have_rows('slider', 'options') ) : the_row(); ?>
			<?php if( have_rows('slide', 'options') ): while ( have_rows('slide', 'options') ) : the_row(); ?>
			<div class='slide swiper-slide' style="background-image: url('<?php if( get_field('een_standaard_achtergrond', 'options') == "ja" ) { the_field('standaard_achtergrond', 'options'); } else { the_sub_field('slide_achtergrond', 'options'); } ?>');">
				<div class="slide-content clearfix">
					<div class="slide-module clearfix">


						<h1><?php the_sub_field('slide_titel'); ?></h1>
						<span class="subtitel"><?php the_sub_field('slide_subtitel'); ?></span>


						<?php if( get_sub_field('slide_button') != null ) { ?>
							<div class="mk_module mk_knop"><div class="mk_knop_inner"><a class="mk_button" href="<?php echo get_sub_field('slide_button')['url']; ?>"><?php echo get_sub_field('slide_button')['title']; ?></a></div></div>
						<?php } ?>

					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
		<?php endwhile; endif; ?>
	</div>
	<div class="frontslideroverlay"></div>
</div>