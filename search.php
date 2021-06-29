<?php get_header() ?>

<head>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . "/assets/css/archives.css" ?>">
</head>

<div class="div text-center">
    <h1>Search</h1>
</div>



<!-- query -->


<div class="container">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
            <div>
                <div class="card mb-3  sub-card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="<?php echo get_permalink() ?>">
                                <img class="img-responsive card-feature img-bounds" src="<?php echo get_the_post_thumbnail_url()  ?>">
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

</div>

<?php
        }
    } else {
?>
<h3 class="text-center">No results found for that search term :(</h3>
<?php
    }
?>

</div>

<?php get_footer() ?>