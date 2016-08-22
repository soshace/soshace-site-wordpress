<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link href="/images/favicon.ico" rel="shortcut icon">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>

    <script src="https://maps.google.com/maps/api/js"></script>

    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-75957509-1', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- Google Analytics -->

</head>

<body>

<header class="main-header">

  <div class="main-header__inner">

    <div class="main-header__logo-wrap">

      <a href="#intro" class="scroll">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="134" height="35" alt="Soshace Logo">
      </a>

    </div>

    <div class="main-header__toggle-wrap">

      <a class="burger-icon" href="#">
        <svg class="burger-icon__open" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="39.945px" height="24.007px" viewBox="0 0 49.945 24.007" enable-background="new 0 0 49.945 24.007" xml:space="preserve">
          <g id="miu">
            <g id="editor_list_view_hambuger_menu_glyph">
              <g>
                <path class="burger-icon__part" id="path-1" fill="#4a77da" d="M1.137,0C0.51,0,0,0.428,0,1.01v1.981c0,0.558,0.494,1.01,1.138,1.01h47.671c0.628,0,1.138-0.428,1.138-1.01V1.01c0-0.558-0.494-1.01-1.138-1.01H1.137z M1.137,10.003C0.51,10.003,0,10.431,0,11.013v1.98c0,0.557,0.494,1.01,1.138,1.01h47.671c0.628,0,1.138-0.428,1.138-1.01v-1.98c0-0.558-0.494-1.01-1.138-1.01H1.137zM1.137,20.005C0.51,20.005,0,20.434,0,21.016v1.981c0,0.557,0.494,1.01,1.138,1.01h47.671c0.628,0,1.138-0.428,1.138-1.01v-1.981c0-0.558-0.494-1.011-1.138-1.011H1.137z"/>
              </g>
              <g>
                <path class="burger-icon__part" id="path-1_1_" fill="#4a77da" d="M1.137,0C0.51,0,0,0.428,0,1.01v1.981c0,0.558,0.494,1.01,1.138,1.01h47.671c0.628,0,1.138-0.428,1.138-1.01V1.01c0-0.558-0.494-1.01-1.138-1.01H1.137z M1.137,10.003C0.51,10.003,0,10.431,0,11.013v1.98c0,0.557,0.494,1.01,1.138,1.01h47.671c0.628,0,1.138-0.428,1.138-1.01v-1.98c0-0.558-0.494-1.01-1.138-1.01H1.137zM1.137,20.005C0.51,20.005,0,20.434,0,21.016v1.981c0,0.557,0.494,1.01,1.138,1.01h47.671c0.628,0,1.138-0.428,1.138-1.01v-1.981c0-0.558-0.494-1.011-1.138-1.011H1.137z"/>
              </g>
            </g>
          </g>
        </svg>

        <svg class="burger-icon__close--hidden" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 23.866 23.866" enable-background="new 0 0 23.866 23.866" xml:space="preserve">
          <path class="burger-icon__part" fill="#4a77da" d="M15.087,11.933l8.56-8.559c0.293-0.293,0.293-0.768,0-1.061L21.554,0.22C21.413,0.079,21.223,0,21.023,0s-0.39,0.079-0.53,0.22l-8.56,8.56L3.373,0.22c-0.282-0.282-0.78-0.282-1.061,0L0.22,2.313c-0.293,0.293-0.293,0.768,0,1.061l8.56,8.559l-8.56,8.559c-0.293,0.293-0.293,0.768,0,1.061l2.093,2.094c0.141,0.141,0.331,0.22,0.53,0.22c0.199,0,0.39-0.079,0.53-0.22l8.561-8.56l8.56,8.56c0.141,0.141,0.331,0.22,0.53,0.22s0.39-0.079,0.53-0.22l2.093-2.094c0.293-0.293,0.293-0.768,0-1.061L15.087,11.933z"/>
        </svg>
      </a>

    </div>

      <select name="language" id="language-select" class="language-select">
          <option value="en">English</option>
          <option value="ru">Русский</option>
      </select>

    <nav class="main-nav">
<?php

wp_nav_menu( array(
	'theme_location'  => 'header_menu',
	'menu'            => '', 
	'container'       => '', 
	'container_class' => '', 
	'container_id'    => '',
	'menu_class'      => 'menu', 
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul class="main-nav__list">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
) );

?>
    </nav>

  </div>
</header>

<script>
window.jQuery = window.$ = jQuery;
$(function() {

$('.main-nav__list li a').each(function() {
    $(this).addClass('main-nav__link');
});

});
</script>