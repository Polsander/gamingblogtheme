<?php get_header() ?>

<h3 class="text-center mt-3">Posts tagged with: <?php single_tag_title() ?></h3>

<?php


if (have_posts()) {
	while (have_posts()) {
		the_post(); ?>
		<div class="card mb-3 card-tag-index sub-card">
			<div class="row g-0">
				<div class="col-md-4">
					<a href="<?php echo get_permalink() ?>">
						<img class="img-responsive card-feature img-tag-index" src="<?php echo get_the_post_thumbnail_url()  ?>">
					</a>
				</div>
				<div class="col-md-8">
					<a href="<?php echo get_permalink() ?>">
						<div class="card-body">
							<h5 class="card-title"><?php the_title() ?></h5>
					</a>
				</div>
			</div>
		</div>
		</div>

<?php
	} // end while
} // end if


?>

<?php
if ($wp_query->found_posts < 3 && !wp_is_mobile()) { ?>
	<div class="text-center end-text">
		<p>Couldn't find what you were looking for? Try the search bar!</p>
	</div>
	<div class="site-footer">
		<?php get_footer();  ?>
	</div>

<?php	} else {
	get_footer();
}
?>