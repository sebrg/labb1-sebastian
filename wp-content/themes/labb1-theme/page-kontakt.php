 
<?php get_header();?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <?php 
                    while(have_posts()) {
                        the_post();
                ?>

                <h1><?php the_title();?></h1>
                <?php the_content();?>
                <?php
                  } 
                ?>
       
            </div>
        </div>
</div>
</section>

<?php get_footer() ?>