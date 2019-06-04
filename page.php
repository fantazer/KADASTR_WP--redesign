<?
/*
Template Name: service
*/
?>

<? get_header(); ?>

<?
include('module/bread.php');
$current_id = get_the_ID();
?>

<div class="main-cont">
	<div class="content">
    <? include('module/toolbar.php'); ?>
		<div class="content__info">
      <? the_title('<h1>', '</h1>'); ?>
      <?
      the_content();
      ?>
      <? //Вывод частей списка городов ?>
      <? if ($current_id == 14794) {
        $parent_id = 37;
        $countOfCat = count(get_term_children($parent_id, 'category'));
        $countOfCatStart = round($countOfCat / 3, 0, PHP_ROUND_HALF_UP);;
        echo $countOfCat;
        $sub_cats = get_categories(array(
          'child_of' => $parent_id,
          'hide_empty' => 0,
        ));
        $i = 0;
        if ($sub_cats) {
          foreach ($sub_cats as $cat) {
            if ($i > $countOfCatStart && $i < $countOfCatStart * 2) {
              //echo $i;
              $id = $cat->term_id;
              //get_category_link($id);
              ?>
							<div class="akkord-el">
								<div class="akkord-el__head">
									<div class="akkord-el__head-name">
                    <?= $cat->name; ?>
									</div>
									<div class="akkord-el__head-icon">
										<svg class="icon">
											<use xlink:href="#arrow-down"></use>
										</svg>
									</div>
								</div>
								<div class="akkord-el__list">
									<ul>
                    <?
                    $args = array(
                      'cat' => $id,
                      'posts_per_page' => 9999,
                      //'offset' => 1,

                    );
                    ?>
                    <? query_posts($args); ?>
                    <? while (have_posts()) : the_post(); ?>
											<li>
												<a href="<?= get_permalink(); ?>"> <?= get_the_title(); ?></a>
											</li>
                    <? endwhile; ?>
                    <? wp_reset_query(); ?>
									</ul>
								</div>
							</div>
              <?
            }
            $i++;

          }
          wp_reset_postdata(); // сбрасываем глобальную переменную пост
        }

      } ?>
      <? if ($current_id == 2139) {
        echo "<h2 style='margin-top: 400px;'>Услуги в других городах</h2>";
        $parent_id = 37;
        $countOfCat = count(get_term_children($parent_id, 'category'));
        $countOfCatStart = round($countOfCat / 3, 0, PHP_ROUND_HALF_UP);;
        //echo $countOfCat;
        $sub_cats = get_categories(array(
          'child_of' => $parent_id,
          'hide_empty' => 0,
        ));
        $i = 0;
        if ($sub_cats) {
          foreach ($sub_cats as $cat) {
            if ($i > $countOfCatStart * 2 - 1 && $i < $countOfCatStart * 3) {
              //echo $i;
              $id = $cat->term_id;
              //get_category_link($id);
              ?>
							<div class="akkord-el">
								<div class="akkord-el__head">
									<div class="akkord-el__head-name">
                    <?= $cat->name; ?>
									</div>
									<div class="akkord-el__head-icon">
										<svg class="icon">
											<use xlink:href="#arrow-down"></use>
										</svg>
									</div>
								</div>
								<div class="akkord-el__list">
									<ul>
                    <?
                    $args = array(
                      'cat' => $id,
                      'posts_per_page' => 9999,
                      //'offset' => 1,

                    );
                    ?>
                    <? query_posts($args); ?>
                    <? while (have_posts()) : the_post(); ?>
											<li>
												<a href="<?= get_permalink(); ?>"> <?= get_the_title(); ?></a>
											</li>
                    <? endwhile; ?>
                    <? wp_reset_query(); ?>
									</ul>
								</div>
							</div>
              <?
            }
            $i++;
          }
          wp_reset_postdata(); // сбрасываем глобальную переменную пост
        }

      } ?>
		</div>
	</div>

  <?
  //echo get_the_ID();
  if ($current_id == 2129): ?>
	<div class="city-title">Популярные населенные пункты:</div>
	<div class="city-wrap">
    <?
    $args = array(
      'cat' => 15,
      'order' => 'ASC'
    );
    query_posts($args);
    while (have_posts()) : the_post();
      printf('
                        <div class="city-el">
                            <a href="%s">%s</a>
                        </div>
                ', get_permalink(), CFS()->get('namecity'));
    endwhile;
    wp_reset_query();
    ?>
    <?php endif ?>
    <?
    //вывод списка Города-геодезия single-geodez--list.php
    if ($current_id == 2131): ?>
		<div class="city-title">Услуги в других городах:</div>
		<div class="city-wrap">
      <?
      $args = array(
        'cat' => 36,
        'order' => 'ASC'
      );
      query_posts($args);
      while (have_posts()) : the_post();
        printf('
                        <div class="city-el">
                            <a href="%s">%s</a>
                        </div>
                ', get_permalink(), CFS()->get('namecity'));
      endwhile;
      wp_reset_query();
      ?>
      <?php endif ?>
		</div>
	</div>
</div>
<?
//echo get_the_ID();
?>
<? if (!is_page(array(2133, 2125, 2131))) { ?>
  <? include('module/sertificate.php'); ?>
  <? include('module/customers.php'); ?>
  <? include('module/contact-form.php'); ?>
<? } ?>
<? get_footer() ?>




