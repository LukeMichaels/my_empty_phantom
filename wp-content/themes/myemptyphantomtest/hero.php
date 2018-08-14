<?php
$hero_video = get_field( 'hero_video' );
$hero_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'hero' );
if( $hero_video ): ?>
	<section class="hero desktop-hero" style="overflow: hidden;">
		<video autoplay muted loop style="width:100%; height: auto; margin: 0 auto; position: relative; top: 50%; transform: translateY(-50%);">
			<source src="<?php echo $hero_video; ?>" type="video/mp4">
		</video>
		<div class="hero-content">
			<h1>
				<?php 
				$current = $post->ID;
				$parent = $post->post_parent;
				$grandparent_get = get_post($parent);
				$grandparent = $grandparent_get->post_parent;
				?>
				<?php if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {echo get_the_title($grandparent); }else {echo get_the_title($parent); }?>
			</h1>
		</div>
	</section>
	<section class="hero mobile-hero" style="background: url('<?php echo $hero_image[0]; ?>') no-repeat center center; background-size: cover;">
		<div class="hero-content">
			<h1>
				<?php 
				$current = $post->ID;
				$parent = $post->post_parent;
				$grandparent_get = get_post($parent);
				$grandparent = $grandparent_get->post_parent;
				?>
				<?php if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {echo get_the_title($grandparent); }else {echo get_the_title($parent); }?>
			</h1>
		</div>
	</section>
<?php else: ?>
	<section class="hero desktop-hero" style="background: url('<?php echo $hero_image[0]; ?>') no-repeat center center; background-size: cover;">
		<div class="hero-content">
			<h1>
				<?php 
				$current = $post->ID;
				$parent = $post->post_parent;
				$grandparent_get = get_post($parent);
				$grandparent = $grandparent_get->post_parent;
				?>
				<?php if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {echo get_the_title($grandparent); }else {echo get_the_title($parent); }?>
			</h1>
		</div>
	</section>
	<section class="hero mobile-hero" style="background: url('<?php echo $hero_image[0]; ?>') no-repeat center center; background-size: cover;">
		<div class="hero-content">
			<h1>
				<?php 
				$current = $post->ID;
				$parent = $post->post_parent;
				$grandparent_get = get_post($parent);
				$grandparent = $grandparent_get->post_parent;
				?>
				<?php if ($root_parent = get_the_title($grandparent) !== $root_parent = get_the_title($current)) {echo get_the_title($grandparent); }else {echo get_the_title($parent); }?>
			</h1>
		</div>
	</section>
<?php endif; ?>
