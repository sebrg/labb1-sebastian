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
						<ul class="social">
						<?php 
							dynamic_sidebar('f3'); //social media, får ej in ikoner
                            ?>
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