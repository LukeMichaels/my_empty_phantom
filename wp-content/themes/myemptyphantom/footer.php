				</div><!-- .page-wrap -->

				<footer class="footer" role="contentinfo">
					<div class="row">
						<div class="social-icons">
							<a href="https://www.instagram.com/jessebeamanmusic/" alt="visit My Empty Phantom on Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
							<a href="https://www.facebook.com/myemptyphantom/" alt="visit My Empty Phantom on Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<a href="https://open.spotify.com/artist/3WJt2iTLI6VuDQxOc9fWtZ" alt="visit My Empty Phantom on Spotify" target="_blank"><i class="fab fa-spotify"></i></a>
							<a href="https://myemptyphantomaustintx.bandcamp.com/" alt="visit My Empty Phantom on Bandcamp" target="_blank"><i class="fab fa-bandcamp"></i></a>
						</div>
						<nav class="footer-nav">
							<?php wp_nav_menu( array('theme_location' => 'footer_nav', 'container' => '') ); ?>
						</nav>
					</div>
					<div class="row">
						<div class="copyright">
							&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
						</div>
					</div>
				</footer>

			</div><!-- #canvas -->
		</div><!-- .wrapper -->

		<?php wp_footer(); ?>

		<?php /* :::::::::: analytics :::::::::: */ ?>
		<!--
		<script>
			(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
			(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
			l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
			ga('send', 'pageview');
		</script>
		-->

	</body>
</html>
