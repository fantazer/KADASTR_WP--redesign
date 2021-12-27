<?
/*
Template Name: service
*/
?>

<? get_header(); ?>

<?
wp_reset_query();
$current_id = get_the_ID();
?>

<div class="page">
	<div class="main-cont-md">
		<? include('module/bread.php');?>
		<div class="text">
      <? the_title('<h1>', '</h1>'); ?>
      <div class="mb-100">
        <?the_content();?>
      </div>
      <? if ($current_id == 14794) {
        $parent_id = 37;
        $countOfCat = count(get_term_children($parent_id, 'category'));
        $countOfCatStart = round($countOfCat / 3, 0, PHP_ROUND_HALF_UP);;
        $sub_cats = get_categories(array(
          'child_of' => $parent_id,
          'hide_empty' => 0,
        ));
        $i = 0;
        if ($sub_cats) {
          foreach ($sub_cats as $cat) {
            if ($i > $countOfCatStart && $i < $countOfCatStart * 2) {
              $id = $cat->term_id;
              ?>
							 <? include('module/townListDropdown.php'); ?>
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
              $id = $cat->term_id;
              ?>
							 <? include('module/townListDropdown.php'); ?>
              <?
            }
            $i++;
          }
          wp_reset_postdata(); // сбрасываем глобальную переменную пост
        }
      } ?>
		</div>
	</div>
</div>

<div class="main-cont-md">
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

<? if (!is_page(array(2133, 2125, 2131))) { ?>
	<? include('module/customers.php'); ?>
	<? include('module/popularService.php'); ?>
	<? include('module/news-list.php'); ?>
	<? include('module/questions.php'); ?>
<? } ?>
<? get_footer() ?>




