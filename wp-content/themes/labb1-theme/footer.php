<footer id="footer">

			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<?php
						dynamic_sidebar('f1'); //kort om oss i footer
						?>	
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
							<?php
							dynamic_sidebar('f2'); //kontaktuppgifter i footer
							?>

					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4>Social media</h4>
						<ul class="social">
						<?php 
						// funkar ej.. 
                            wp_nav_menu(
								[
									'theme-location' => 'footerMenu'
								]
							);
                            ?>
						<!-- 	<li>
								<i class="fa fa-facebook"></i> <a href="">Facebook</a>
							</li>
							<li>
								<i class="fa fa-twitter"></i> <a href="">Twitter</a>
							</li>
							<li>
								<i class="fa fa-instagram"></i> <a href="">Instagram</a>
							</li>
							<li>
								<i class="fa fa-linkedin"></i> <a href="">LinkedIn</a>
							</li> -->
						</ul>
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Grupp X, 2016</p>
					</div>
				</div>
			</div>
		</footer>

	</div>

	<!-- <script src="js/script.js"></script> -->
    <script src="<?php echo get_template_directory_uri(). '/js/script.js'?>"></script>

<?php 
wp_footer();
?>

</body>
</html>