<!Doctype html>
<html>
<head>
	<title>****Eliseo****</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/jquery.fitvids.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/functions.js"></script>
</head>
<body>
	<div id='menu'>
		<p id="titulo"><a href="index.html">E l i s e o C e r v a n t e s
		<br>
		* * * * * * * * * * * * * * * * * *
		</a>
		</p>
		<ul>
			<li>P r o y e c t o s</li>
				<?php 
					$args = array(
							'category' => 2,
							'numberposts' => -1
						);
					$proyectos = get_posts($args);
					foreach($proyectos as $post): setup_postdata($post);
				?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endforeach; wp_reset_query(); ?>
		</ul>
		<p>
		* * * * * * * * * * * * * * * * * *
		</p>
		<ul>
			<li><a href="http://localhost:8888/proyectofinal/cv/">cv</a></li>
			<li><a href="http://localhost:8888/proyectofinal/contacto/">contacto</a></li><br>
			<li>* * * * * * * * * * * * * * * * * *</li>
			<li><a href="http://anodinooo.tumblr.com/" target="_blank">anodinooo</a></li>
		</ul>	
	</div>