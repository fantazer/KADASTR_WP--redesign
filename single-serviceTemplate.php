<?
/*
 * Template Name: serviceTemplate
 * Template Post Type: post, page, product
 */
?>
<? //get_header('lp'); ?>
<? get_header(); ?>


<?
	//get id template
	//$listTownTemplateVal = 22723;
	CFS()->get('idparent') ? $listTownTemplateVal = CFS()->get('idparent') : $listTownTemplateVal=false
?>

<!--mainBanner-->
<div class="lp-baner lp-baner--borderland lp-baner--dark">
	<div class="lp-baner__img lp-baner__img--top" style="background-image:url('<?= get_field('mainbannerimg',$listTownTemplateVal); ?>');"></div>
	<div class="lp-baner-filter--green"></div>
	<div class="main-cont">
		<div class="lp-baner__wrap">
			<div class="lp-baner__content">
				<h1 class="lp-baner__title lp-baner__title--sm"><?= the_title(); ?></h1>
				<div class="lp-baner__title-sub"><?= get_field('subTitle',$listTownTemplateVal); ?></div>
				<div class="header__get">
					<a class="header__btn header__btn-more" href="#why">Подробнее</a>
					<div class="header__btn header__btn-get header__btn-get--yellow modal-get" data-modal="order">Заказать!</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--mainBanner === end-->

<!--howWork-->
<div class="section section--doc section--fill" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/igs/concrete-texture.png');" id="important">
	<div class="main-cont-sm">
		<div class="section-title">
			<? if(get_the_ID()===14884){?>
			Зачем это нужно
			<? }elseif(get_the_ID()===14880){ ?>
				Что это такое
			<? }else{ ?>
			Как это работает
			<? } ?>
		</div>
		<div class="text-block text-block--seal ">
			<div class="seal">
				<img src="<?php echo get_template_directory_uri(); ?>/img/seal.png" alt=""/>
			</div>
      <?= get_field('howwork',$listTownTemplateVal); ?>
      <?php if (get_field('howworkaddtext',$listTownTemplateVal)) { ?>
				<dic class="f f-jcc">
					<div class="btn--md btn--mark modal-get" data-modal="howWorkAddText">Узнать подробнее</div>
				</dic>
      <? } ?>
		</div>
	</div>
</div>
<!--howWork === end-->

<!--whyNeed-->
<div class="section section--why section--union section--mobile" id="why" style="background-image:url('<?= get_field('whyneedimg',$listTownTemplateVal); ?>');">
	<div class="main-cont">
		<div class="section-wrap">
			<div class="section-call section-call--mid">
				<div class="text-block">
					<div class="section-title section-title--left">
						<? if(get_the_ID()===14884){?>
						Что это такое
						<? }else{ ?>
						Зачем это нужно
						<? } ?>
					</div>
					<div class="box">
            <?= get_field('whyNeed',$listTownTemplateVal); ?>
            <?
            if ($listTownTemplateVal) {
              $categories = get_the_category();
              $category_id = $categories[0]->cat_ID;
              //var_dump($post);
              function porstAfterTrim($a, $order)
              {
                if (in_category($a)) {
                  global $post;
                  $idPost = get_the_id();
                  $PostArray = array();
                  if ($order) {
                    $args = array(
                      'cat' => $a,
                      //'orderby'=> 'title',
                      'order' => 'ASC'
                    );
                  } else {
                    $args = array(
                      'cat' => $a,
                    );
                  }
                  query_posts($args);
                  while (have_posts()) : the_post();
                    $name = get_the_id();
                    array_push($PostArray, $name);
                  endwhile;
                  wp_reset_query();
                  $key = array_search($idPost, $PostArray);
                  $output = array_slice($PostArray, $key + 1, 3);
                  $LastPost = array_pop($PostArray);
                  $postEl = array('include' => $output, 'post__not_in' => $LastPost, 'order' => 'ASC');
                  $myposts = get_posts($postEl);
                  foreach ($myposts as $postItem) {
                    $post_title = $postItem->post_title;
                    $post_link = $postItem->guid;
                    ?>
				            <li><a href="<?= $post_link ?>"><?= $post_title ?></a></li>
                    <?
                  }
                  //wp_reset_postdata();
                  $needPost = 3 - (count($PostArray) - $key);
                  //echo $needPost;
                  if ($needPost < 4 && $needPost > 0) {
                    $postEl = array('cat' => $a, 'order' => 'ASC', 'posts_per_page' => $needPost);
                    $myposts = get_posts($postEl);
                    foreach ($myposts as $postItem) {
                      $post_title = $postItem->post_title;
                      $post_link = $postItem->guid;
                      ?>
					            <li><a href="<?= $post_link ?>"><?= $post_title ?></a></li>
                      <?
                    }
                  }

                }
              }

              porstAfterTrim($category_id, true);
            }
							?>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--whyNeed === end-->

<!--doc-->
<div class="section section--doc">
	<div class="main-cont">
		<div class="section-title">Какие нужны документы?</div>
		<div class="section-title-sub">Максимальный перечень необходимых документов</div>
		<div class="g g-2 sm__g-1 gap-20 w100">
      <? $docNumber = 0; ?>
      <? $docNumberIconArray = ['attest', 'plan', 'doc', 'planning', 'posred', 'idea', 'image', 'information']; ?>
      <? while (have_rows('needDoc',$listTownTemplateVal)): the_row(); ?>
				<div class="bor bor--graySnow f f-col p-24 text br-12">
					<svg class="icon--mark mb-24 icon--xl">
						<use xlink:href="#<?= $docNumberIconArray[$docNumber] ?>"></use>
					</svg>
					<div class="type--w700 type--black"><?= the_sub_field('needDocTitle',$listTownTemplateVal); ?></div>
          <? if (get_sub_field('needDocText',$listTownTemplateVal)) { ?>
						<div class=" type--black mt-24 mb-24  type--lh-1_4"><?= the_sub_field('needDocText',$listTownTemplateVal); ?></div>
          <? } ?>
				</div>
        <? $docNumber++; ?>
      <? endwhile; ?>
		</div>
	</div>
</div>
<!--doc === end-->

<!--cost-->
<div class="section section--calc section--calc--topograf" id="price">
	<div class="main-cont-sm">
		<div class="section-title">Стоимость наших работ</div>
		<div class="section-title-sub">Работаем в Москве и во всех районах Московской области.</div>
		<div class="calc">
			<!--input(type="range" placeholder=""  class="calc-range--topograf")-->
			<div class="calc-range__wrap">
				<div class="calc-range-val calc-range-val--lg">
					<div class="calc-range-numb"><span class="type--sm">от</span> <?= get_field('cost',$listTownTemplateVal); ?> <span class="type--sm">руб.</span></div>
					<div class="calc-range-pay"><sup>*</sup></div>
				</div>
			</div>
      <? if (get_field('costDescriptionText',$listTownTemplateVal)) { ?>
				<div class="calc-text"><?= get_field('costDescriptionText',$listTownTemplateVal); ?> </div>
      <? } else { ?>
				<div class="calc-text"><sup>*</sup>Стоимость зависит от площади объекта.</div>
      <? } ?>
		</div>
    <?php if (get_field('costaddtext',$listTownTemplateVal)) { ?>
			<div class="get-sale-row">
				<div class="get-sale__btn modal-get" data-modal="costAddText">Посмотреть все цены</div>
			</div>
    <? } ?>
    <?php if (get_field('costlink',$listTownTemplateVal)) { ?>
			<div class="get-sale-row">
				<a href="<?= get_field('costlink',$listTownTemplateVal) ?>" class="get-sale__btn">Посмотреть все цены</a>
			</div>
    <? } ?>
	</div>
</div>
</div>
<!--cost === end-->

<!--need payment-->
<? if(have_rows('costconsist',$listTownTemplateVal)){?>
<div class="section section--doc">
	<div class="main-cont-sm">
		<div class="section-title mb-32">Что войдет в стоимость работ ?</div>
		<div class="g g-1 sm__g-1 gap-20">
      <? $costStep = 0; ?>
      <? $costStepIconArray = ['case', 'design', 'protractor', 'planning', 'agreement', 'topograf']; ?>
      <? while (have_rows('costconsist',$listTownTemplateVal)): the_row(); ?>
				<div class="bor bor--graySnow f p-24 text br-12 gap-20 f-aic">
					<svg class="icon--mark icon--xl">
						<use xlink:href="#<?= $costStepIconArray[$costStep] ?>"></use>
					</svg>
					<div class="type--bold type--black type--lh-1_4"><?= the_sub_field('costConsistEl',$listTownTemplateVal); ?></div>
				</div>
        <? $costStep++; ?>
      <? endwhile; ?>
		</div>
	</div>
</div>
<? } ?>

<!--step work-->
<? if(have_rows('stepwork',$listTownTemplateVal)){?>
<div class="section section-step" id="step">
	<div class="section-filter"></div>
	<div class="main-cont">
		<div class="section-title">Как мы работаем</div>
		<div class="step">
      <? $stepNumber = 1; ?>
      <? while (have_rows('stepwork',$listTownTemplateVal)): the_row(); ?>
				<div class="step-row <? if ($stepNumber % 2 === 0) {
          echo "step-row--right";
        } ?>">
					<div class="step-el">
            <? if ($stepNumber % 2 === 0) { ?>
							<div class="step-line">
								<div class="step-dot"></div>
							</div>
            <? } ?>
						<div class="step-content">
							<div class="step-numb">0<?= $stepNumber; ?></div>
							<div class="step-text">
								<div class="step-text__descr"><? the_sub_field('stepworkel',$listTownTemplateVal); ?></div>
							</div>
						</div>
            <? if ($stepNumber % 2 != 0) { ?>
							<div class="step-line">
								<div class="step-dot"></div>
							</div>
            <? } ?>
					</div>
				</div>
        <? $stepNumber++; ?>
      <? endwhile; ?>
		</div>
	</div>
</div>
<? } ?>

<? include('module/advant.php'); ?>
<? include('module/customers.php'); ?>
<? include('module/sertificate.php'); ?>
<? include('module/contact-form.php'); ?>

<? get_footer(); ?>
