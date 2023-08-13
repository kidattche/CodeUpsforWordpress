<?php get_header(); ?>

<div class="p-sub-mv js-mv-height">
    <div class="p-sub-mv__title">
      <div class="c-section-header--white">
        <h1 class="c-section-header__engtitle">news</h1>
        <p class="c-section-header__jatitle">お知らせ</p>
      </div>
    </div>
  </div>

  <!-- パンくず -->
  <div class="c-breadcrumb">
    <div class="l-inner">
      <div>HOME > NEWS > Webデザインニュースサイト「ウェブマガジン」に取材いただきました</div>
    </div>
  </div>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="l-single-body p-single-body">
    <div class="p-single-body__inner l-inner">
      <div class="p-single-body__title">
        <h1><?php the_title(); ?></h1>
      </div>
      <div class="p-single-body__meta">
        <div class="p-news-content">
          <div class="p-news-content__meta">
          <time datetime="the_time('c');" class="p-news-content__date"><?php the_time('Y.m.d'); ?></time>
          <p class="p-news-content__category"><?php echo $cat ?></p>
          </div>
        </div>
      </div>
      <div class="p-single-body__image">
        <?php if(get_the_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
        <?php else: ?>
            <img src="<?php the_post_thumbnail_url(); ?>/assets/images/common/noimage.jpg" alt="noimage">
        <?php endif; ?>
      </div>
      <div class="p-single-body__content">
        <?php the_content(); ?>
      </div>

      <div class="c-page-link">
        <div class="c-page-link__inner">
          <div class="c-page-link__flex">
            <div class="c-page-link__prev">
              <a href="">前の記事</a>
            </div>
            <div class="c-page-link__next">
              <a href="">次の記事</a>
            </div>
          </div>
          <div class="c-page-link__archive">
            <a href="">NEWS一覧</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endwhile; endif;?>


<?php get_footer(); ?>