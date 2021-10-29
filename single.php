<?php
//single.php spesifik bir dosya adidir. 
get_header();
while(have_posts()){ //wordpress deki post lari ele alir "değerlerini vs vs"{
the_post();?>
<h1><?php the_title(); //the title fonksiyonu wp fonksiyonudur. postlarin title larini alir?></h1> 
<hr>
<?php the_content(); // postun content kismini alir.
 } get_footer();?>

