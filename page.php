<?php get_header(); ?>

<div class="container mt-5">
    <div class="text-center mt-5 mb-5">
        <h1>
            <?php echo get_the_title(); ?>
        </h1>
    </div>

    <?php the_content(); ?>
</div>


<?php get_footer(); ?>