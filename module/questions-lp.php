<div class="mb-100">
	<div class="main-cont">
		<div class="type--center type--lgx type--w700 type--title mb-64">Частые вопросы</div>
       <? while (have_rows('questions')): the_row(); ?>
			<div class="js-accordion">
				<div class="accordion__el js-accordion-el">
					<div class="accordion__el-head js-accordion-head">
						<div class="accordion__el-head-text type--w500 type--title w80 sm__type--12"><? the_sub_field('name_questions'); ?></div>
						<div class="accordion__el-head-icon"></div>
					</div>
					<div class="accordion__el-content text js-accordion-content">
						<? the_sub_field('text_questions'); ?>
					</div>
				</div>
			</div>
   <? endwhile; ?>
	</div>
</div>