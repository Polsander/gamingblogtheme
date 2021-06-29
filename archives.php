<!--
    *Template Name: Archives
-->
<?php get_header() ?>

<head>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . "/assets/css/archives.css" ?>">
</head>

<div class="div text-center">
    <h1>All Blogs</h1>
</div>



<!-- query -->
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 7,
    'paged' => $paged
));
?>

<div class="container">
    <?php if ($query->have_posts()) : ?>

        <!-- begin loop -->
        <?php while ($query->have_posts()) : $query->the_post(); ?>

        <div class="card mb-3  sub-card shadow-lg">
			<div class="row g-0">
				<div class="col-md-4">
					<a href="<?php echo get_permalink() ?>">
						<img class="img-responsive card-feature img-bounds" src="<?php echo get_the_post_thumbnail_url()  ?>">
					</a>
				</div>
				<div class="col-md-8">
					<a href="<?php echo get_permalink() ?>">
						<div class="card-body">
							<h4 class="card-title"><?php the_title() ?></h4>
                            <p><?php the_excerpt() ?></p>
                            <p ><i><?php the_date() ?></i></p>
					</a>
				</div>
			</div>
		</div>
		</div>

        <?php endwhile; ?>
        <!-- end loop -->


        <div class="pagination text-center">
            <?php
            echo paginate_links(array(
                'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                'total'        => $query->max_num_pages,
                'current'      => max(1, get_query_var('paged')),
                'format'       => '?paged=%#%',
                'show_all'     => false,
                'type'         => 'plain',
                'end_size'     => 1,
                'mid_size'     => 2,
                'prev_next'    => false,
                'add_args'     => false,
                'add_fragment' => '',
            ));
            ?>
        </div>


        <?php wp_reset_postdata(); ?>

    <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

</div>

<?php get_footer() ?>