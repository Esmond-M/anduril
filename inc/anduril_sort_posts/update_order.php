<?php
  require('../../../../../wp-load.php');
  require('log_change.php');

  $order_array = $_POST['order_array'];
  $category = $_POST['category'];
  echo 'We have received: ' . $order_array . ' for ' . $category . '. ';
  $orders = json_decode(str_replace('\\','',$order_array));
  echo var_dump($orders);
  foreach ($orders as $key => $value) {
    echo '. Key: ' . $key . ', value: ';
    echo $value;
    update_post_meta($key,'_anduril_' . $category . '_sort',$value);
  }

  log_change($user,'change sort order',$category);
?>
