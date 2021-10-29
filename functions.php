<?php 

function university_files()
{
wp_enqueue_script("Js-slide",get_theme_file_uri("/build/index.js"),array("jquery"),1.0,true);    
wp_enqueue_style("google-fonts",("//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i"));  
wp_enqueue_style("fonts-icon",("//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"));
wp_enqueue_style("university_main_style",get_theme_file_uri("/build/style-index.css"));
wp_enqueue_style("university_extra_style",get_theme_file_uri("/build/index.css"));

}

add_action("wp_enqueue_scripts","university_files");

function university_site_title(){
add_theme_support("title-tag");
register_nav_menu("HeaderMenuLocation", "Header Menu Location"); // nav menuyü wp admin e bağlar 
//ve ordan ayarlana bilecek(ekleme/çikarma/düzenleme) sekilde aylarlar.

register_nav_menu("FooterLocationOne", "Footer Location One"); //ikinci girilen değer wordpress te görülecek değerdir.
register_nav_menu("FooterLocationTwo", "Footer Location Two");
//ayni şeyleri footer için yaparik
}

add_action("after_setup_theme","university_site_title");


?>