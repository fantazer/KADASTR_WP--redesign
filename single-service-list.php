<?
/*
Template Name: service-list-town
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
            <?the_content();?>

            <? 
                $parent_id = 37;

                # получаем дочерние рубрики
                $sub_cats = get_categories( array(
                    'child_of' => $parent_id,
                    'hide_empty' => 0
                ) );
                if( $sub_cats ){
                    foreach( $sub_cats as $cat ){?>
                       <a href="<?=get_category_link( $cat->term_id ); ?>"><h3><?=$cat->name; ?></h3></a> 
                <?
                    }
                    wp_reset_postdata(); // сбрасываем глобальную переменную пост
                } 
            ?>  
    </div>
</div>
</div>


<? if(!is_page(array(2133,2125,2131))){ ?>
<? include('module/sertificate.php'); ?>
<? include('module/customers.php'); ?>
<? include('module/contact-form.php'); ?>
<? } ?>
<? get_footer()?>
