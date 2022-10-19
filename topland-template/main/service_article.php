<?php get_header(); ?>


<div class="_container">
            <section class="page-header">
                <div class="page-header__breadcrumbs">Главная / Услуги / SEO</div>
                <h1 class="page-header__title"><?php the_title(); ?></h1>
            </section>

            <section class="page__service-article">
                <div class="service-article__container _container">
                    <div class="service-article__body">
                        <img class="service-article_img" src="<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>">
                        <div class="service-article_text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="category-list_service-selection">
                <div class="service-selection__container _container">
                    <div class="service-selection__body">
                        <div class="service-selection__title">
                            <h2 class="_h2 service-selection__title_h2">Не знаете какую услугу выбрать?</h2>
                        </div>
                        <div class="service-selection__subtitle toplend">Напишите нам. Мы подскажем какая услуга
                            принесет вашей компании больше прибыли</div>
                        <div class="service-selection__button">
                            <a class="service-selection__href" href="#">Написать в What’sApp</a>
                        </div>
                    </div>
                </div>
            </section>

        </div>



<?php get_footer(); ?>