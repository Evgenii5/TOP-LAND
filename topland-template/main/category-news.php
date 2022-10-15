<?php get_header(); ?>
<?php $length = 0 ?>

<div class="slider">
    <?php
        // Взять первые 3 новости для горизонтальной ленты
        $args_for_horz_news = [
            'posts_per_page' => 3,
            'category_name'  => 'news',
            'offset'         => 0,
        ];

        $query = new WP_Query( $args_for_horz_news );

        while ($query->have_posts()) :
            $query->the_post();
            $length++;

            if (is_null(get_the_post_thumbnail_url()) || empty(get_the_post_thumbnail_url()))
                $post_thumbnail_url = get_template_directory_uri().'/static/empty-banner.gif';
            else
                $post_thumbnail_url = get_the_post_thumbnail_url();

    ?>
        <a class="item" href="<?php the_permalink() ?>">
            <div class="image"><img src="<?= $post_thumbnail_url ?>" title="<?php the_title() ?>"></div>
            <div class="description">
                <span class="date"><?= get_the_date('d.m') ?></span>
                <span class="title"><?php the_title() ?></span>
                <span class="text"><?php the_excerpt() ?></span>
            </div>
        </a>
    <?php
        endwhile;

        // Аннулирует данные последнего запроса, созданного для использования в произвольном Цикле WordPress.
        // (Функция должна вызываться сразу после произвольного цикла).
        wp_reset_query();
    ?>
</div>


<div class="news">
    <?php
        // Получить текущую страницу
        $paged = (get_query_var('paged')) ? get_query_var('paged') - 1 : 0; // Первая страница это 0, вторая это 1 и т.д.

        // Взять последнюю новость из горизонтальной ленты
        $args_for_horz_news = [
            'posts_per_page' => 1,
            'category_name'  => 'news',
            'offset'         => 2,
        ];

        $query = new WP_Query( $args_for_horz_news );

        if ($paged == 0) while ($query->have_posts()) : $query->the_post();
    ?>
        <a class="item item-slider" href="<?php the_permalink() ?>">
            <div class="image"><img src="<?php the_post_thumbnail_url() ?>" title="<?php the_title() ?>"></div>
            <div class="description">
                <span class="date"><?= get_the_date('d.m') ?></span>
                <span class="title"><?php the_title() ?></span>
                <span class="text"><?php the_excerpt() ?></span>
            </div>
        </a>
    <?php
        endwhile;

        // Аннулирует данные последнего запроса, созданного для использования в произвольном Цикле WordPress.
        // (Функция должна вызываться сразу после произвольного цикла).
        wp_reset_query();
    ?>

    <?php
        $posts_per_page = 3;
        $post_offset = $paged * $posts_per_page + 3;

        // Взять новости для вертикальной ленты
        $args_for_vert_news = [
            'posts_per_page' => $posts_per_page,
            'category_name'  => 'news',
            'offset'         => $post_offset,
        ];

        $query = new WP_Query( $args_for_vert_news );

        while ($query->have_posts()) : $query->the_post();
    ?>
        <a class="item" href="<?php the_permalink() ?>">
            <div class="image"><img src="<?php the_post_thumbnail_url() ?>" title="<?php the_title() ?>"></div>
            <div class="description">
                <span class="date"><?= get_the_date('d.m') ?></span>
                <span class="title"><?php the_title() ?></span>
                <span class="text"><?php the_excerpt() ?></span>
            </div>
        </a>
    <?php
        endwhile;

        // Аннулирует данные последнего запроса, созданного для использования в произвольном Цикле WordPress.
        // (Функция должна вызываться сразу после произвольного цикла).
        wp_reset_query();
    ?>
</div>


<?php
	// Возвращает глобальную переменную $post в соответствие с текущим постом (в актуальное состояние).
	wp_reset_postdata();

    // Делаем пагинацию с учетом вычета первых трех новостей
	$GLOBALS['wp_query']->max_num_pages = ceil( ($query->found_posts - 3) / $posts_per_page);

    // Вывод пигинации
	the_posts_pagination();

	// Аннулирует данные последнего запроса, созданного для использования в произвольном Цикле WordPress.
	// (Функция должна вызываться сразу после произвольного цикла).
	wp_reset_query();
?>
    <div class="pagination ">
    <form action="#" id="goToNewsPageForm" method="POST">
       <input type="number" name="page" id="goToNewsPageFormPageInput" value="" class="next page-numbers" placeholder="Введите страницу" />
       <input type="submit" class="next page-numbers" value="Перейти на страницу" />
    </form>
    <script>
	window.onload = function () {
		document.getElementById("goToNewsPageForm").onsubmit = function onSubmit(form) {
			form.preventDefault();

			const page = document.getElementById('goToNewsPageFormPageInput').value;

			if (!page) {
				return;
			}

			window.location.replace('/news/page/' + page + '/');
		}
	};
    </script>
    </div>

<?php if ($length < 1): ?>
    <div class="empty-content">Новости отсутствуют</div>
<?php endif ?>

<?php get_footer(); ?>
