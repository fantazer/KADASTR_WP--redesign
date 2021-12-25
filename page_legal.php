<?
/*
Template Name: legal
*/
?>

<? get_header(); ?>
<?include('module/bread.php'); ?>

<div class="main-cont">
	<div class="content">
		<? include('module/toolbar.php'); ?>
		<div class="content__info">
			<? the_title('<h1>', '</h1>'); ?>
			<div class="number-list">
			<?
				$args = array(
				  'menu' => 'Юридические услуги',
				  'menu_class' => 'menu__list',
				);
				wp_nav_menu($args);
			?>
			</div>
		</div>
	</div>
</div>

<? include('module/sertificate.php'); ?>
<? include('module/customers.php'); ?>
<? include('module/contact-form.php'); ?>
<? get_footer(); ?>

