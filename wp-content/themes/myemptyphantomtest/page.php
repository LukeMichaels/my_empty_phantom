<?php get_header(); ?>

	<main role="main" class="default">

		<?php include 'hero.php'; ?>

		<section class="page-content">
			<div class="row">
				<div class="main-col">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="title-wrap">
							<?php if( get_field('icon') ): ?>
								<div class="icon">
									<img src="<?php the_field('icon'); ?>">
								</div>
							<?php endif; ?>
							<div class="title">
								<?php if( get_field('page_headline') ): ?>
									<h2><?php the_field('page_headline'); ?></h2>
								<?php else: ?>
									<h2><?php echo $post->post_title; ?></h2>
								<?php endif; ?>
							</div>
						</div>
						<div class="content-wrap">
							<?php the_content(); ?> 
						</div>
					<?php endwhile; endif; ?> 
				</div>
				<div class="side-col">
					<?php if( get_field('sidebar_image') ): ?>
						<div class="side-image">
							<img src="<?php the_field('sidebar_image'); ?>">
						</div>
					<?php endif; ?>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</section>

	</main>

<?php get_footer(); ?>
