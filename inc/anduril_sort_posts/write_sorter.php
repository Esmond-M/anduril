<?php
  require('../../../../../wp-load.php');
  require('log_change.php');

  $sorter = $_POST['sorter'];
  update_option('sorter_max',$sorter);
  echo 'Changed sorter max to ' . $sorter;
  log_change($user,'change sorter max to ' . $sorter,'sitewide');
?>
