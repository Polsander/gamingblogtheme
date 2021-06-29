<?php get_header() ?>
<header>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . "/assets/css/post.typography.css" ?>">
</header>

<div class="container">
    <?php
    if (have_posts()) {
        while (have_posts()) {

            the_post();
    ?>
            <article class="post-margin">
                <h1><?php the_title() ?></h1>
                <br>
                <hr>

                <div class="row">
                    <div class="col-1 author-image">
                        <?php
                        echo get_avatar(get_the_author_meta('ID')); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span class="author-name">
                            By: <?php the_author(); ?>
                        </span>
                    </div>
                    <div class="col-5 text-end">
                        <?php the_date(); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col category-links">
                        <?php the_category(' , '); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col tag-links">
                        <?php the_tags('', ' , '); ?>
                    </div>
                </div>
                <hr>
                <?php
                the_content(); ?>

                <hr>

                <div>

                    <?php if (get_next_post_link()) { ?>
                        <h5 class="mt-5 mb-3 next-post">
                            Enjoyed this article? Check out this one below!
                        </h5>
                        <h3 class="next-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg>
                            <?php echo next_post_link(); ?>
                        </h3>
                </div>
            <?php } ?>

            <?php $comments_args = array(
                // Change the title of send button 
                'label_submit' => __('Comment', 'textdomain'),
                // Change the title of the reply section
                'title_reply' => __('Write a Comment', 'textdomain'),
                // Remove "Text or HTML to be displayed after the set of comment fields".
                'comment_notes_after' => '',
                // Redefine your own textarea (the comment body).
                'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun') . '</label><br /><textarea id="comment" class="form-control" name="comment" aria-required="true"></textarea></p>',
            ); ?>

            <div>
                <?php comment_form($comments_args); ?>
            </div>




            <?php
            $args = array(
                'post_id' => get_the_ID()
            );

            $comments = get_comments($args);


            //comment block
            foreach ($comments as $comment) : ?>
                <div class="row comment-margin mb-2">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $comment->comment_author ?></h6>
                            <p class="card-text"><?php echo $comment->comment_content ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


    <?php }
    }

    ?>


            </article>

</div>


<?php get_footer() ?>