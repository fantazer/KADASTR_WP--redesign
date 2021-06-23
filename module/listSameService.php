<div class="section">
<div class="main-cont">
  <div class="main-service__title">Популярные услуги</div>
	<div class="main-service__col">

		<div class="main-service__col-wrap">
      <?php
      global $post;
      $serviceList = [];
      $serviceListSort = [];
      $idPost = get_the_id();
      $getSumNumber = function ($num) {
        while (strlen($num * 1) > 1) {
          $num = array_sum(str_split($num));
        }
        return $num;
      };


      $postNumberClear = $getSumNumber($idPost);

      $posts = get_posts(array(
        'meta_key' => 'order',
        'tag' => 'main-service--kadastr,main-service--geo',
        'numberposts' => 200,
      ));
      foreach ($posts as $post) {
        array_push($serviceList, $post->ID);
      }

      $serviceListLength = count($serviceList);

      for ($i = 1; $i < 5; $i++) {
        $serviceListNumber = $postNumberClear*$i-2;
        //echo $serviceListNumber."<br>";
        if($serviceListNumber > $serviceListLength){
          $serviceListSort[] = $serviceList[$serviceListNumber%$serviceListLength];
        }else {
          $serviceListSort[] = $serviceList[$serviceListNumber];
        }
      }

      //var_dump($serviceListSort);

      $the_query = new WP_Query(array(
        'post__in' => $serviceListSort
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
								<a class="main-service__read-more" href="<?= get_permalink(); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/img/btn-more.svg">
								</a>
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
</div>
</div>