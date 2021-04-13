<?php 
get_header();
?>


<main>
<?php 
         while ( have_posts() ) {
            the_post();
        ?>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1> <?php 
                                the_title();
                            ?></h1>
							<p> <?php 
                            the_content();
                            ?></p>
					
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<ul class="side-menu">
								<li>
									<a href="undersida.html">Undersida</a>
								</li>
								<li>
									<a href="undersida2.html">Undersida 2</a>
								</li>
								<li>
									<a href="undersida3.html">Undersida 3</a>
								</li>
								<li>
									<a href="undersida4.html">Undersida 4</a>
								</li>
							</ul>
						</aside>
					</div>
				</div>
			</section>
            <?php 
            } 
            ?>
		</main>

<?php 
get_footer();
?>