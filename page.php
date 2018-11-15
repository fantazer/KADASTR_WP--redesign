<?
/*
Template Name: service
*/
?>

<? get_header(); ?>

<?
	include('module/bread.php');
?>

<div class="main-cont">
	<div class="content">
    <? include('module/toolbar.php'); ?>
		<div class="content__info">
			<?the_title('<h1>', '</h1>');?>
			<?
				the_content();
			?>
		</div>
	</div>

<?
		$current_id = get_the_ID();
		//echo get_the_ID();
		if ( $current_id == 2129 ): ?>
          <div class="city-title">Популярные населенные пункты:</div>
             <div class="city-wrap">
             <?
                $args = array(
                'cat'=> 15,
                'order' => 'ASC'
                );
                query_posts($args);
                while (have_posts()) : the_post();
                printf('
                        <div class="city-el">
                            <a href="%s">%s</a>
                        </div>
                ',get_permalink(),CFS()->get('namecity'));
                 endwhile;
                 wp_reset_query();
             ?>
        <?php endif ?>
    <?
      //вывод списка Города-геодезия single-geodez--list.php
      if ( $current_id == 2131 ): ?>
          <div class="city-title">Услуги в других городах:</div>
             <div class="city-wrap">
             <?
                $args = array(
                'cat'=> 36,
                'order' => 'ASC'
                );
                query_posts($args);
                while (have_posts()) : the_post();
                printf('
                        <div class="city-el">
                            <a href="%s">%s</a>
                        </div>
                ',get_permalink(),CFS()->get('namecity'));
                 endwhile;
                 wp_reset_query();
             ?>
        <?php endif ?>
	</div>
	</div>
</div>
<?
	//echo get_the_ID();
?>
<? if(!is_page(array(2133,2125,2131))){ ?>
	<? include('module/sertificate.php'); ?>
	<? include('module/customers.php'); ?>
	<? include('module/contact-form.php'); ?>
<? } ?>
<? get_footer()?>




