<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
	
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
       <title><?php wp_title('|',true,'right'); ?> <?php bloginfo('name'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
		
       <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap&subset=latin-ext" rel="stylesheet">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>

    </head>
	
	<body <?php body_class();?>>
<header>

		<div class="header__wrapper">
			<div class="header__item">
				<a href="http://example.com"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" width="175px" height="53px" alt="logo baltic park" /></a>
			</div>
			<div class="header__item booking">
			<p class="header__menu--booking">
				Book your<br>stay now
			</p>
			</div>
			                
							<div class="burger">+</div>
                          
			<div class="header__menu">
				
				<?php wp_nav_menu(array('theme_location'=>'header-menu')); ?>
				<br>
				<div class="contact__menu">
				<?php the_field('email_i_telefon',8); ?>
			   </div> 
			   <div class="header__menu--bookingmobile">
				   Book your<br>stay now
			   </div>
			</div>
         
			<div class="header__language">
	<?php wp_nav_menu(array('theme_location'=>'language-menu')); ?>
	</div>
		</div>
			</header>
				
	<section class="content">
		
<div class="content__contact">
	<?php the_field('email_i_telefon',8); ?>
</div>
<div class="content__social">
	<?php wp_nav_menu(array('theme_location'=>'social-menu')); ?>
</div>
	