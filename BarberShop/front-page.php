
<?php get_header() ?>

<?php 
if ( have_posts() ) :
    while( have_posts() ) :
        the_post(); ?>
        
        
    <div id="home" class="container-fluid">
        <div class="row">
            <div class="col-xs-12 text-center">
                  <img  alt="Fellas Logo" class="logo" src="/wp-content/themes/BarberShop/images/fellas.jpg">
            </div><!--/.col-xs-12-->
        </div><!--/.row-->
    
    
    
    
        <div class="row text-center">
            <div class="col-sm-6">
                <iframe  style="border:3px solid #000000" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2952.0182316254563!2d-71.85591908425265!3d42.27813417919254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e406cbab58c5a3%3A0x6e4d11879381a0a6!2sGoodfellas+Barber+Shop!5e0!3m2!1sen!2sus!4v1484850753111" width="450" height="350" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
            </div><!--/.col-sm-6(1)-->
             <div class="col-sm-6">
                 
                 <?php the_content(); ?> 
                 
            </div><!--/.col-sm-6(2)-->
        </div><!--/.row-->
    </div><!--/.container-fluid-->

<hr id="middle">
 

    <?php endwhile;

endif; 

?>

<div id="Service">
        <h2>Services</h2>
</div>

<!--Services Query -->
<?php
  $my_query = new WP_Query('type=post&posts_per_page=5');
 
  if (  $my_query->have_posts()  ):
    while(  $my_query->have_posts()  ): $my_query->the_post(); 
        
      get_template_part('/content-templates/content', get_post_format() );
  
    endwhile;
  endif; ?>
  <?php
  wp_reset_postdata();
?>
    
<a style="margin-bottom:75px" href="https://goodfellas-carltonmugo.cs50.io/services/"> <button type="button" class="btn btn-info btn-block">Click For More</button> </a> 



<!--About-->
<div id="about" class="container well">
    <h2 class="text-center">Meet The Barbers</h2>
    <div class="row" style="padding-bottom: 50px;">
        <div class="col-xs-12">
            <?php echo do_shortcode('[wonderplugin_carousel id="1"]'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
