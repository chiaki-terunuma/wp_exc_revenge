<?php get_header(); ?>
  <div class="page-wrapper">
    <div class="page-inner">
    <article>
      <div class="case-thum"><div style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID, '')?>')"></div></div>
      <div class="case-container">
        <div class="case-content-header">
          <p>東京都台東区　サトウサンプル</p>
          <ul class="tags case-tags">
            <li>hoge</li>
            <li>piyo</li>
            <li>puni</li>
          </ul>
        </div>
        <h1 class="case-title"><?php the_title(); ?></h1>
        <div class="case-contents">
          <?php the_content(); ?>
        </div>
      </div>
    </article>
    </div>
  </div>
<?php get_footer(); ?>