<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head() ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slider.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slidenav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/sticky.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/styles.css">
</head>
<body>
<nav class="uk-navbar" data-uk-sticky="{getWidthFrom: top:-200, animation: 'uk-animation-slide-top'}">
	<ul class="uk-navbar-nav uk-hidden-small" data-uk-scrollspy-nav="{closest:'li'}">
		<?php $menu=wp_get_nav_menu_items('main');
		foreach ($menu as $key_nav=>$nav):
		?>
		<li><a href="<?=$nav->url?>" data-uk-smooth-scroll="{offset: 50}"><?=$nav->title?></a></li>
		<?php endforeach; ?>
	</ul>
	<a href="#offcanvas-navbar" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
</nav>

<div id="offcanvas-navbar" class="uk-offcanvas">
	<div class="uk-offcanvas-bar">
		<ul class="uk-nav uk-nav-offcanvas" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
			<?php $menu=wp_get_nav_menu_items('main');
			foreach ($menu as $key_nav=>$nav):
				?>
				<li><a href="<?=$nav->url?>" data-uk-smooth-scroll="{offset: 30}"><?=$nav->title?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>