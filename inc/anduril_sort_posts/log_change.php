<?php

  $user_obj = wp_get_current_user();
  $user = $user_obj->display_name;

  function log_change($user,$change,$page,$post = null,$id = null) {
    $changelog = json_decode(get_option('anduril_sorter_changelog'));
    if (empty($changelog)) {
      $changelog = array();
    }
    if (count($changelog) > 99) {
      array_pop($changelog);
    }
    $new_change = new stdClass();
    $new_change->date = date('Y-m-d H:i:s',strtotime('-7 hours'));
    $new_change->user = $user;
    $new_change->change = $change;
    $new_change->page = $page;
    $new_change->post = $post;
    $new_change->id = $id;
    array_push($changelog,$new_change);
    rsort($changelog);
    update_option('anduril_sorter_changelog',json_encode($changelog));
  }
?>
