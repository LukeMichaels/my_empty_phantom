<?php get_header(); ?>

  <main role="main">

    <section>

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php the_content(); ?>
          <?php comments_template( '', true ); // Remove if you don't want comments ?>
          <br class="clear">
          <?php edit_post_link(); ?>
        </article>
      <?php endwhile; else: ?>
        <article>
          <h2><?php _e( 'Sorry, nothing to display.', 'juno' ); ?></h2>
        </article>
      <?php endif; ?>

    </section>

  </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
