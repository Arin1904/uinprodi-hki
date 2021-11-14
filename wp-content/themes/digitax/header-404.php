<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="//gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> ><div class="ova-wrapp">

<header class=" ovatheme_header_default" id="ovatheme_header_default">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg px-0 py-0">
				  
					<a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
						<?php if( get_theme_mod( 'logo', '' ) != '' ) { ?>
							<img src="<?php  echo esc_url( get_theme_mod('logo', '') ); ?>" alt="<?php bloginfo('name');  ?>">
						<?php }else { ?> <span class="blogname"><?php bloginfo('name');  ?></span><?php } ?>
					</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header_menu" aria-controls="header_menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'digitax' ); ?>">
					<i class="fas fa-bars"></i>
					</button>

					<div class="collapse navbar-collapse justify-content-end" id="header_menu">

						<?php
		                	wp_nav_menu( array(
			                    'menu'              => '',
			                    'theme_location'    => 'primary',
			                    'depth'             => 3,
			                    'container'         => '',
			                    'container_class'   => '',
			                    'container_id'      => '',
			                    'menu_class'        => 'nav navbar-nav navbar-right',
			                    'fallback_cb'       => 'Digitax_WP_Bootstrap_NavWalker::fallback',
			                    'walker'            => new Digitax_WP_Bootstrap_NavWalker()
		                	));
		                ?>

					</div>

				</nav>
			</div>
			
		</div>
	</div>
</header>

<div class="ovatheme_breadcrumbs ovatheme_breadcrumbs_default">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php digitax_breadcrumbs_header(); ?>
			</div>
		</div>	
	</div>
</div>

