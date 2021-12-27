<?
/*
 * Template Name: thanks
 * Template Post Type: post, page, product
 */
?>

<? get_header(); ?>

<div class="page">
	<div class="main-cont mb-100">
    <? include('module/bread.php'); ?>

    <?
    $repeater = get_field('thanksEl');
    foreach ($repeater as $key => $row) {
      $column_id[$key] = strtotime($row['date']);
    }
    array_multisort($column_id, SORT_DESC, $repeater);
    $currMonth = "start";
    foreach ($repeater as $row) { ?>
			<div class="recall-el">
				<div class="recall-head">
          <?

          if ($row['img']) {
            $photoRecall = $row['img'];
          } else {
            $photoRecall = 'https://cgiku.ru/wp-content/uploads/2020/04/man.jpg';
          }
          ?>
					<div class="recall-head__img" style="background-image:url(<?= $photoRecall ?>)"></div>
					<div class="recall-head__name"><?= $row['name']; ?></div>
				</div>
				<div class="recall-date-wrap">
					<div class="star-row">
						<img src="<?= get_template_directory_uri(); ?>/img/star.svg" alt="">
						<img src="<?= get_template_directory_uri(); ?>/img/star.svg" alt="">
						<img src="<?= get_template_directory_uri(); ?>/img/star.svg" alt="">
						<img src="<?= get_template_directory_uri(); ?>/img/star.svg" alt="">
						<img src="<?= get_template_directory_uri(); ?>/img/star.svg" alt="">
					</div>
					<div class="recall-date-val"><?= $row['date']; ?></div>
				</div>
				<div class="recall-info"> <?= $row['text'] ?></div>
			</div>

    <? } ?>

    <? while (have_rows('thanksEl')) : the_row(); ?>

    <? endwhile; ?>
	</div>
</div>

<? include('module/customers.php'); ?>
<? include('module/popularService.php'); ?>
<? include('module/news-list.php'); ?>
<? include('module/questions.php'); ?>
<? get_footer() ?>
