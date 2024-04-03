<?php
$primary_menu = get_menu( "primary" );
?>

<aside class="offcanvas">
	<div class="container offcanvas__container">
		<menu class="offcanvas__menu" aria-label="Main Menu">
			<?php echo $primary_menu ?>
		</menu>
	</div>
	<div class="offcanvas__bg"></div>
</aside>
