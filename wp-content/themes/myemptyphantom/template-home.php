<?php /* Template Name: Home */ get_header(); ?>

	<main role="main" class="page-content home">

		<?php
		if( have_rows('slider') ): ?>
			<section id="image-slider" class="slider">
				<?php
				while ( have_rows('slider') ) : the_row();
					$photo = get_sub_field( 'image' );
					$size	= 'large';
					$image = wp_get_attachment_image_src( $photo, $size );
					$text = get_sub_field('text');
					$link_text = get_sub_field('link_text');
					$link_anchor = get_sub_field('link_anchor'); ?>
					<div class="slide" style="background-image: url('<?php echo $image[0]; ?>');">
						<div class="row">
							<?php if( $text ): ?>
								<div class="text">
									<?php echo $text ?>
								</div>
							<?php endif; ?>
							<?php if( $link_anchor ): ?>
								<a class="" href="<?php echo $link_anchor ?>">
									<?php echo $link_text ?> >
								</a>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			</section>
		<?php endif; ?>

		

	</main>

<?php get_footer(); ?>
