<?php get_header() ?>

<div class="container">
  <?php
  $txt= "Colores";
  ?>
  <h1 class="my-5 text-center display-4"><?php echo $txt;  ?></h1>

  <?php
  $txt2= "Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
  $colores= array('blue' , 'green', 'red', 'yellow');


  foreach ($colores as $valor) {
    echo '<blockquote class="quote-card ' .$valor. '-card">';
    echo '<p>'.$txt2.'</p>';
    echo '<cite>'.$valor.'</cite>';
    echo '</blockquote>';
  }
  ?>
</div>
<?php get_footer() ?>
