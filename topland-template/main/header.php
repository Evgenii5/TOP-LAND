<!DOCTYPE html>

<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />

<title><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">

<?php
    if( !is_admin()){
        // jquery
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri()."/static/jquery/js/jquery-3.1.1.js", false, '3.1.1');
        wp_enqueue_script('jquery');
    }

    // style
    wp_enqueue_style('style-zero.css', get_template_directory_uri()."/static/css/style-zero.css");
    wp_enqueue_style('style.css', get_template_directory_uri()."/static/css/style.css");
    wp_enqueue_style('style-adaptive.css', get_template_directory_uri()."/static/css/style-adaptive.css");
    
    // js
    wp_enqueue_script('script.js', get_template_directory_uri()."/static/js/script.js");

    wp_head();
?>

<div class="background-main1"></div>
    <div class="background-main2"></div>
    <!-- <div class="background-main3"></div> -->
    <div class="background-reviews">
      <img class="background-reviews__Star1" src="img/Soft Star1.png" alt="img">
      <img class="background-reviews__Star2" src="img/Soft Star2.png" alt="img">
      <img class="background-reviews__Star3" src="img/Soft Star3.png" alt="img">
    </div>
     <div class="background-choice__left">
      <img class="background-choice__leftImg" src="img/LightningLeft.png" alt="img">
    </div>
    <!--<div class="background-choice__right">
      <img src="img/LightningRight.png" alt="img">
    </div> -->
    <div class="wrapper">
      
      <header class="header">
        <div class="header__container _container">
            <!-- <div class="logo"> -->
            <?php
                $args = array(
                    'container'       => 'nav',          
                    'container_class' => 'header__menu menu',           
                    'menu_class'      => 'menu__list',          
                    'fallback_cb'     => 'wp_page_menu',            
                    'link_before'     => 'class="menu__link"',           
                    'theme_location'  => 'main_menu',
                    'add_li_class'    => 'menu__item'
                )
                wp_nav_menu($args);
            ?>
        <div class="header__logo">
            <?php the_custom_logo() ?>
        </div>

          <div class="header__location">
            <div class="header__location_img"><img src="img/location.svg" alt="location"/></div>
            <div class="header__location_text">Ростов-на-Дону</div>
          </div>

          <div class="header__hrVert"></div>

          <div class="header__contact">
            <div class="header__contact_telefon">+7 993 453-63-07</div>
            <div class="header_contact_href"><a href="https://wa.me/79934536307">Написать в What’sApp</a></div>
          </div>
          <!-- <div class="header__element"> -->
            <!-- <div class="heder__element_whatsapp"><a href="#"><img src="img/whatsapp.svg" alt="whatsapp"></a></div> -->
            <!-- <div class="heder__element_telegram"><a href="#"><img src="img/telegram.svg" alt="telegram"></a></div> -->
            <!-- <div class="heder__element_email"><a href="#"><img src="img/email.svg" alt="email"></a></div> -->
          <!-- </div> -->
        </div>
        <hr class="header__hr">
      </header>

        <main class="page">































<div class="sidebar-overlay" id="overlay">
    <div class="sidebar" id="nav">
        <span class="hide-nav">
            <span></span>
            <span></span>
        </span>
        <?php  wp_nav_menu([
            'theme_location' => 'main',
            'container' => false,
            'menu_class' => 'nav',
        ]); ?>
    </div>
</div>

<div class="header" id="header">
    <div class="container-fluid">
        <div class="left">
            <a href="/">
                <div class="logo">
                    <img src="/wp-content/themes/main/static/logo_new.png">
                </div>
            </a>
            <div class="show-nav" id="show-nav">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="right">
            <div class="slogan">Региональная общественная организация</div>
            <div class="title"><span>Федерация гандбола Ростовской области</span></div>
        </div>
        <?php echo do_shortcode('[handball161rus_social]'); ?>
        <a href="#" class="colorblinded" id="colorblinded">
            <div class="icon"><img src="<?= get_template_directory_uri() ?>/static/icons/glasses.png"></div>
            <div class="text">Версия для слабовидящих</div>
        </a>
        <div class="font-size" id="font-size">
            <a href="#" style="font-size: 18px;">A</a>
            <a href="#" style="font-size: 23px;">A</a>
            <a href="#" style="font-size: 28px;">A</a>
        </div>
    </div>
	<div class="container-fluid header-menu">
		<?php wp_nav_menu([
            'theme_location' => 'main',
            'container' => false,
            'menu_class' => 'nav',
        ]); ?>
	</div>
</div>



<div class="content">
    <div class="container-fluid">