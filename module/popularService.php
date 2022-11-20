<!--popular service-->

<div class="bg--fieldBackground">
	<div class="psv-100 sm__psv-48">
		<div class="main-cont">
			<div class="type--center type--lgx type--w700 type--title mb-24">Популярные услуги</div>
			<div class="type--center w60 ml-a mr-a type--typeSecondary mb-64 sm__w100 sm__type--14">Качественные услуги от команды с многолетним опытом.<br> Мы рещим вашу проблему уже сегодня.</div>
			<div class="g g-2 f-gap-24 sm__g-1 mb-32">
        <?
        $args = array(
          'category__in' => array(6, 7, 398, 399),
          'meta_key' => 'order',
          'orderby' => 'meta_value_num',
          'tag' => 'popularService',
          'order' => 'ASC',
          'posts_per_page' => 10,
        );
        ?>
        <? query_posts($args); ?>
        <? while (have_posts()) : the_post(); ?>
					<div class="p-32 bor bor--border f f-col bg--white br-8">
						<a href="<?= get_permalink(); ?>" class="type--w500 type--title type--md mb-24 type-h--mark"><?= get_the_title(); ?></a>
						<div class="type--14 type--main mb-32 type--lh-1_6">
              <?
              if (get_the_content()) {
                echo wp_trim_words(get_the_content(), 12, ' ...');
              }
              if (get_field('subTitle')) {
                echo get_field('subTitle');
              }
              ?>
						</div>
						<div class="type--md type--w700 mb-24 mt-a">
              <?
              if (get_field('cost')) {
                echo get_field('cost') . " руб";
              } elseif (get_field('price-true')) {
                echo get_field('price-true') . " руб";
              }
              ?>
						</div>
						<div class="f sm__fw">
							<a href="<?= get_permalink(); ?>" class="btn btn--md btn--light sm__w100 sm__mb-10">Подробнее</a>
							<a href="#order" class="btn btn--md btn--mark ml-24 sm__w100 sm__ml-0">Заказать</a>
						</div>
					</div>
        <? endwhile; ?>
        <? wp_reset_query(); ?>
			</div>
		</div>
	</div>
</div>
<!--popular service-->