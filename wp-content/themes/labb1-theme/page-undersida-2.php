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
						<div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
							<h1><?php 
								the_title();			
        					?></h1>
							<p>
							<?php 
								the_content();
        					?>
							</p>
							
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
							<ul class="side-menu">
								<li>
								<?php wp_nav_menu([
                                    'container' => false,
                                    'menu_class' => 'side-menu',
                                    'theme_location' => 'undersida-menu'
                                ]) ?>
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