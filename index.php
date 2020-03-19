<? get_header(); ?>

	
	<?php

	/*$services = array(
	  array(
	    'name' =>'Услуги геодезиста',
			'title' => 'Услуги геодезиста в',
			'description' => 'Услуги геодезиста в',
	    'content' => '[text_module id="14446"]'
	  )
	);
		// Получить данные рубрик, в том числе и без записей, у которых родительская рубрика с ID = 6
		$cat_data = get_categories( array( 'parent' => 37 ) );
		if ( $cat_data ) {
		  foreach ( $cat_data as $one_cat_data ){
			foreach ($services as $services_item) {
			      $secondPartTItle = str_replace("Услуги в ", "", $one_cat_data->cat_name);
			      $title = $services_item['title']." ".$secondPartTItle;
			      $text = $services_item['content'];
			      $post_data = array(
			        'post_title' => $title,
			        'post_content' => $text,
			        'post_status' => 'publish',
			        'post_author' => 1,
			        'post_category' => array(37,$one_cat_data->cat_ID),
			      );
			      $post_id = wp_insert_post(wp_slash($post_data));
			      add_post_meta($post_id, '_aioseop_title', $services_item['title']." ".$secondPartTItle.", вызов на объект для работ от ООО ЦГИКУ");
			      add_post_meta($post_id, '_aioseop_description', $services_item['title']." ".$secondPartTItle." от профессионалов ЦГИКУ, любые геодезические работы по приемлемым ценам. Звоните!");
			      update_post_meta($post_id, 'ratings_average', 5);
			      update_post_meta($post_id, 'ratings_score', 5);
			      update_post_meta($post_id, 'ratings_users', 5);
			      CFS()->save( array('namecity' => $secondPartTItle), array( 'ID' => $post_id ) );
			    }
		  }
		}*/
	?>

	<!--main-service-->
	<div class="section section--main-service">
		<div class="main-cont">
			<div class="section-title">Наши самые популярные услуги</div>
			<div class="section-title-sub">Сравните
				<span class="text--green">наши цены &nbsp;</span>c&nbsp;
				<span class="text--red">ценами конкурентов</span>
			</div>
			<div class="main-service">
				<div class="main-service__col">

					<div class="main-service__title">Кадастровые работы</div>
					<div class="main-service__col-wrap">
            <?php
            $the_query = new WP_Query(array(
              'meta_key' => 'order',
              'orderby' => 'meta_value_num',
              'tag' => 'main-service--kadastr',
              'order' => 'ASC'
            ));
            ?>
            <?php if ($the_query->have_posts()): ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post();
                $class = get_field('order') ? 'class="order"' : '';
                ?>
								<div class="main-service__el">
									<div class="main-service__cont">
										<a href="<?= get_permalink(); ?>" class="main-service__el-title"><?= get_field('second-title'); ?></a>
										<div class="main-service__title-sub"><?= get_field('description'); ?></div>
										<div class="main-service__price-row">
											<div class="main-service__price main-service__price--true"><?= get_field('price-true'); ?>руб.
											</div>
											<div class="main-service__price main-service__price--false"><?= get_field('price-false'); ?>руб.
											</div>
										</div>
										<div class="main-service__get">
											<a class="main-service__btn main-service__btn-more" href="<?= get_permalink(); ?>">Подробнее</a>
											<div class="main-service__btn main-service__btn-get modal-get" data-modal="order">Заказать</div>
										</div>
									</div>
									<div class="main-service__img">
										<div class="main-service__img-el" style="background-image:url('<?= get_field('image'); ?>');"></div>
									</div>
								</div>
              <?php endwhile; ?>
            <?php endif; ?>
					</div>
					<a class="main-service__el-get" href="kadastrovy-e-raboty/">Eще услуги</a>
				</div>

				<div class="main-service__col">
					<div class="main-service__title">Геодезические работы</div>
					<div class="main-service__col-wrap">
            <?php
            $the_query = new WP_Query(array(
              'tag' => 'main-service--geo',
              'meta_key' => 'order',
              'orderby' => 'meta_value',
              'order' => 'ASC'
            ));
            ?>
            <?php if ($the_query->have_posts()): ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post();
                $class = get_field('order') ? 'class="order"' : '';
                ?>
								<div class="main-service__el">
									<div class="main-service__cont">
										<div class="main-service__el-title"><?= get_field('second-title'); ?></div>
										<div class="main-service__title-sub"><?= get_field('description'); ?></div>
										<div class="main-service__price-row">
											<div class="main-service__price main-service__price--true"><?= get_field('price-true'); ?>руб.
											</div>
											<div class="main-service__price main-service__price--false"><?= get_field('price-false'); ?>руб.
											</div>
										</div>
										<div class="main-service__get">
											<a class="main-service__btn main-service__btn-more" href="<?= get_permalink(); ?>">Подробнее</a>
											<div class="main-service__btn main-service__btn-get modal-get" data-modal="order">Заказать</div>
										</div>
									</div>
									<div class="main-service__img">
										<div class="main-service__img-el" style="background-image:url('<?= get_field('image'); ?>');"></div>
									</div>
								</div>
              <?php endwhile; ?>
            <?php endif; ?>
					</div>
					<a class="main-service__el-get" href="geodezicheskie-raboty/">Eще услуги</a>
				</div>
			</div>
		</div>
	</div>
<? include('module/advant.php'); ?>
<? include('module/customers.php'); ?>
<? include('module/sertificate.php'); ?>
<? include('module/contact-form.php'); ?>
<? include('module/news-list.php'); ?>
<? include('module/questions.php'); ?>


<? get_footer(); ?>