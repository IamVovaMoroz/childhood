<?php
// 'childhood_scripts' - название функции отслеживает как функции так и скрипты. //
 add_action('wp_enqueue_scripts', 'childhood_scripts');

 function childhood_scripts() {

    // ПОДКЛЮЧАЕМ СТИЛИ

    // function add styles 1) 1st argument how we call file with styles 'childhood-style', 2) 2 argument get_stylesheet_uri(  ) for find main style.css without write the path to this file with styles
    // wp_enqueue_style('childhood-style', get_stylesheet_uri(  ));
    wp_enqueue_style('childhood-style', get_template_directory_uri() . '/style.css');

// => if I want to add new other style we need to add the path to this file. get_template_directory_uri() help us to add path to file + . concat + our way
    // wp_enqueue_style('h1-style', get_template_directory_uri() . "/assets/styles/main.min.css");
// => if I need add styles from link online
//  wp_enqueue_style('animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');

// ПОДКЛЮЧАЕМ СКРИПТЫ
//array() если есть зависимость от jquery то укажем array(jquery) , null версия скрипта, true - подключение внизу страницы , скрипты у нас в футере
wp_enqueue_script('childhood_scripts', get_template_directory_uri() . "/assets/js/main.min.js", array(), null, true );

 };

?>