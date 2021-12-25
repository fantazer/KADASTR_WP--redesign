<?
/*
 * Template Name: calc
 * Template Post Type: post, page, product
 */
?>

<? get_header(); ?>
<? include('module/bread.php'); ?>


<div class="main-cont">
	<div class="content">
    <? include('module/toolbar.php'); ?>
		<div class="content__info">
      <? the_title('<h1>', '</h1>'); ?>
      <? the_content(); ?>
			<div class="calculator">
				<div class="calculator__head">
					<div class="calculator__head-title">Выберите тип услуги</div>
					<div class="calculator__item">
						<select class="select-beauty">
							<option value="megevanie">Межевание (уточнение границ) земельного участка</option>
							<option value="mnogokvar">Образование земельного участка под многоквартирным домом</option>
							<option value="megPlan">Межевой план на раздел земельного участка</option>
							<option value="obedin">Межевой план на объединение земельных участков</option>
							<option value="oshibka">Исправление реестровой (кадастровой) ошибки</option>
							<option value="megevanieSNT" data-cost="70000 р">Межевание земель общего пользования в СНТ/ДНТ</option>
							<option value="techplanDom">Технический план дома</option>
							<option value="techplanKv" data-cost="от 10 000 р" data-msg="techplanKv">Технический план квартиры</option>
							<option value="pereplan" data-cost="от 10 000 р" data-msg="pereplan">Перепланировка помещения</option>
							<option value="chastPom">Технический план части помещения</option>
							<option value="mashMest" data-cost="10 000 р">Технический план машино-места</option>
							<option value="aktObsl" data-cost="от 8 000 р">Акт обследования (снятие с кад. учета объекта кап. строительства)</option>
							<option value="topograf">Топографическая съемка</option>
							<option value="vinosGran" data-cost="8000 р" data-msg="vinosGran">Вынос границ земельного участка</option>
							<option value="kadSemka" data-msg="kadSemka">Кадастровая съемка</option>
						</select>
						<div class="clear"></div>
					</div>
				</div>
				<!--Межевание (уточнение границ) земельного участка-->
				<div class="calculator__sub calculator__sub--active" data-subcalc="megevanie">
					<div class="calculator__sub-title">Выберите площадь участка</div>
					<div class="calculator__item">
						<select class="select-beauty">
							<option value="16 000 р">до 800 кв.м</option>
							<option value="17 000 р">от 801 кв.м до 1000 кв.м</option>
							<option value="22 000 р">от 1001 кв.м до 2000 кв.м</option>
						</select>
						<div class="clear"></div>
					</div>
				</div>
				<!--Образование земельного участка под многоквартирным домом-->
				<div class="calculator__sub" data-subcalc="mnogokvar">
					<div class="calculator__sub-title">Выберите площадь участка</div>
					<div class="calculator__item">
						<select class="select-beauty">
							<option value="70 000 р">до 0,5 га</option>
							<option value="индивидуально">более 0,5 га</option>
						</select>
						<div class="clear"></div>
					</div>
				</div>
				<!--Образование земельного участка под многоквартирным домом-->
				<div class="calculator__sub" data-subcalc="megPlan">
					<div class="calculator__sub-title">Выберите площадь участка</div>
					<div class="calculator__item calculator__item--megplan">
						<select class="select-beauty">
							<option value="10 000 р">до 1000 кв.м на 2 новых участка</option>
							<option value="индивидуально">более 1000 кв.м на 2 новых участка</option>
						</select>
						<div class="clear"></div>
					</div>
					<div class="calulator__type">
						<div class="calulator__type-el calulator__type-work">
							<div class="check-el">
								<label class="style-label style-label--radio">
									<input class="sytle-input" type="radio" name="group-1" checked="checked"/>
									<div class="sytle-input-element">
										<div class="icon-radio"></div>
									</div>
									<div class="sytle-input-text">Без выполнения геодезических обмеров.</div>
								</label>
							</div>
						</div>
						<div class="calulator__type-el calulator__type-unwork">
							<div class="check-el">
								<label class="style-label style-label--radio">
									<input class="sytle-input" type="radio" name="group-1"/>
									<div class="sytle-input-element">
										<div class="icon-radio"></div>
									</div>
									<div class="sytle-input-text">С геодезическими обмерами.</div>
								</label>
							</div>
						</div>
					</div>
				</div>
				<!--Межевой план на объединение земельных участков-->
				<div class="calculator__sub" data-subcalc="obedin">
					<div class="calculator__sub-title">Выберите площадь участка</div>
					<div class="calculator__item">
						<select class="select-beauty">
							<option value="10 000 р">до 2000 кв.м</option>
							<option value="индивидуально">более 2000 кв.м</option>
						</select>
						<div class="clear"></div>
					</div>
				</div>
				<!--Исправление реестровой (кадастровой) ошибки-->
				<div class="calculator__sub" data-subcalc="oshibka">
					<div class="calculator__sub-title">Выберите площадь участка</div>
					<div class="calculator__item">
						<select class="select-beauty">
							<option value="15 000 р">до 800 кв.м</option>
							<option value="18 000 р">от 801 кв.м до 1000 кв.м</option>
							<option value="20 000 р">от 1001 кв.м до 2000 кв.м</option>
						</select>
						<div class="clear"></div>
					</div>
				</div>
				<!--Технический план дома-->
				<div class="calculator__sub" data-subcalc="techplanDom">
					<div class="calculator__sub-title">Выберите площадь дома</div>
					<div class="calculator__item">
						<select class="select-beauty">
							<option value="12 000 р">до 50 кв.м</option>
							<option value="16 000 р">от 51 до 100 кв.м</option>
							<option value="20 000 р">от 101 до 200 кв.м</option>
							<option value="24 000 р">от 201 кв.м</option>
						</select>
						<div class="clear"></div>
					</div>
				</div>
				<!--Технический план части помещения (для заключения договора аренды)-->
				<div class="calculator__sub" data-subcalc="chastPom">
					<div class="calculator__sub-title">Выберите площадь помещения</div>
					<div class="calculator__item">
						<select class="select-beauty">
							<option value="10 000 - 15 000 р">до 100 кв.м</option>
							<option value="25 000 р">от 101 до 300 кв.м</option>
							<option value="40 000 р">от 301 до 1000 кв.м</option>
							<option value="индивидуально">более 1000 кв.м р</option>
						</select>
						<div class="clear"></div>
					</div>
				</div>
				<!--Кадастровая съемка-->
				<div class="calculator__sub" data-subcalc="kadSemka">
					<div class="calculator__sub-title">Выберите площадь участка</div>
					<div class="calculator__item">
						<select class="select-beauty">
							<option value="от 10 000">до 1 га</option>
							<option value="индивидуально">свыше 1 га</option>
						</select>
						<div class="clear"></div>
					</div>
				</div>
				<!--Вынос границ земельного участка-->
				<div class="calculator__sub" data-subcalc="vinosGran">
					<div class="calculator__sub-title">Выберите кол-во точек</div>
					<div class="elements-icr-block elements-icr-block--vinos">
						<div class="incr">
							<div class="incr__minus incr__minus--vinosGran incr__nav">-</div>
							<div class="incr__val">
								<span>1</span>
								<div class="incr__val-coner"></div>
							</div>
							<div class="incr__plus incr__nav">+</div>
						</div>
					</div>
				</div>
				<!--Межевание земель общего пользования в СНТ/ДНТ-->
				<div class="calculator__sub" data-subcalc="megevanieSNT">
					<div class="calculator__sub-title">кол-во участков в СНТ</div>
					<div class="elements-icr-block elements-icr-block--megevanieSNT">
						<div class="incr">
							<div class="incr__minus incr__minus--vinosGran incr__nav">-</div>
							<div class="incr__val">
								<span>1</span>
								<div class="incr__val-coner"></div>
							</div>
							<div class="incr__plus incr__nav">+</div>
						</div>
					</div>
				</div>
				<!--Топографическая съемка-->
				<div class="calculator__sub" data-subcalc="topograf">
					<div class="calulator__type">
						<div class="calulator__type-el calulator__type-fiz">
							<div class="check-el">
								<label class="style-label style-label--radio">
									<input class="sytle-input" type="radio" name="group" checked="checked"/>
									<div class="sytle-input-element">
										<div class="icon-radio"></div>
									</div>
									<div class="sytle-input-text">Физ. лицо</div>
								</label>
							</div>
						</div>
						<div class="calulator__type-el calulator__type-ur">
							<div class="check-el">
								<label class="style-label style-label--radio">
									<input class="sytle-input" type="radio" name="group"/>
									<div class="sytle-input-element">
										<div class="icon-radio"></div>
									</div>
									<div class="sytle-input-text">Юр. лицо</div>
								</label>
							</div>
						</div>
					</div>
					<div class="calculator__sub-title">Выберите площадь помещения</div>
					<div class="calculator__item calculator__item--topograf">
						<select class="select-beauty">
							<option value="10 000 р">до 800 кв.м</option>
							<option value="15 000 р">от 801 до 1500 кв.м</option>
							<option value="индивидуально">более 1501 кв.м</option>
						</select>
						<div class="clear"></div>
					</div>
				</div>
				<div class="calculator-total">
					<div class="calculator-total__title">Цена услуги:</div>
					<div class="calculator-total__val">16 000 р</div>
				</div>
				<!--Технический план квартиры-->
				<div class="calculator-msg" data-msg="techplanKv">
					<sup>*</sup> Стоимость зависит от площади квартиры и необходимости производства обмеров.
				</div>
				<!--Перепланировка помещения-->
				<div class="calculator-msg" data-msg="pereplan">
					<sup>*</sup> Стоимость зависит от площади помещения и необходимости производства обмеров.
				</div>
				<!--Кадастровая съемка-->
				<div class="calculator-msg" data-msg="kadSemka">
					<sup>*</sup> Стоимость зависит от площади и местоположения участка.
				</div>
				<!--Вынос границ земельного участка-->
				<div class="calculator-msg" data-msg="vinosGran">
					<sup>*</sup> Стоимость минимального выезда 8000 руб.
				</div>
			</div>
      <?

      // Межевание и межевой план в Подольском районе, заказать межевой план земельного участка. Полный спектр геодезических, кадастровых работ. Опытные, ответственные исполнители. Звоните!
      $isWork = false;
      if ($isWork) {
        $query = new WP_Query(
          'cat=36',
          'posts_per_page = 10000'
        );
        while ($query->have_posts()) {
          $query->the_post();
          $id = get_the_ID();
          $title = get_the_title($id);
          $category = get_the_category();

          $str = strpos($title, " в ");
          $row = substr($title, $str + 4, strlen($title));
          echo $row . "<br><br><hr><br>";

          /*$metaTitle = get_post_meta($id, 'namecity', true);

          $str = strpos($category[1]->name, " в ");
          $row = substr($category[1]->name, $str + 3, strlen($category[1]->name));
          echo $row . "<br><br><hr><br>";*/

          //echo $metaTitle."<br>";
          //$category = get_the_category();
          //$location = str_replace('Кадастровый инженер в ','',$title);
          /*$location = str_replace(', заказать межевой план земельного участка','',$location);
         $editTitle = "✅ Межевание и межевой план в ".$location.", заказать межевой план земельного участка. Полный спектр геодезических, кадастровых работ. Опытные, ответственные исполнители. Звоните!";*/

          //update_post_meta($id, 'addNamecity', $metaTitle);
          //update_field("cityEdit",$location,$id);
          $field_data = array('cityEdit' => $row);
          $post_data = array('ID' => $id); // the ID is required
          CFS()->save($field_data, $post_data);

        }
      }

      $isEditMeta = false;
      if ($isEditMeta) {
        $query = new WP_Query('cat=37', 'posts_per_page = 10000');
        while ($query->have_posts()) {
          $query->the_post();
          $id = get_the_ID();
          $title = get_the_title();
          $metaDescription = get_post_meta($id, '_aioseop_description', true);
          $metaTitle = get_post_meta($id, '_aioseop_title', true);
          $town = CFS()->get("cityEdit");

          $editTitle = "Заказать СПОЗУ в " . $town . ", цена для ИЖС от ЦГИКУ";
          //$editDescription = "✅ СПОЗУ в ". $town ." от профессионалов ЦГИКУ по приемлемым ценам. Центр Геодезических и Кадастровых работа. Наш тел.: +7 (495) 283-96-81. Звоните!";

          if (strpos($title, 'Кадастровые работы в') !== false) {
            //echo $title . "<br><br><hr>";
            //update_post_meta($id, '_aioseop_title', $editTitle);
            //update_post_meta($id, '_aioseop_description', $editDescription);
          }

          /*$my_post = array();
					$my_post['ID'] = $id;
					$my_post['post_content'] = '[text_module id="20968"]';

          wp_update_post( wp_slash($my_post) );*/

          //echo get_post_meta($id, 'content', true);
          //update_post_meta($id, '_aioseop_title', $editTitle);
          //update_post_meta($id, '_aioseop_description', $editDescription);
        }
      }

      ?>
		</div>
	</div>
</div>

<? include('module/contact-form.php'); ?>

<div class="section section--towns">
	<div class="section-title">Услуги в других городах</div>
	<div class="main-cont">
		<div class="towns-list">
      <?
      $args = array(
        'cat' => array(11, 19),
        'order' => 'ASC'
      );
      ?>
      <? query_posts($args); ?>
      <? while (have_posts()) : the_post(); ?>
				<a href="<?= get_permalink() ?>" class="towns-list__el">
          <?= CFS()->get('namecity') ?>
				</a>
      <? endwhile; ?>
      <? wp_reset_query(); ?>

		</div>
	</div>
</div>


<?php

include('module/townGeneratorList.php');

$catServiceList = array(
  /*array(
    "name" => "Топографическая съемка для газификации",
    "title" => "Топографическая съемка для газификации в ",
    "idCat" => "22723",
  ),*/
  /*array(
    "name" => "Оформление сервитута на земельный участок",
    "title" => "Оформление сервитута на земельный участок в ",
    "idCat" => "22939",
  ),*/
  array(
    "name" => "Оформление дома",
    "title" => "Оформление дома в собственность в ",
    "idCat" => "23491",
  ),
);


$catServiceAddTitle = " - заказать в ЦГИКУ";
$catServiceAddDescription = " с помощью профессионалов ЦГИКУ по приемлемым ценам.  Тел.: +7 (495) 283-96-81, +7 (495) 283-96-83 - Звоните!";

echo "11111111111";


$generator = false;
if ($generator) {
  foreach ($catServiceList as $catServiceListEl) {
    $cid = wp_insert_term(
      $catServiceListEl["name"], // category name
      'category', // taxonomy
      array(
        'description' => 'Список городов для ' . $catServiceListEl["name"], // optional
        'slug' => 'Список городов для ' . $catServiceListEl["name"],
        'parent' => 380, // set it as a sub-category
      )
    );
    foreach ($townList as $townListEl) {
      $title = $catServiceListEl["title"].$townListEl['secondName'];
      $post_data = array(
        'post_title' => $title,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_category' => array($cid['term_id'], 380),
      );
      $post_id = wp_insert_post(wp_slash($post_data));

      add_post_meta($post_id, '_aioseop_title', $catServiceListEl["title"] . $townListEl['secondName'] . $catServiceAddTitle);
      add_post_meta($post_id, '_aioseop_description', "Оформите частный дом в " . $townListEl['secondName'] . $catServiceAddDescription);
      CFS()->save(array('cityname' => $townListEl['name']), array('ID' => $post_id));
      CFS()->save(array('citysecondname' => $townListEl['secondName']), array('ID' => $post_id));
      CFS()->save(array('idparent' => $catServiceListEl['idCat']), array('ID' => $post_id));
    }
  }
}
/*$services = array(
  array(
    'name' =>'Услуги геодезиста',
    'title' => 'Услуги геодезиста в',
    'description' => 'Услуги геодезиста в',
    'content' => '[text_module id="14446"]'
  )
);
  // Получить данные рубрик, в том числе и без записей, у которых родительская рубрика с ID = 6
  $cat_data = get_categories( array( 'parent' => 37 ) );
  if ( $cat_data ) {
    foreach ( $cat_data as $one_cat_data ){
    foreach ($services as $services_item) {
          $secondPartTItle = str_replace("Услуги в ", "", $one_cat_data->cat_name);
          $title = $services_item['title']." ".$secondPartTItle;
          $text = $services_item['content'];
          $post_data = array(
            'post_title' => $title,
            'post_content' => $text,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_category' => array(37,$one_cat_data->cat_ID),
          );
          $post_id = wp_insert_post(wp_slash($post_data));
          add_post_meta($post_id, '_aioseop_title', $services_item['title']." ".$secondPartTItle.", вызов на объект для работ от ООО ЦГИКУ");
          add_post_meta($post_id, '_aioseop_description', $services_item['title']." ".$secondPartTItle." от профессионалов ЦГИКУ, любые геодезические работы по приемлемым ценам. Звоните!");
          update_post_meta($post_id, 'ratings_average', 5);
          update_post_meta($post_id, 'ratings_score', 5);
          update_post_meta($post_id, 'ratings_users', 5);
          CFS()->save( array('namecity' => $secondPartTItle), array( 'ID' => $post_id ) );
        }
    }
  }*/
?>
<?
/*$args = array(
  'cat' => 37,
	'posts_per_page' => 10000,
);

query_posts($args);
while (have_posts()) : the_post();
  $title = get_the_title();
  //echo $title.'<br>';
  if (strpos($title, 'Геодезические работы в') !== false) {
    //echo 'true';
    $post_id = get_the_ID() ;
    //update_post_meta($post_id, '_aioseop_title', $title . " - заказать в ЦГИКУ");
  }
endwhile;
wp_reset_query();*/

?>










<? get_footer(); ?>
