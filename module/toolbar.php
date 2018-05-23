<div class="content__toolbar">
	<?php get_search_form(); ?>

	<div class="toolbar">
		<div class="toolbar__title">Популярные услуги</div>
    <?
    	$args = array(
      'order' => 'DESC',
      'tag'=> 'main-service',
    	);
    ?>
    <? query_posts($args);?>
    <? while (have_posts()) : the_post(); ?>
    		<!-- can write -->
    		<a class="toolbar__el" href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
    		<!-- can write -->
    <? endwhile; ?>
    <? wp_reset_query();?>

	</div>
	<div class="toolbar">
		<div class="toolbar__title">Нормативная документация</div>
		<?
    	$args = array(
    	'cat'=> 10,
      'order' => 'DESC'
    	);
    ?>
    <? query_posts($args);?>
    <? while (have_posts()) : the_post(); ?>
    		<!-- can write -->
    		<a class="toolbar__el" href="<?=get_permalink(); ?>"><?=get_the_title(); ?></a>
    		<!-- can write -->
    <? endwhile; ?>
    <? wp_reset_query();?>
	</div>



	<!-- VK Widget -->


<!-- VK Widget -->
<!--<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 3, no_cover: 1, width: "auto", color2: '443783'}, 154622563);
</script>-->
</div>