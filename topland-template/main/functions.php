<?php

// Удаляем category из УРЛа категорий (лучше No Category Base (WPML))
// add_filter('category_link', create_function('$a', 'return str_replace("category/", "", $a);'), 9999);



// Добавить поддержку миниатюр
add_theme_support('post-thumbnails');



// Зарегистрировать меню 
register_nav_menus([
    'main_menu' => 'Основное меню',
    'footer_menu' => 'Подвал меню'
]);

//добавление класса к li в меню
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// добавление класса к логотипу
add_filter( 'get_custom_logo', 'change_logo_class' );
function change_logo_class( $html ) {
       $html = str_replace( 'custom-logo-link', 'header__logo_img', $html );
    return $html;
};



// Вывод анонса с заданным количеством слов
function new_excerpt_length($length) {
  return 25;
}

add_filter('excerpt_length', 'new_excerpt_length');

// Удаление конструкции [...] в конце
add_filter('excerpt_more', function($more) {
    return '...';
});

function single_category($single) {
    foreach ((array) get_the_category() as $category) {
        $slugPath = TEMPLATEPATH . '/single-category-' . $category->slug . '.php';
        $termIDPath = TEMPLATEPATH . '/single-category-' . $category->term_id . '.php';

        if (file_exists($slugPath)) return $slugPath;
        elseif (file_exists($termIDPath)) return $termIDPath;
    }
 
    return $single;
}
add_filter('single_template', 'single_category');



// Переопределить шаблон для wp pagination
// CHECK: admin
add_filter('navigation_markup_template', 'theme_navigation_template', 10, 2 );
function theme_navigation_template( $template, $class ) {
    /*
    Вид базового шаблона:
    <nav class="navigation %1$s" role="navigation">
        <h2 class="screen-reader-text">%2$s</h2>
        <div class="nav-links">%3$s</div>
    </nav>
    */

    // %3$s содержит ссылки на страницы
    return '
    <nav class="navigation %1$s" role="navigation">
        <div class="nav-links">%3$s</div>
    </nav>
    ';
}



// Добавляем url pagination в category-news.php
// Источник: http://stackoverflow.com/questions/21195780/adding-an-offset-to-a-category-loop-in-wordpress
add_action( 'pre_get_posts', 'theme_pre_get_posts' );
function theme_pre_get_posts( $query ) {
    if ( ! $query->is_main_query() || $query->is_admin() )
        return false; 

    if ( $query->is_category('news') ) {
        $query->set( 'category_name', 'news' );
        $query->set( 'posts_per_page', 1 ); // TODO: убрать этот костыль (без него url pagination не работает)
    }
    return $query;
}



// Добавить новые типы для медиа-файлов
// add_filter('upload_mimes', 'custom_upload_mimes');
// function custom_upload_mimes( $existing_mimes = [] ) {
//     // EXAMPLE: $existing_mimes['extension'] = 'mime/type';
//     // Mime types: https://paulund.co.uk/change-wordpress-upload-mime-types

//     // PDF
//     $existing_mimes['pdf']  = 'application/pdf';

//     // MS Word
//     $existing_mimes['doc']  = 'application/msword';
//     $existing_mimes['docx'] = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
//     $existing_mimes['dotx'] = 'application/vnd.openxmlformats-officedocument.wordprocessingml.template';

//     // MS Excel
//     $existing_mimes['xlam'] = 'application/vnd.ms-excel.addin.macroEnabled.12';
//     $existing_mimes['xls']  = 'application/vnd.ms-excel';
//     $existing_mimes['xlsb'] = 'application/vnd.ms-excel.sheet.binary.macroEnabled.12';
//     $existing_mimes['xlsx'] = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
//     $existing_mimes['xltx'] = 'application/vnd.openxmlformats-officedocument.spreadsheetml.template';

//     // MS Power Point
//     $existing_mimes['potx'] = 'application/vnd.openxmlformats-officedocument.presentationml.template';
//     $existing_mimes['ppsx'] = 'application/vnd.openxmlformats-officedocument.presentationml.slideshow';
//     $existing_mimes['pptx'] = 'application/vnd.openxmlformats-officedocument.presentationml.presentation';
     
//     return $existing_mimes;
// }