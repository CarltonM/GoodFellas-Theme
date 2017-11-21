<div id="blog">
<?php
/** 
 * Content content-template
 */
?>




    <div class="container">
        <div class="row">
            <div class="col-sm-5" style="margin-bottom:10px; margin-top:10px;">
                <div class="thumbnail">
                    <?php 
                        if ( has_post_thumbnail() ): ?>
                              
                                <?php the_post_thumbnail('small'); ?>  

                        <?php  
                        endif;  
                    ?>
                </div>
            </div>
            <div class="col-sm-7">
                <h1> <?php the_title(); ?> </h1>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div><!--/.row-->
        
    </div><!--/.container-->

</div><!--ID.blog-->





