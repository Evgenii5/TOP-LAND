<?php get_header(); ?>

            <section class="page__main-block main">
              <div class="background-main1"></div>
              <div class="background-main2"></div>
              <div class="background-main3"></div>
              <div class="main-block__container _container">
                    <div class="main-block__body">
                        <div class="main-content">
                        
                                      <h1 class="main-title">Создание сайтов и SEO продвижение</h1>
    
                                      <div class="main-subtitle">
                                        <div class="main-subtitle__item">Техническая поддержка</div>
                                        <div class="main-subtitle__item"><img src="<?php echo get_template_directory_uri()?>/static/img/Soft Star.svg" alt="img"></div>
                                        <div class="main-subtitle__item">Копирайт</div>
                                        <div class="main-subtitle__item"><img src="<?php echo get_template_directory_uri()?>/static/img/Soft Star.svg" alt="img"></div>
                                        <div class="main-subtitle__item">Контекстная реклама</div>
                                      </div>
    
                                      <div class="main-button">
                                          <a href="#" class="main-button_href" >Задайте вопрос в What’sApp</a>
                                      </div>
                        </div>
                        <div class="main-image">
                          <div class="main-image__top">
                            <div class="main-image__el el1">
                              <div class="main-image__text_title">+70%</div>
                              <div class="main-image__text_subtitle">Выводим сайты клиентов в топ-10</div>
                            </div>
                            <div class="main-image__el el2"><img src="<?php echo get_template_directory_uri()?>/static/img/img2.png" alt="img"></div>
                          </div>
                          <div class="main-image__bottom">  
                            <div class="main-image__el el3"><img src="<?php echo get_template_directory_uri()?>/static/img/img3.png" alt="img"></div>
                            <div class="main-image__el el4"><img src="<?php echo get_template_directory_uri()?>/static/img/img4.png" alt="img"></div>
                          </div>
                        </div>
                    </div>
              </div>
              <div class="main-background">
              <div class="_container">
                                      <div class="main-3columns">
                                          <div class="main-3columns__item item1">
                                            <div class="main-3colums__text1">Повышаем продажи партнерских товаров и услуг в среднем в 3 раза</div>
                                          </div>
                                          <div class="main-3columns__item item2">
                                            <div class="main-3columns__img"><img src="<?php echo get_template_directory_uri()?>/static/img/Lightning 2.svg" alt="img"></div>
                                            <div class="main-3columns__text2">7 лет работаем<br>в интернет-маркетинге</div>
                                          </div>
                                          <div class="main-3columns__item item3">
                                            <div class="main-3columns__img"><img src="<?php echo get_template_directory_uri()?>/static/img/Stairs 1.svg" alt="img"></div>
                                          <div class="main-3columns__text3">Продвигаем сайты с технически<br>сложными тематиками</div>
                                          </div>
                                      </div>
              </div>
              </div>      
    
              
            </section>

            <section class="page__services-block services">
              <div class="services-block__container _container">
                <div class="services-block__body">
                  
                    <!--<div class="services-block__subtitle toplend">TOP LAND</div>-->
                    <h2 class="_h2 services-block__title_h2"> Наши услуги</h2>
                  
                  <div class="services-block__columns">
                    <?php
                      $categories = get_categories( [
                        'taxonomy'     => 'category',                        
                        'parent'       => '3',
                        'orderby'      => 'name',
                        'order'        => 'ASC',
                        'hide_empty'   => 1,
                        'hierarchical' => 1,
                        'number'       => 0,
                      ] );


                    ?>

                    <?php
                      $args = array(              
                            'taxonomy'      => 'category',            
                            'orderby'       => 'name',
                            'order'         => 'ASC',
                            'hide_empty'    => true,
                            'parent'        => '3',                        
                            'update_term_meta_cache' => true, // подгружать метаданные в кэш
                          );

                          $term_query = new WP_Term_Query( $args );

                          foreach( $term_query->get_terms() as $term ){                            
                          ?>
                           
                          <a class="services-block__item" href="/<?php echo $term->taxonomy?>/<?php echo $term->slug?>">
                            <div class="services-block__text"><?php echo $term->name?></div>
                            <div class="services-block__img"><img src="<?php echo get_template_directory_uri()?>/static/img/Frame 1.svg" alt="img"></div>
                          </a>
                          <?php                          
                          }
                    ?> 
                    </div>   
                </div> 

              </div>
            </section> 
            
            <section class="page__choice-block choice">
            <div class="background-choice"></div>  
            <div class="choice-block__container _container">
                <div class="choice-block__body">
                  <div class="choice-block__text">
                    <div class="choice-block__title"><h2 class="_h2 choice-block__title_h2">Почему выбирают<br>нашу компанию</h2></div>
                  
                    <div class="choice-block__subtitle">Миссия нашей компании-это дать сильный старт Вашему бизнесу<br>и сохранить занимаемые за вами позиции.</div>
                    <ul class="choice-block__list">
                      <li class="choice-block__el">По показателю SEO выводим клиентов на 70-90% в ТОП-10.</li><br>
                      <li class="choice-block__el">Способствуем расширению сферы деятельности партнеров, благодаря правильной маркетинговой стратегии.</li><br>
                      <li class="choice-block__el">Выводим Landing-page в ТОП-3 и улучшаем конверсионные показатели до 240%.</li><br>
                      <li class="choice-block__el">Повышаем продажи партнерских товаров и услуг в среднем в 3 раза.</li>  
                    </ul>
                    <div class="choice-block__button"><a class="choice-block__href" href="#">О компании</a></div>
                  </div>
                  <div class="choice-block__img">
                    <img src="img/unsplash_DUmFLtMeAbQ.jpg" alt="img">
                  </div>
                </div>
              </div>
            </section>    

            <section class="page__cases-block cases">
              <div class="cases-block__container _container">
                <div class="cases-block__body">
                  <div class="cases-block__title">
                    <div class="cases-block__subtitle toplend">TOP LAND</div>
                    <h2 class="_h2 cases-block__title_h2"> Свежие кейсы студии</h2>
                  </div>

                  <div class="slider_wrapper cases_slider">
                    <div class="cases-block__slide case_slide">
                      <img src="img/slider.jpg" alt="slider">
                    </div>

                    <div class="cases-block__slide case_slide">
                      <img src="img/slider.jpg" alt="slider">
                    </div>

                    <div class="cases-block__slide case_slide">
                      <img src="img/slider.jpg" alt="slider">
                    </div>

                    <div class="cases-block__slide case_slide">
                      <img src="img/slider.jpg" alt="slider">
                    </div>

                  </div>

                </div>
              </div>
            </section>
            
            <section class="page__reviews-block reviews">
              <div class="background-reviews">
                <img class="triple-stars" src="img/triple_stars.svg" alt="stars">
              </div>
            <div class="reviews-block__container _container">
                <div class="reviews_gradient_bg">

                </div>

                <div class="triple_stars revies_triple_stars">
                  
                </div>

                <div class="reviews-block__body">
                  <div class="reviews-block__title">
                    <div class="reviews-block__subtitle toplend">TOP LAND</div>
                    <h2 class="_h2 reviews-block__title_h2">Отзывы клиентов</h2>
                  </div>

                  <div class="slider_wrapper reviews_slider">

                    <div class="reviews-block__slide reviews-slide">
                      <div class="reviews-slide__text1">Работаем с компанией Topland 1,5 года. 
                        Хочу отметить оперативность в решении всех поставленных задач, инициативу и 
                        грамотную работу специалистов. Рассчитываю на дальнейшее плодотворное сотрудничество.</div>
                      <div class="reviews-slide__text2">Вячеслав Шарыпкин</div>
                      <div class="reviews-slide__text3">Директор Trax.su</div>
                    </div>

                    <div class="reviews-block__slide reviews-slide">
                      <div class="reviews-slide__text1">123213 Работаем с компанией Topland 1,5 года.
                        Хочу отметить оперативность в решении всех поставленных задач, инициативу и 
                        грамотную работу специалистов. Рассчитываю на дальнейшее плодотворное сотрудничество.</div>
                      <div class="reviews-slide__text2">Вячеслав Шарыпкин</div>
                      <div class="reviews-slide__text3">Директор Trax.su</div>
                    </div>

                  </div>
                  
                </div>
              </div>
            </section>
            
            <section class="page__service-selection service-selection">
              <div class="service-selection__container _container">
                <div class="service-selection__body">
                  <div class="service-selection__title">
                    <h2 class="_h2 service-selection__title_h2">Не знаете какую услугу выбрать?</h2>
                  </div>
                  <div class="service-selection__subtitle toplend">Напишите нам. Мы подскажем какая услуга принесет вашей компании больше прибыли</div>
                  <div class="service-selection__button">
                    <a class="service-selection__href" href="#">Написать в What’sApp</a>
                  </div>
                </div>
              </div>
            </section>
            
            <section class="page__useful-articles useful-articles">
              <div class="useful-articles__container _container">
                <div class="useful-articles__body">
                  <div class="useful-articles__title">
                    <h2 class="_h2 useful-articles__title_h2">Полезные статьи</h2>
                  </div>
                  <div class="useful-articles__columns articles">
                    <?php $length = 0 ?>
                    <?php
                        // Взять первые 3 новости для горизонтальной ленты
                        $args_for_horz_news = [
                            'posts_per_page' => 3,
                            'category_name'  => 'blog',
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
                        <a class="articles__item" href="<?php the_permalink() ?>">
                            <div class="articles__img"><img src="<?= $post_thumbnail_url ?>" title="<?php the_title() ?>" alt="img"></div>
                            <div class="articles__title"><h3 class="articles__title_h3"><?php the_title() ?></h3></div>
                            <div class="articles__text"><?php the_excerpt() ?></div>
                        </a>
                    <?php
                        endwhile;

                        // Аннулирует данные последнего запроса, созданного для использования в произвольном Цикле WordPress.
                        // (Функция должна вызываться сразу после произвольного цикла).
                        wp_reset_query();
                    ?>  
                  </div>
                  <div class="useful-articles__button"><a class="useful-articles__href" href="/blog">Все статьи</a></div>
                </div>
              </div>
            </section>
            
            <section class="page__question question">
              <div class="question__container _container">
                <div class="question__body">
                  <div class="question__title">
                    <h2 class="_h2 question__title_h2">Вопрос/Ответ</h2>
                  </div>
                  
                  <div class="accordion faq_accordion" id="faq_accordion">
                    <div class="accordion__item close">
                      <div class="accordion__item_header">
                        Заголовок 1 <span>+</span>
                      </div>
                      <div class="accordion__item_body">
                        Содержимое 1
                      </div>
                    </div>

                    <div class="accordion__item close">
                      <div class="accordion__item_header">
                        Заголовок 2 <span>+</span>
                      </div>
                      <div class="accordion__item_body">
                        Содержимое 2
                      </div>
                    </div>
                  </div>
                  

                </div>
              </div>
            </section>

            <script type="text/javascript" src="slick/slick.min.js"></script>
            <script>
            $(document).ready(function () {
                $('.reviews_slider').slick({
                dots: true,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                adaptiveHeight: true
                });

                $('.cases_slider').slick({
                dots: true,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                adaptiveHeight: true
                });
            });
            
            </script>
<?php get_footer(); ?>