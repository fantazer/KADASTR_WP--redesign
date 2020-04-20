<?
/*
 * Template Name: team
 * Template Post Type: post, page, product
 */
?>

<? get_header(); ?>

<? include('module/bread.php'); ?>

<div class="personal-content">
	<div class="main-cont">
		<div class="personal-full">
			<div class="personal-full__img" style="background-image:url(<?= get_field('logo'); ?>);"></div>
			<div class="personal-full__el-info">
				<div class="personal-full__el-title"><?= get_the_title(); ?></div>
				<div class="personal-full__el-position"><?= get_field('staff'); ?></div>
				<div class="personal-full__el-text">
					 <? while (have_posts()) : the_post(); ?>
					 		<?=get_the_content();?>
					 <? endwhile; ?>
					 <? wp_reset_query();?>
				</div>
			</div>
		</div>
	</div>

	<div class="main-cont">
		<div class="section-title">Наши сотрудники</div>
		<div class="personal">
      <?
      $args = array(
        'cat' => 31,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'post__not_in' => array( $post->ID )
      );
      ?>
      <? query_posts($args); ?>
      <? while (have_posts()) :
        the_post(); ?>
				<a class="personal__el" href="<?= get_permalink(); ?>">
					<div class="personal__el-img-wrap">
						<div class="personal__el-img" style="background-image:url(<?= get_field('logo'); ?>);"></div>
						<div class="personal__el-arrow">
							<svg class="icon">
								<use xlink:href="#arrow-right-fat"></use>
							</svg>
						</div>
					</div>
					<div class="personal__el-info">
						<div class="personal__el-title"><?= get_the_title(); ?></div>
						<div class="personal__el-position"><?= get_field('staff'); ?></div>
					</div>
				</a>
      <? endwhile; ?>
      <? wp_reset_query(); ?>
		</div>
	</div>
</div>

<? include('module/sertificate.php'); ?>
<? include('module/customers.php'); ?>
<? include('module/contact-form.php'); ?>
<? get_footer(); ?>




