<?php
	get_header();
?>

<?php while ( have_posts() ) : the_post() ?>
	<?php the_title('<h2>','</h2>'); ?>
	<?php the_content( __( 'Les mer <span class="meta-nav">&raquo;</span>', 'amet' )  ); ?>
<?php endwhile; ?>

<?php
	get_footer();
?>