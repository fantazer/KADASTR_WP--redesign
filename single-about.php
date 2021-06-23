<?
/*
 * Template Name: about
 * Template Post Type: post, page, product
 */
?>

<? get_header(); ?>
<? include('module/bread.php'); ?>


<div class="section section--about">
	<div class="section-title">О нашей компании</div>
	<div class="main-cont">
		<div class="about-content">
			<div class="about-text">
        <? while (have_posts()) : the_post(); ?>
          <? the_content(); ?>
        <? endwhile; ?>
			</div>
			<div class="about-img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/company.jpg" alt="">
			</div>
		</div>
	</div>
</div>

<div class="personal-content">
	<div class="main-cont">
		<div class="section-title">Наши сотрудники</div>
		<div class="personal">
      <?
      $args = array(
        'cat' => 31,
        'orderby' => 'menu_order',
        'order' => 'ASC'
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


<div class="section section--certificate wow fadeIn" data-wow-duration="2s" data-wow-delay=".75s">
	<div class="filter"></div>
	<div class="section-title">Отзывы о нас</div>
	<div class="main-cont">
		<div class="slider-certificate owl-carousel">
			<div class="slider__el">
				<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/img/review/review-1.jpg" rel="group-elemen">
					<img src="<?php echo get_template_directory_uri(); ?>/img/review/review-1.jpg" alt=""/>
				</a>
			</div>
			<div class="slider__el">
				<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/img/review/review-4.jpg" rel="group-elemen">
					<img src="<?php echo get_template_directory_uri(); ?>/img/review/review-4.jpg" alt=""/>
				</a>
			</div>
			<div class="slider__el">
				<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/img/review/review-3.jpg" rel="group-elemen">
					<img src="<?php echo get_template_directory_uri(); ?>/img/review/review-3.jpg" alt=""/>
				</a>
			</div>
			<div class="slider__el">
				<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/img/review/review-2.jpg" rel="group-elemen">
					<img src="<?php echo get_template_directory_uri(); ?>/img/review/review-2.jpg" alt=""/>
				</a>
			</div>
			<div class="slider__el">
				<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/img/review/review-5.jpg" rel="group-elemen">
					<img src="<?php echo get_template_directory_uri(); ?>/img/review/review-5.jpg" alt=""/>
				</a>
			</div>
			<div class="slider__el">
				<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/img/review/review-7.jpg" rel="group-elemen">
					<img src="<?php echo get_template_directory_uri(); ?>/img/review/review-7.jpg" alt=""/>
				</a>
			</div>
			<div class="slider__el">
				<a class="fancybox" href="<?php echo get_template_directory_uri(); ?>/img/review/review-6.jpg" rel="group-elemen">
					<img src="<?php echo get_template_directory_uri(); ?>/img/review/review-6.jpg" alt=""/>
				</a>
			</div>
			<!--	<? /* $imgJub = get_field('review', 'option'); */ ?>
			<?php /*foreach( $imgJub as $image ): */ ?>
				<div class="slider__el">
					<a class="fancybox" href="<?php /*echo $image['url']; */ ?>" rel="group-elemen">
						<img src="<?php /*echo $image['url']; */ ?>" alt=""/>
					</a>
				</div>
			--><?php /*endforeach; */ ?>
		</div>
	</div>
</div>

<? include('module/contact-form.php'); ?>

<div class="section section--towns">
	<div class="section-title">Услуги в других городах</div>
	<div class="main-cont">
		<div class="towns-list">
      <?
      $args = array(
        'cat' => array(11, 19),
        'order' => 'ASC'
      );
      ?>
      <? query_posts($args); ?>
      <? while (have_posts()) : the_post(); ?>
				<a href="<?= get_permalink() ?>" class="towns-list__el">
          <?= CFS()->get('namecity') ?>
				</a>
      <? endwhile; ?>
      <? wp_reset_query(); ?>

		</div>
	</div>
</div>

<? get_footer(); ?>
