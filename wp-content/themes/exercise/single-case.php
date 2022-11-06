<?php get_header(); ?>
  <div class="page-wrapper">
    <div class="page-inner">
    <article>
      <div class="case-thum"><div style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID, '')?>')"></div></div>
      <div class="case-container">
        <h1 class="case-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
    </article>
    </div>
  </div>
<?php get_footer(); ?>