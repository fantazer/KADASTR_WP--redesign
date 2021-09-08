<?
/*
Template Name: service-list-town
*/
?>

<? get_header(); ?>

<?
include('module/bread.php');
?>

<div class="main-cont">
	<div class="content">
    <? include('module/toolbar.php'); ?>
		<div class="content__info">
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

        echo "<hr>";
      }
      ?>


      <? //new template ?>


		</div>
	</div>
</div>


<? if (!is_page(array(2133, 2125, 2131))) { ?>
  <? include('module/sertificate.php'); ?>
  <? include('module/customers.php'); ?>
  <? include('module/contact-form.php'); ?>
<? } ?>
<? get_footer() ?>
