<?
/*
Template Name: service
*/
?>

<? get_header(); ?>

<?include('module/bread.php');?>

<div class="main-cont">
	<div class="content">
    <? include('module/toolbar.php'); ?>
		<div class="content__info">
			<?the_title('<h1>', '</h1>');?>
				<ul class="services_list">
					 <?
					 	$args = array(
					 	'category__in'=> array(6,7),
					 	'order' => 'ASC'
					 	);
					 ?>
					 <? query_posts($args);?>
					 <? while (have_posts()) : the_post(); ?>
					 		<li><a href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a></li>
					 <? endwhile; ?>
					 <? wp_reset_query();?>
				</ul>
				<? $_GET['catTown'] = array(11,19); ?>
				<? include('module/town-list.php')?>
			</div>
	</div>
</div>

<?include('module/sertificate.php');?>
<?include('module/customers.php');?>
<?include('module/contact-form.php');?>
<? get_footer(); ?>




