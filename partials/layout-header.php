<?php
$siteTitle = get_bloginfo( 'title' );
$siteUrl = get_bloginfo( 'url' );
$logo = get_custom_logo();
$primary_menu = get_menu( "primary" );
$pageTitle = get_the_title( $post->ID );
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php echo "$pageTitle | $siteTitle"; ?>
	</title>
	<?php wp_head(); ?>
</head>

<body <?php echo is_admin_bar_showing() ? "class='logged-in'" : "" ?>>
	<div class="container">
		<header class="site-header">
			<a class="site-header__logo" href="<?php echo $siteUrl; ?>">
				<?php if ( has_custom_logo() ) : ?>
					<?php echo $logo; ?>
				<?php else : ?>
					<?php echo $siteTitle ?>
				<?php endif; ?>
			</a>
			<menu class="site-header__menu">
				<?php echo $primary_menu; ?>
			</menu>
			<button class="site-header__toggle"><span></span></button>
		</header>
		<figure>
			<img src="https://naranonfl.org/images/header-people2.png" alt="Florida Region Nar-Anon banner">
		</figure>
		<main>
