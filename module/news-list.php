<div class="psv-100 sm__psv-48">
	<div class="main-cont">
		<div class="type--center type--lg type--w700 type--title mb-32">Последние новости</div>
		<div class="g g-3 f-gap-24 sm__g-1">
      <?
      $args = array(
        'cat' => 12,
        'posts_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC'
      );
      ?>
      <? query_posts($args); ?>
      <? while (have_posts()) : the_post(); ?>
				<div class="p-32 bor bor--border f f-col bg--white f-aifs br-8">
					<div class="bg--stateSuccessBG type--w700 type--sm type--mark p-4 mb-12"><?= get_the_date('j F Y'); ?></div>
					<div class="type--w500 type--title type--main mb-24"><?= get_the_title(); ?></div>
					<div class="type--sm mb-32 type--lh-1_6"><?= wp_trim_words(get_the_content(), 12, ' ...'); ?></div>
					<a href="<?= get_permalink(); ?>" class="type--sm type--mark mt-a">Подробнее</a>
				</div>
      <? endwhile; ?>
      <? wp_reset_query(); ?>
		</div>
	</div>
</div>
