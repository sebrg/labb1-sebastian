<?php 
get_header(); 
?>
<main>
<div class="container">
	<div class="row">
		<div id="primary" class="col-xs-12 col-md-9">
			<h1>
                <?php the_archive_title();?>
            </h1>
			<?php 
				while(have_posts()) {
				the_post(); 
			?>
				<article>
					<img src="<?php the_post_thumbnail_url()?>"/>
					<h2 class="title">
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</h2>
					<ul class="meta">
						<li>
							<i class="fa fa-calendar"></i> <?= get_the_date();?>
						</li>
						<li>
							<i class="fa fa-user"></i> <?php the_author_posts_link();?>
						</li>
						<li>
							<i class="fa fa-tag"></i> <?php the_category(','.' '); ?>
						</li>
					</ul>
                    
					<?php 
                    the_excerpt();
                    ?>
			
				</article>

			<?php 
			}				
			?>
		</div>
									
		<aside id="secondary" class="col-xs-12 col-md-3">
			<div id="sidebar">
				<ul>
					<?php dynamic_sidebar("home-sidebar");
                    ?>
				</ul>
			</div>
		</aside>
	</div>
</div>
</main>

 
<?php
get_footer() 
 ?>