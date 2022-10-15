<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <div <?php post_class(); ?>>
        <h3 class="post__title"><?php the_title(); ?></h3>
        <p class="post__date"><?php the_date('d.m.Y'); ?></p>
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>