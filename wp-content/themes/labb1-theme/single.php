<?php 
get_header();
?>


<main>
<?php 
         while ( have_posts() ) { // startar loop
            the_post();
        ?>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<article>
								<img src="<?php the_post_thumbnail_url(); ?>">
								<h1 class="title"><?php 
                                        the_title();
                                    ?></h1>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i>   <?php 
                                    echo get_the_date();
                                    ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="forfattare.html"><?php 
                                    the_author();
                                    ?></a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a>
									</li>
								</ul>
                                <p>
                                    <?php 
                                        the_content();
                                    ?>
                                </p>


							</article>
						</div>
                        <?php 
                                }
                         // avslutar loop      
                            ?>


						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								
								<ul>					
											<?php 
										dynamic_sidebar('home-sidebar');
                            				?>								
								</ul>
						
		
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>

<?php 
get_footer();
?>
