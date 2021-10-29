<?php
//single.php spesifik bir dosya adidir. 
get_header();
while(have_posts()){ //wordpress deki post lari ele alir "değerlerini vs vs"{
the_post();?>
<!DOCTYPE html>
<html>
  
  <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri("images/ocean.jpg");?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title();?></h1>
        <div class="page-banner__intro">
          <p>Dont Forget the Fill Here.....</p>
        </div>
      </div>
    </div>
<div class="container container--narrow page-section">
    <?php
    $parent_id=wp_get_post_parent_id(get_the_ID());//bulundugumuz sayfanin parent id sini alir
    if($parent_id>0){
    ?>
    
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php get_permalink();?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title(wp_get_post_parent_id(get_the_ID()))?></a> <span class="metabox__main"><?php the_title();?></span>
         </p>
      </div>
      <?php }
      
     $testarray =  get_pages(array(
       "child_of"=>get_the_ID()

      ));
      
      ?>


      <?php if($parent_id || $testarray ){ //bulundugumuz sayfanin parent page i veya children page i varsa


       ?> 
<div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink($parent_id);?>"><?php echo get_the_title($parent_id);?></a></h2>
        <ul class="min-list">
       <?php 
       if($parent_id){//eğer bulundugumuz sayfanin parent i varsa
        
        $findchildren=$parent_id;
        

       }
       else{
         $findchildren=get_the_ID();
       }


      wp_list_pages(array(
          "title_li"=>NULL,
          "child_of"=>$findchildren
    ));
   
       ?>
        </ul>
      </div>      
<?php }?>



      <div class="generic-content">
     <?php the_content(); ?>  
    </div>
    </div>



<?php // postun content kismini alir.
 }get_footer(); ?>

