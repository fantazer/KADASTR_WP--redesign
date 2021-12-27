<div class="js-accordion">
	<div class="accordion__el js-accordion-el">
		<div class="accordion__el-head js-accordion-head">
			<div class="accordion__el-head-text type--w500 type--title w80 sm__type--12"><?= $cat->name; ?></div>
			<div class="accordion__el-head-icon"></div>
		</div>
		<div class="accordion__el-content text js-accordion-content">
			<ul>
        <?
        $args = array(
          'cat' => $id,
          'posts_per_page' => 9999,
          //'offset' => 1,
        );
        ?>
        <? query_posts($args); ?>
        <? while (have_posts()) : the_post(); ?>
					<li>
						<a href="<?= get_permalink(); ?>"> <?= get_the_title(); ?></a>
					</li>
        <? endwhile; ?>
        <? wp_reset_query(); ?>
			</ul>
		</div>
	</div>
</div>