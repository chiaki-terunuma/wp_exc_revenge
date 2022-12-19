<?php get_header(); ?>
<div class="page-wrapper">
  <div class="page-inner">
  <?php if (have_posts()): //投稿があるかどうかの判別 ?>
    <?php while (have_posts()) : the_post(); //投稿がある場合while文で一つずつ投稿を取り出し、the_post()でセット  ?>
      <!-- ここにループ内容 -->
      <p><?php the_title(); ?></p>
    <?php endwhile; ?>
    <?php else: ?>
      <!-- 投稿が無い場合の内容 -->
  <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>