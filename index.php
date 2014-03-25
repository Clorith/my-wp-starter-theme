<?php
	get_header();
?>

<?php while ( have_posts() ) : the_post() ?>
	<?php the_title('<h2>','</h2>'); ?>
	<?php the_content( __( 'Read more <span class="meta-nav">&raquo;</span>', 'text-domain' )  ); ?>
<?php endwhile; ?>

<?php
	get_footer();
?>