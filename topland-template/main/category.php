<?php get_header(); ?>
<div class="_container">
                <section class="page-header">
                    <div class="page-header__breadcrumbs">Главная / Услуги / SEO</div>
                    <h1 class="page-header__title"><?php single_cat_title(); ?></h1>
                </section>


                        

                <section class="page__services-block services">
                    <div class="services-block__container _container">
                        <div class="services-block__body">
                            <div class="services-block__grid">
                                <?php
                                    // получаем информацию о запрашиваемом объекте, у нас это категория:
                                    $queried_object = get_queried_object(); 
                                    // следующая строчка полезна при работе с произвольными таксономиями:
                                    // $taxonomy = $queried_object->taxonomy; // в нашем случае 'category'
                                    // получаем дочерние категории:
                                    $child_cats = get_categories(array(
                                    'taxonomy' => 'category',
                                    'child_of' => $queried_object->term_id
                                    ));
                                    if(count($child_cats)){  
                                    // выводим ссылки на дочерние категории:
                                    foreach ($child_cats as $key => $cat) { ?>
                                        <div class="services-block__item">
                                            <div class="services-block__text">
                                                <a href="<?php echo get_category_link($cat->cat_ID);?>"><?php echo $cat->name; ?></a>
                                            </div>
                                            <div class="services-block__img"><img src="/static/img/Frame 1.svg" alt="img"></div>
                                        </div>                                                                               
                                        <?php 
                                        }
                                    }
                                ?>

                                <!--        
                                <div class="services-block__item">
                                    <div class="services-block__text">SEO продвижение</div>
                                    <div class="services-block__img"><img src="/static/img/Frame 1.svg" alt="img"></div>
                                </div>
                                <div class="services-block__item">
                                    <div class="services-block__text">Создание сайтов</div>
                                    <div class="services-block__img"><img src="img/Frame 1.svg" alt="img"></div>
                                </div>
                                <div class="services-block__item">
                                    <div class="services-block__text">Контекстная реклама</div>
                                    <div class="services-block__img"><img src="img/Frame 1.svg" alt="img"></div>
                                </div>
                                <div class="services-block__item">
                                    <div class="services-block__text">Техническая поддержка</div>
                                    <div class="services-block__img"><img src="img/Frame 1.svg" alt="img"></div>
                                </div>
                                <div class="services-block__item">
                                    <div class="services-block__text">ГЕО-сервисы</div>
                                    <div class="services-block__img"><img src="img/Frame 1.svg" alt="img"></div>
                                </div>
                                -->
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

                <section class="category-list_description">
                    <div class="category-list_description__container _container">
                        <div class="category-list_description__text"><?php echo category_description();?></div>
                    </div>
                </section>

            </div>


<?php get_footer(); ?>