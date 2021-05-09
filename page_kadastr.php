<?
/*
Template Name: kadastr
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
				  'menu' => 'КАДАСТРОВЫЕ РАБОТЫ',
				  'menu_class' => 'menu__list',
				);
				wp_nav_menu($args);
			?>
			</div>
			<h2>Дополнительные услуги</h2>
			<ul>
				<?
					$args = array('cat' => 16,
						'order' => 'ASC'
					);
					query_posts($args);
					while (have_posts()) : the_post();
						printf('<li><a href="%s">%s</a></li>', get_permalink(), get_the_title());
					endwhile;
					wp_reset_query();
				?>
			</ul>

			<div class="seo_text">
				<? the_content(); ?>
			</div>

			<? $_GET['catTown'] = 29; ?>
			<? include('module/town-list.php')?>

		</div>
	</div>
</div>

<? include('module/sertificate.php'); ?>
<? include('module/customers.php'); ?>
<? include('module/contact-form.php'); ?>
<? get_footer(); ?>

