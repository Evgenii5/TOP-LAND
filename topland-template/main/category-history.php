<?php get_header(); ?>
<?php $length = 0 ?>

<?php while (have_posts()) : the_post(); $length++; ?>
    <div <?php post_class('history'); ?>>
        <a class="history__link" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    </div>
<?php endwhile; ?>

<?php if ($length < 1): ?>
    <div class="empty-content">Истории отсутствуют</div>
<?php endif ?>

<?php get_footer(); ?>