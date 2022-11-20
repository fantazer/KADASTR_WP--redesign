<!--display errors-->
<? ini_set('display_errors', 'off'); ?>

<?
$post = $wp_query->post;
if (in_category(array(11, 15, 19, 29))) { //ID категории
  include('single-town-list.php');
} elseif (in_category(array(33, 34))) {
  include('single-kadastral-enginer--list.php');
} elseif (in_category(36)) {
  include('single-geodez--list.php');
} elseif (in_category(array(37))) {
  include('single-all-sevices.php');
} elseif (in_category(array(380))) {
  include('single-serviceTemplate.php');
}
else { ?>

<? wp_reset_query(); ?>
<? get_header(); ?>
</div>
<div class="page">
	<div class="main-cont-md">
    <? include('module/bread.php'); ?>
		<div class="text">
      <? the_title('<h1>', '</h1>'); ?>
      <? if (in_category(12)) { ?>
				<div class="psv-4 psh-16 bg--fieldBackground type--typePrimary mb-24 br-4 dib type-sm type--w700"><?= the_date(); ?></div>
      <? } ?>
      <? the_content(); ?>

      <? porstAfter(11, true); ?>
      <? porstAfter(14, true); ?>
      <? porstAfter(15, true); ?>


			<!-- for page service city list -->
      <?php if (is_single('193')): ?>
        <? $_GET['catTown'] = 11; ?>
        <? include('module/town-list.php') ?>
      <?php endif ?>
			<!-- for page service city list -->

      <?php if (is_single('ПРАЙС-ЛИСТ')): ?>
        <? $_GET['catTown'] = 15; ?>
        <? include('module/town-list.php') ?>
      <?php endif ?>

			<!-- Страница примеры работ -->
      <?php if (is_single('174')): ?>
        <? $_GET['catTown'] = 33; ?>
        <? include('module/town-list.php') ?>
      <?php endif ?>
			<!-- Страница примеры работ === end -->

			<!-- for page about -->
      <?php if (is_single('9')): ?>
        <? $_GET['catTown'] = 19; ?>
        <? include('module/town-list.php') ?>
      <?php endif ?>
			<!-- for page about -->

			<div class="seo_text">
        <?php echo CFS()->get('seo_text'); ?>
			</div>
			<div class='mb-32'></div>

      <?
      //for cat cadastr
      porstAfter(6, true);
      //for cat geodez
      porstAfter(7, true);
      //for Megavanie
      porstAfter(8, true);
      //for razdel-pereraspredelenie
      porstAfter(9, true);
      //for kadastrovy-e-raboty
      porstAfter(16, true);
      //for kadastrovy-e-raboty town
      porstAfter(19, true);
      porstAfter(29, true);
      ?>

		</div>
	</div>
  <? } ?>

	<div class="mt-100"></div>
  <? if (!in_category(array(380))) { ?>
    <? include('module/customers.php'); ?>
    <? include('module/popularService.php'); ?>
    <? include('module/news-list.php'); ?>
    <? include('module/questions.php'); ?>
    <? get_footer(); ?>
  <? } ?>

