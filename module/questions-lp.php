<div class="section section--news ">
	<div class="section-title">Часто задаваемые вопросы</div>
	<div class="section-title-sub">Просто о сложном</div>
	<div class="main-cont">
		<div class="questions">
			<div class="questions-slider owl-carousel">
        <? while (have_rows('questions')): the_row(); ?>
					<div class="questions__el">
						<div class="questions__el-wrap">
							<div class="questions__name"><? the_sub_field('name_questions'); ?></div>
							<div class="questions__text">
                <? the_sub_field('text_questions'); ?>
							</div>
						</div>
					</div>
        <? endwhile; ?>
			</div>
		</div>
	</div>
</div>