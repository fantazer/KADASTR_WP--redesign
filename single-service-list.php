<?
/*
Template Name: service-list-town
*/
?>
<? wp_reset_query(); ?>
<? get_header(); ?>

<div class="page">
	<div class="main-cont-md mb-100">
		<? include('module/bread.php');?>
		<div class="text">
      <? the_title('<h1>', '</h1>'); ?>
      <? the_content(); ?>
      <?
      $listTemplate = array(37, 380);
      foreach ($listTemplate as &$listTemplateEl) {
        $parent_id = $listTemplateEl;
        $countOfCat = count(get_term_children($parent_id, 'category'));
        $countOfCat = round($countOfCat / 1, 0, PHP_ROUND_HALF_UP);;
        //echo $countOfCat;
        $sub_cats = get_categories(array(
          'child_of' => $parent_id,
          'hide_empty' => 0,
        ));
        $i = 0;
        if ($sub_cats) {
          foreach ($sub_cats as $cat) {
            if ($i < $countOfCat) {
              //echo $i;
              $id = $cat->term_id;
              //get_category_link($id);
              ?>
							<? include('module/townListDropdown.php'); ?>
              <?
            }
            $i++;

          }
          wp_reset_postdata(); // сбрасываем глобальную переменную пост
        }
      }
      ?>
		</div>
	</div>
	<? include('module/customers.php'); ?>
	<? include('module/popularService.php'); ?>
	<? include('module/news-list.php'); ?>
	<? include('module/questions.php'); ?>
</div>
<? get_footer() ?>
