<? get_header(); ?>

<? include('module/bread.php'); ?>

<div class="main-cont">
	<div class="content">
    <? include('module/toolbar.php'); ?>
		<div class="content__info">
			<h1>
        <?= single_cat_title(); ?></h1>
      <? $categories = get_the_category(); ?>
      <? if ($categories[0]->cat_ID === 14) { ?>
				<div class="news news--list">
				 <?
				  $args = array(
					  'cat'=> 14,
					  'posts_per_page' => 100,
					  'orderby' => 'date',
					  'order' => 'DESC'
				  );
					?>
				 <? query_posts($args);?>
				 <? while (have_posts()) : the_post(); ?>
				    <a href="<?=get_permalink(); ?>" class="news__el">
							<div class="news__el-date"><?=get_the_date('j F Y'); ?></div>
							<div class="news__el-title"><?=get_the_title(); ?></div>
							<div class="news__el-text"><?=wp_trim_words(get_the_content(), 12, ' ...' );?>
							</div>
						</a>
				 <? endwhile; ?>
				</div>
				 <? wp_reset_query();?>
      <?
      } else {

        $category_id_first = $categories[0]->cat_ID;
        $category_id_second = $categories[1]->cat_ID;
        echo $categories[0]->cat_ID;
        if ($category_id_first == 37) {
          $currentCat = $category_id_second;
        } else {
          $currentCat = $category_id_first;
        }
        $args = array(
          'cat' => $currentCat,
          'order' => 'DESC',
          'posts_per_page' => 100,
        );
        ?>
				<ul class="list-items">
          <? query_posts($args); ?>
          <? while (have_posts()) : the_post(); ?>
						<!-- can write -->
						<a href="<?= get_permalink(); ?>">
							<li>
                <?
                $result = explode(' в ', get_the_title(), 2);
                echo ltrim($result[0]);

                ?>
							</li>
						</a>
          <? endwhile; ?>
          <? wp_reset_query(); ?>
				</ul>

      <? } ?>
		</div>
	</div>
</div>

<? if (!is_page(array(2133, 2125, 2131))) { ?>
  <? include('module/sertificate.php'); ?>
  <? include('module/customers.php'); ?>
  <? include('module/contact-form.php'); ?>
<? } ?>
<? get_footer() ?>
