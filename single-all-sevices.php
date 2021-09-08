<?
/*
 * Template Name: allservice
 * Template Post Type: post, page, product
 */
?>
<?
/*	NOTE!
	Шаблон страницы: для Полного списка услуг-городов
	URL страницы :  http://cgiku.ru/
*/
?>

<?
	/*$titlePage = get_the_title();
	if(strpos($titlePage, 'Кадастровые работы в')!== false){
		get_header();
	} else {
	 get_header('allservice');
	}*/
	get_header();
?>


<?
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
    $output = array_slice($PostArray, $key + 1, 5);
    $LastPost = array_pop($PostArray);
    $postEl = array('include' => $output, 'post__not_in' => $LastPost, 'order' => 'ASC');
    $myposts = get_posts($postEl);
    foreach ($myposts as $post) {
      setup_postdata($post);
      	$result = explode(' в ', get_the_title(), 2);
      ?>
			<li><a href="<?php the_permalink(); ?>"><?=ltrim($result[0]); ?></a></li>
      <?
    }
    wp_reset_postdata();
    $needPost = 5 - (count($PostArray) - $key);
    //echo $needPost;
    if ($needPost < 6 && $needPost > 0) {
      $postEl = array('cat' => $a, 'order' => 'ASC', 'posts_per_page' => $needPost);
      $myposts = get_posts($postEl);
      foreach ($myposts as $post) {
        setup_postdata($post);
        $result = explode(' в ', get_the_title(), 2);
        ?>
				<li><a href="<?php the_permalink(); ?>"><?=ltrim($result[0]); ?></a></li>
        <?
      }
    }

  }
}
?>
<!--block header end-->
<div class="lp-baner lp-baner--borderland lp-baner--dark lp-small-head">
	<div class="lp-baner__img lp-baner__img--right-left" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/baner-46.png');"></div>
	<div class="lp-baner-filter--green"></div>
	<div class="main-cont">
		<div class="lp-baner__wrap">
			<div class="lp-baner__content">
				<div class="lp-baner__title"><?= the_title(); ?></div>
				<div class="lp-baner__title-sub lp-baner__title-sub--lg">
					<?if (strpos(get_the_title(), 'Кадастровые работы в')!== false){?>
            Все виды кадастровых и геодезических работ
          <?}else {?>
					Все виды кадастровых и геодезических услуг
					<?}?>
				</div>
				<div class="header__get">
					<a class="header__btn header__btn-more" href="#why">Подробнее</a>
					<div class="header__btn header__btn-get modal-get" data-modal="order">Заказать</div>
				</div>
			</div>
			</div>
	</div>
</div>
<!--Что это такое-->
<div class="section section--tablet" id="about">
	
	<div class="main-cont">
		<div class="section-wrap">
			<div class="section-call section-call--mid">
				<!-- <div class="section-title section-title--left">Описание услуги</div> -->
				<div class="box box--table box--sm">
					<?
					$categories = get_the_category();
					$category_id = $categories[1]->cat_ID;
			          while (have_posts()) : the_post();
			            the_content(); // выводим контент
			          endwhile;
				?>
				<div class="box">
					<?
						//sorry for this = ( i am frontender

						$GLOBALS['category_id'] = $category_id;
						$extendDistrict = function($cat,$text){
							if($GLOBALS['category_id']===$cat) {
								echo "<h3> Работаем во всех населенных пунктах района:</h3>";
								echo do_shortcode('[text_module id='.$text.']');
							}
						};

						$extendDistrict(55,8135);
						$extendDistrict(35,8136);
						$extendDistrict(39,8138);
						$extendDistrict(40,8139);
						$extendDistrict(41,8140);
						$extendDistrict(42,8141);
						$extendDistrict(43,8142);
						$extendDistrict(44,8143);
						$extendDistrict(45,8144);
						$extendDistrict(46,8145);
						$extendDistrict(47,8146);
						$extendDistrict(48,8147);
						$extendDistrict(49,8148);
						$extendDistrict(50,8151);
						$extendDistrict(51,8152);
						$extendDistrict(52,8154);
						$extendDistrict(53,8155);
						$extendDistrict(54,8156);
						$extendDistrict(54,8156);
						$extendDistrict(56,8158);
						$extendDistrict(57,8159);
						$extendDistrict(66,8162);
						$extendDistrict(65,8163);
						$extendDistrict(64,8164);
						$extendDistrict(63,8165);
						$extendDistrict(62,8166);
						$extendDistrict(61,8167);
						$extendDistrict(60,8168);
					?>

				</div>
				<br>
				<br>
				<h3>Другие услуги:</h3>
				<ul>
				  <? porstAfterTrim($category_id, true);?>
				</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Когда нужны услуги-->

<!--service-->

<!--Как мы работаем-->
<div class="section section-step" id="work">
	<div class="section-filter"></div>
	<div class="main-cont">
		<div class="section-title">Как мы работаем</div>
		<div class="step">
			<div class="step-row">
				<div class="step-el">
					<div class="step-content">
						<div class="step-numb">01</div>
						<div class="step-text">
							<div class="step-text__descr">Отправляете нам заявку или звоните. Получаете бесплатную консультацию</div>
						</div>
					</div>
					<div class="step-line">
						<div class="step-dot"></div>
					</div>
				</div>
			</div>
			<div class="step-row step-row--right">
				<div class="step-el">
					<div class="step-line">
						<div class="step-dot"></div>
					</div>
					<div class="step-content">
						<div class="step-numb">02</div>
						<div class="step-text">
							<div class="step-text__descr">Анализируем документы, готовим проект Договора, согласовываем с Вами дату и
								время приезда нашего специалиста для проведения работ.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="step-row">
				<div class="step-el">
					<div class="step-content">
						<div class="step-numb">03</div>
						<div class="step-text">
							<div class="step-text__descr">В назначенное время наш сотрудник приезжает к Вам, передаёт Договор и производит
								необходимые работы.
							</div>
						</div>
					</div>
					<div class="step-line">
						<div class="step-dot"></div>
					</div>
				</div>
			</div>
			<div class="step-row step-row--right">
				<div class="step-el">
					<div class="step-line">
						<div class="step-dot"></div>
					</div>
					<div class="step-content">
						<div class="step-numb">04</div>
						<div class="step-text">
							<div class="step-text__descr">Формируем всю необходимую документацию и согласовываем ее с вами
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="step-row">
				<div class="step-el">
					<div class="step-content">
						<div class="step-numb">05</div>
						<div class="step-text">
							<div class="step-text__descr">Передаем вам все сформированные  документы.
							</div>
						</div>
					</div>
					<div class="step-line">
						<div class="step-dot"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<? include('module/listSameService.php'); ?>

<script type="text/javascript">
  window.onload = function() {
    yaCounter32012941.reachGoal('SERVICEPAGE'); 
  };
</script>