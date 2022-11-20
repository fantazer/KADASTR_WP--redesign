<div class="mb-100">
	<div class="main-cont">
		<div class="type--center type--lgx type--w700 type--title mb-64">Частые вопросы</div>
    <?
    $args = array(
      'cat' => 5,
      'orderby' => 'date',
      'order' => 'DESC',
      'posts_per_page' => 12,
    );
    ?>
    <? query_posts($args); ?>
    <? while (have_posts()) : the_post(); ?>
			<div class="js-accordion">
				<div class="accordion__el js-accordion-el">
					<div class="accordion__el-head js-accordion-head">
						<div class="accordion__el-head-text type--w500 type--title w80 sm__type--12"><?= CFS()->get('vopros'); ?></div>
						<div class="accordion__el-head-icon"></div>
					</div>
					<div class="accordion__el-content text js-accordion-content">
						<?=the_content(); ?>
					</div>
				</div>
			</div>
    <? endwhile; ?>
    <? wp_reset_query(); ?>
	</div>
</div>
