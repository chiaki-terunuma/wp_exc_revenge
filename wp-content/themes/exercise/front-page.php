<?php get_header(); ?>
<main>
  <section>
    <div class="first-view">KV</div>
  </section>
  <section id="case">
    <h2 class="section-title">Case study</h2>
    <p class="section-sub-title">事例紹介</p>
    <ul class="case-list">
      <?php
        $case_args = array(
          'post_type'      => 'case',
          'posts_per_page' => 3,
          //'order_by'       => 'title',
          'order'          => 'ASC'
        );
        $case_query = new WP_Query($case_args);
        if ($case_query->have_posts()):
          while ($case_query->have_posts()):$case_query->the_post();
      ?>
        <li class="case-list-item">
          <a href="<?php the_permalink(); ?>">
            <div class="case-list-item__thum">
              <div style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID, '')?>')"></div>
            </div>
            <div class="case-list-item__contents">
              <p class="case-list-item__title"><?php the_title();?></p>
              <p class="case-list-item__text">
                テキストのみ入れたい。テキストのみ入れたい。テキストのみ入れたい。テキストのみ入れたい。テキストのみ入れたい。テキストのみ入れたい。テキストのみ入れたい。
              </p>
            </div>
          </a>
        </li>
      <?php
        endwhile;
        endif;
      ?>
    </ul>

    <div class="yellow-button">
      <a href="/">
        事例紹介一覧
      </a>
    </div>
  </section>
</main>
<?php get_footer(); ?>