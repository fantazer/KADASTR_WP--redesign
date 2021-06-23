<?
/*
 * Template Name: serviceTemplate
 * Template Post Type: post, page, product
 */
?>
<? get_header('lp'); ?>

<div class="main-cont">

	<h1><?= the_title(); ?></h1>

	<hr class="mb-32">
	<h2>Описание</h2>
	<p><?= get_field('second-title'); ?></p>

	<hr class="mb-32">
	<h2>Зачем нужно</h2>
  <?= get_field('whyNeed'); ?>

	<hr class="mb-32">
	<h2>Как работает</h2>
  <?= get_field('howwork'); ?>

	<hr class="mb-32">
	<h2>Какие нужны документы</h2>
  <? while (have_rows('needDoc')): the_row(); ?>
		<p><b><? the_sub_field('needDocTitle'); ?></b> - <? the_sub_field('needDocText'); ?></p><br>
  <? endwhile; ?>

	<hr class="mb-32">
	<h2>Цена услуги</h2>
	<b><?= get_field('cost'); ?></b>

	<hr class="mb-32">
	<h2>Ссылка на прайс</h2>
	<b><?= get_field('costlink'); ?></b>

	<hr class="mb-32">
	<h2>Что войдет в стоимость</h2>
	<ol>
    <? while (have_rows('costconsist')): the_row(); ?>
			<li><? the_sub_field('costConsistEl'); ?></li>
    <? endwhile; ?>
	</ol>

	<hr class="mb-32">
	<h2>Что войдет в стоимость</h2>
	<ol>
    <? while (have_rows('stepwork')): the_row(); ?>
			<li><? the_sub_field('stepworkel'); ?></li>
    <? endwhile; ?>
	</ol>

</div>


<? include('module/advant.php'); ?>

<? include('module/customers.php'); ?>
<? include('module/sertificate.php'); ?>
<? include('module/contact-form.php'); ?>

<? get_footer(); ?>
