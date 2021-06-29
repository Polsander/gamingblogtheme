<?php get_header() ?>
<!-- End of the Navbar-->
<!--- Header-->
<div>
    <h1 class="hidden">BrothersInGaming Home</h1>
    <h2 class="text-center">Hot Recent Posts</h2>
</div>

<!-- Content -->
<div class="container-fluid">
    <?php



    $args = array(
        'post_type' => 'post',
        'order_by' => 'date',
        'post_status' => 'publish',
        'posts_per_page' => 1,
    );

    //The Query
    $the_query = new WP_Query($args);

    //The Loop
    while ($the_query->have_posts()) {
        $the_query->the_post();
        $do_not_duplicate = $post->ID;
    ?>
        <div class="card mb-5 mt-5 mx-auto card-front shadow">
            <div class="row ">
                <div class="col-md-6">
                    <a href="<?php echo get_permalink() ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full')  ?>" class="img-responsive card-feature">
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="<?php echo get_permalink() ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title() ?></h5>
                            <p class="card-text"><?php the_excerpt() ?>
                            </p>
                            <br>
                            <br>
                            <hr>
                            <p class="card-text"><small class="text-muted"><?php the_date() ?></small>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    <?php

    }

    ?>




    <!-- CONTENT SPAM USE "THE LOOP"-->
    <?php

    $args2 = array(
        'post_type' => 'post',
        'order_by' => 'date',
        'post_status' => 'publish',
        'posts_per_page' => 5,
    );

    $query2 = new WP_Query($args2);

    while ($query2->have_posts()) {
        $query2->the_post();
        the_post();
        if ($post->ID == $do_not_duplicate) continue;
    ?>
        <div class="row">
            <div class="col-lg-6 col-md-4 mx-auto card-marg-l mb-2">
                <a href="<?php echo get_permalink() ?>">
                    <div class="card sub-card shadow">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"> <?php the_title() ?>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>

            <?php the_post(); ?>

            <div class="col-lg-6 col-md-4 mx-auto card-marg-r mb-2">
                <a href="<?php echo get_permalink() ?>">
                    <div class="card sub-card shadow">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" class="card-img-top" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title"><?php the_title() ?></h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    <?php }
    wp_reset_postdata();
    ?>
</div>
<!-- CONTENT SPAM OVER-->

<!-- FINALLY THE FOOTER :3-->
<?php get_footer() ?>