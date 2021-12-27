<? get_header(); ?>
<?
$categories = get_the_category();
$catID = $categories[0]->cat_ID;
if (in_array($catID, array(6, 7,398,399))) { ?>
	<div class="page">
		<div class="main-cont">
      <? include('module/bread.php'); ?>
			<div class="text">
				<h1><?= single_cat_title(); ?></h1>
			</div>
			<div class="g g-2 f-gap-24 sm__g-1 mb-32">
        <?
        $args = array(
          'cat' => $categories[0]->cat_ID,
          'posts_per_page' => 100,
          'orderby' => 'date',
          'order' => 'DESC'
        );
        ?>
        <? query_posts($args); ?>
        <? while (have_posts()) : the_post(); ?>
					<div class="p-32 bor bor--border f f-col bg--white br-8">
						<a href="<?= get_permalink(); ?>" class="type--w500 type--title type--md mb-24 type-h--mark"><?= get_the_title(); ?></a>
						<div class="type--14 type--main mb-32 type--lh-1_6">
							<?
								if(get_the_content()){ echo wp_trim_words(get_the_content(), 12, ' ...');}
								if(get_field('subTitle')){ echo get_field('subTitle');}
							?>
						</div>
						<div class="type--md type--w700 mb-24 mt-a">
							<?
								if(get_field('cost')){ echo get_field('cost')." руб";}
								if(get_field('price-true')){ echo get_field('price-true')." руб";}
							?>
						</div>
					<div class="f sm__fw">
							<a href="<?= get_permalink(); ?>" class="btn btn--md btn--light sm__w100 sm__mb-10">Подробнее</a>
							<div class="btn btn--md btn--mark ml-24 sm__w100 sm__ml-0">Заказать</div>
						</div>
					</div>
        <? endwhile; ?>
        <? wp_reset_query(); ?>
			</div>
      <? $_GET['catTown'] = 29; ?>
      <? include('module/town-list.php') ?>
		</div>
	</div>
<? } else { ?>
  <? if (!is_page(array(2133, 2125, 2131))) { ?>
    <? include('module/sertificate.php'); ?>
    <? include('module/customers.php'); ?>
    <? include('module/contact-form.php'); ?>
  <? } ?>
<? } ?>
<? get_footer() ?>
