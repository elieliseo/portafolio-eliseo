<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<style type='text/css'>
	body { 
		background-color: <?php $key="bgcolor"; echo get_post_meta($post->ID, $key, true); ?>;
 	}
</style>
<div id="bg">
	<ul class="fondo">

	<?php 
		$args = array(
			'post_type' => 'attachment',
			'numberposts' => -1,
			'post_status' => 'published',
			'post_parent' => $post->ID
		); 

		$attachments = get_posts($args);
		if ($attachments) {
			foreach ($attachments as $attachment) {

			 ?>

			 <li><img src="<?php echo $attachment->guid; ?>"></li>
	
			
		<?php
			}
		}
	?>
	</ul>
</div>
<div id="contenido">
		<?php the_title(); the_content(); ?>

</div>
<?php endwhile; endif; wp_reset_query(); ?>
<?php get_footer(); ?>