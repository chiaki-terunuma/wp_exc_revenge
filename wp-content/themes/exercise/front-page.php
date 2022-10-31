<?php get_header(); ?>
<main>
  <section>
    <div class="first-view">KV</div>
  </section>
  <section id="case">
    <h2>CASE</h2>
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
            <img src="<?php echo get_the_post_thumbnail_url($post->ID, '')?>" class="case-list-item__thum"/>
            <div class="case-list-item_contents">
              <p><?php the_title();?></p>
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