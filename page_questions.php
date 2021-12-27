<?
/*
Template Name: questions
*/
?>

<? get_header(); ?>


<div class="page">
	<div class="main-cont">
    <? include('module/bread.php'); ?>
		<div class="text mb-64">
      <? the_title('<h1>', '</h1>'); ?>
      <?
      $args = array(
        'cat' => 5,
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 12,
      );
      ?>
      <? query_posts($args); ?>
      <? while (have_posts()) : the_post(); ?>
				<div class="js-accordion">
					<div class="accordion__el js-accordion-el">
						<div class="accordion__el-head js-accordion-head">
							<div class="accordion__el-head-text type--w500 type--title w80 sm__type--12"><?= CFS()->get('vopros'); ?></div>
							<div class="accordion__el-head-icon"></div>
						</div>
						<div class="accordion__el-content text js-accordion-content">
              <?= the_content(); ?>
						</div>
					</div>
				</div>
      <? endwhile; ?>
      <? wp_reset_query(); ?>

		</div>
      <? $_GET['catTown'] = 30; ?>
      <? include('module/town-list.php') ?>

	</div>
</div>

<? include('module/customers.php'); ?>
<? include('module/popularService.php'); ?>
<? include('module/news-list.php'); ?>
<? get_footer(); ?>




