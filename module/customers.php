<div class="main-cont">
	<div class="type--lgx type--w700 type--title type--center mb-32">Наши заказчики</div>
	<div class="g g-6 g-gap-20 mb-100 sm__g-3">
		<? for ($i=1; $i<21; $i++){ ?>
		<img
			class="customer-item  p-24 tr"
			src="<?php echo get_template_directory_uri(); ?>/img/<?=$i?>-customer.jpg" alt=""/>
		<? } ?>
	</div>
</div>