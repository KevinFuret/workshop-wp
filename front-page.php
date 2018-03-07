<?php get_header(); //appel du template header.php  ?>

<div class="row mb-2">
	<?php
	$args = array( 'post_type' => 'evenement', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		?>
		<div class="col-md-6">
			<div class="card flex-md-row mb-4 box-shadow h-md-250">
				<div class="card-body d-flex flex-column align-items-start">
					<strong class="d-inline-block mb-2 text-primary"><?php  $terms = get_the_terms( $post->ID, 'categorie' );
	                $term = array_pop($terms);
	                echo '<span class="actu__categorie">';
	                echo $term->name;
	                echo '</span>';
						?></strong>
					<h3 class="mb-0">
						<?php the_title(); ?>
					</h3>
					<div class="mb-1 text-muted"><?php the_date(); ?></div>
					<p class="card-text mb-auto"><?php the_excerpt();?></p>
					<a href="<?php the_permalink(); ?>">Continue reading</a>
				</div>
				<?php the_post_thumbnail( 'medium', array('class' => 'card-img-right flex-auto d-none d-md-block')); ?>
			</div>
		</div>
		<?php
	endwhile;
	?>
</div>

<?php get_footer(); //appel du template footer.php  ?>
