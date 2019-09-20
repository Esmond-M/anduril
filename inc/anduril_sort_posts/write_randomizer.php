<?php
  require('../../../../../wp-load.php');
  require('log_change.php');

  $category = $_POST['category'];
  $randomizer = $_POST['randomizer'];
  update_option($category . '_randomizer',$randomizer);
  echo 'Changed randomizer for ' . $category . ' to ' . $randomizer;
  log_change($user,'change randomizer to ' . $randomizer,$category);

?>
