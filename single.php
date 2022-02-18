<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header();?>
</head>

<body <?php body_class(); ?>>

    <?php get_template_part('includes/header');?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <!-- Page Header -->
            <?php
            if (has_post_thumbnail()) :
                $id = get_post_thumbnail_id();
                $img = wp_get_attachment_image_src($id, 'large');
                // echo $img[0];
            else :
                $img = array(get_template_directory_uri() . '/img/post-bg.jpg');
            endif;
            ?>
            <?php
                // $eyecatch = get_eyecatch_with_default();
            ?>
            <header class="masthead" style="background-image: url('<?php echo $img[0]; ?>')">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 mx-auto">
                            <div class="post-heading">
                                <h1><?php the_title(); ?></h1>
                                <span class="meta">Posted by
                                <?php the_author(); ?>
                                on <?php the_date(); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Post Content -->
            <article>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 mx-auto">

                            <?php // the_post_thumbnail(); ?>
                            <?php // the_post_thumbnail(array(32, 32), array('alt' => 'eyecatcher')); ?>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </article>

            <hr>

        <?php endwhile; ?>
    <?php endif; ?>

  <?php get_template_part('includes/footer'); ?>

  <?php get_footer();?>

</body>

</html>
