<div class="city-title">Услуги в других городах</div>
<div class="city-wrap">
<?
  $args = array(
    'cat'=> $_GET['catTown'],
    'order' => 'ASC'
  );
  query_posts($args);
  while (have_posts()) : the_post();
  printf('
    <div class="city-el">
      <a href="%s">%s</a>
    </div>
    ',get_permalink(),CFS()->get('namecity')
  );
  endwhile;
  wp_reset_query();
?>
</div>
