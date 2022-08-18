<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package housingline
 */
$header_first_button = get_field('header_first_button', 'option');
$header_second_button = get_field('header_second_button', 'option');

$gtm = get_field('gtm_scripts', 'option');

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php echo $gtm['header_code']; ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollToPlugin.min.js"></script>

	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php echo $gtm['body_code']; ?>
<?php wp_body_open(); ?>
<div id="page" class="site">

<header <?php if (is_page_template('templates/faq.php')): ?>class="faq"<?php endif; ?>>
	<a href="/" class="logo_holder">
		<?php if (is_page_template('templates/faq.php')): ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/white_logo.svg">
		<?php else: ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
		<?php endif; ?>
	</a>
	<div class="buttons_holder">
		<?php if($header_first_button): ?>
			<a href="<?php echo $header_first_button['url'] ?>" target="<?php echo $header_first_button['target'] ?>" class="small btn">
				<?php echo $header_first_button['title'] ?>
		</a>
		<?php endif; ?>
		<?php if($header_second_button): ?>
			<a href="<?php echo $header_second_button['url'] ?>" target="<?php echo $header_second_button['target'] ?>" class="dark small btn">
				<?php echo $header_second_button['title'] ?>
			</a>
		<?php endif; ?>
	</div>
</header>
	
