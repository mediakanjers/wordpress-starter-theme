<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<title><?php wp_title(''); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if( get_field('kleur_mobiele_adressbar', 'options') != null) :  ?><meta name="theme-color" content="<?php echo get_field('kleur_mobiele_adressbar', 'options') ?>" /><?php endif; ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<header id="full_header">

		<div class="mk_rij">

			<div id="mk_logo_holder">
				<div id="inner">
					<span class="mk_logo_helper"></span>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo the_field('logo', 'option'); ?>" alt="" class="mk_logo" />
					</a>
				</div>
			</div>


			<div id="top_header">

				<div id="mk-info">
					<?php if(get_field('telefoon', 'option') != '') { ?>
						<div class="mk_telefoon"><span></span><a href="tel:<?php echo the_field('telefoon', 'option'); ?>"><?php echo the_field('telefoon', 'option'); ?></a></div>
					<?php } ?>

					<?php if(get_field('email', 'option') != '') { ?>
						<div class="mk_email"><span></span><a href="mailto:<?php echo the_field('email', 'option'); ?>"><?php echo the_field('email', 'option'); ?></a></div>
					<?php } ?> 
				</div> <!-- #mk-info -->

			</div>

			<div id="menu_header">

				<?php ubermenu( 'main' , array( 'theme_location' => 'primary-menu' ) ); ?>

				<div id="shiftnav-toggle-main-button" class="shiftnav-toggle shiftnav-toggle-shiftnav-main shiftnav-toggle-burger" data-shiftnav-target="shiftnav-main">
					<button class="hamburger hamburger--collapse" type="button"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
				</div>

			</div>
			
		</div>

	</header> <!-- #full-header -->

	<div id="mk-main-area">
