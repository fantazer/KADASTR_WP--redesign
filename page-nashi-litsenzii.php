<?
/*
Template Name: licenses
*/
?>

<? get_header(); ?>

<div class="page">
	<div class="main-cont mb-100">
    <? include('module/bread.php'); ?>
		<div class="text">
      <? the_title('<h1>', '</h1>'); ?>
			<div class="g g-3 f-gap-24 sm__g-1">
        <? $imgJub = get_field('gallary', 'option'); ?>
        <?php foreach ($imgJub as $image): ?>
					<a class="fancybox" href="<?php echo $image['url']; ?>" rel="cert-img" data-fancybox="images">
						<img src="<?php echo $image['sizes']['medium']; ?>" alt=""/>
					</a>
        <?php endforeach; ?>
			</div>
		</div>
	</div>

  <? include('module/customers.php'); ?>
  <? include('module/popularService.php'); ?>
  <? include('module/news-list.php'); ?>
  <? include('module/questions.php'); ?>
  <? get_footer() ?>
