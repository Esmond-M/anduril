<?php

define('MASTER_SORT_NUMBER',get_option('sorter_max')); //This establishes accross the system how many items we're sorting. It's meant to be less than 100 and is changed in the sorter plugin

if (empty(MASTER_SORT_NUMBER)) {
  update_option('sorter_max', 30, true);
}

function set_new_post_sort($post_id) { //Sets sort priorities for new posts and updated posts
  $post_cats = wp_get_post_categories($post_id,array('fields' => 'all'));
  foreach ($post_cats as $post_cat) {
    $meta_sort = get_post_meta($post_id,'_anduril_' . $post_cat->slug . '_sort',true);
    $current_status = get_post_status($post_id);
    if (empty($meta_sort) && $current_status === 'publish') {
      update_post_meta($post_id, '_anduril_' . $post_cat->slug . '_sort', 0);
      $today = date('Y-m-d');
      $postarr = array(
        'posts_per_page'   => MASTER_SORT_NUMBER + 1, //The +1 is to get the last item to age out of this number,
        'offset'           => 0,
        'category_name'    => $post_cat->slug,
        'orderby'          => 'meta_value_num',
        'order'            => 'ASC',
        'meta_key'         => '_anduril_' . $post_cat->slug . '_sort',
        'post_type'        => 'any',
        'post_status'      => array('publish','private'),
        'suppress_filters' => false,
      );
      $posts_array = get_posts($postarr);
      foreach($posts_array as $post) {
        $rank = get_post_meta($post->ID,'_anduril_' . $post_cat->slug . '_sort',true);
        if ($rank < MASTER_SORT_NUMBER) { //Post is in the top X, but not the last
          update_post_meta($post->ID,'_anduril_' . $post_cat->slug . '_sort',$rank + 1); //Increment 1 point
        }
        else {
          update_post_meta($post->ID,'_anduril_' . $post_cat->slug . '_sort',1000); //Get it to bottom of list
        }
      }
    }
  }
}
add_action ('wp_insert_post', 'set_new_post_sort',10); //On insert or update any post

function anduril_sort_posts() {
    ?>
    <script>
      jQuery(document).ready(function(){
        themeDir = '<?php echo get_template_directory_uri(); ?>';
        jQuery("#modalBackground div").click(function(e) { //Stops clicks on children divs from triggering background "close" click event
         e.stopPropagation();
        });
        var cat = '<?php if(isset($_GET['category'])) { echo $_GET['category']; }?>';

        jQuery('#changeSortMax').change(function() {
          var sorter = jQuery('#changeSortMax').val();
          if (sorter > 99) { //Setting a max of 99 items to sort
            sorter = 99;
            jQuery('#changeSortMax').val(99);
          }
          if (sorter < 1) { //Setting a min of 0 items to sort (duh)
            sorter = 1;
          }
          var dataString = '&sorter=' + sorter;
          jQuery.ajax({
            type: "POST",
            url: themeDir + '/inc/anduril_sort_posts/write_sorter.php',
            data: dataString,
            success: function(data) {
              console.log(data);
            },
            error: function() {
              console.log('Whoops.');
            }
          });
        });

        jQuery("#changeSortMax").click(function() { //Make sorter text field selected when clicked
          jQuery(this).select();
        })
        jQuery("#searchBox").keyup(function(event){
          if(event.keyCode == 13){
              jQuery("#searchButton").click();
          }
        });
        jQuery('#andurilCategoryPicker').change(function(){
          jQuery('#searchOutputWrapper').css('display','block');
          var loaderGif = '<p style="text-align:center"><img src="' + themeDir + '/inc/anduril_sort_posts/img/loader.gif" /></p>';
          jQuery('#searchOutput').html(loaderGif);
          var location = window.location.href;
          var cat = jQuery('#andurilCategoryPicker').val();
          window.location.assign(location + '&category=' + cat);
        })
        jQuery('#sortable').sortable({
          update: function( event, ui ) {
            var x = 1;
            jQuery(this).children().each(function() {
              jQuery(this).find('td').eq(2).html(x);
              x++;
            });
            var sortOrderToPass = {};
            jQuery('#sortable').children().each(function() { //Building array of objects for post ID and order to pass to php to write to DB in post meta
              var postID = jQuery(this).find('td').eq(3).html();
              var order = jQuery(this).find('td').eq(2).html();
              sortOrderToPass[parseInt(postID)] = order;
            });
            var category = jQuery('#catSlug').html();
            console.log('sortOrderToPass:');
            console.log(sortOrderToPass);
            // var orderArray = JSON.stringify(sortOrderToPass);
            writeOrder (sortOrderToPass,category);
          }
        });
      });
      function writeOrder (orderArray,category) {
        var dataString = '&category=' + category + '&order_array=' + JSON.stringify(orderArray);
        console.log('We are sending: ' + orderArray + ' for category ' + category);
        jQuery.ajax({
          type: "POST",
          url: themeDir + '/inc/anduril_sort_posts/update_order.php',
          data: dataString,
          success: function(data) {
            console.log(data);
            // var returnObj = JSON.parse(data);
            // console.log(returnObj);
          },
          error: function() {
            console.log('Whoops.');
          }
        });
      }
      function unrankItem(postID) {
        var category = jQuery('#catSlug').html();
        jQuery('#searchOutputWrapper').css('display','block');
        jQuery('#searchOutput').html('<p style="text-align:center"><img src="' + themeDir + '/inc/anduril_sort_posts/img/loader.gif" /></p>');
        var dataString = '&category=' + category + '&post_id=' + postID;
        console.log('We are unranking post number ' + postID + ' from category ' + category);
        jQuery.ajax({
          type: "POST",
          url: themeDir + '/inc/anduril_sort_posts/unrank_item.php',
          data: dataString,
          success: function(data) {
            console.log(data);
            location.reload();
          },
          error: function() {
            console.log('Whoops.');
          }
        });
      }
      function submitSearch(sortType) {
        jQuery('#searchOutputWrapper').css('display','block');
        var category = jQuery('#catSlug').html();
        var terms = jQuery('#searchBox').val();
        console.log('We are searching ' + category + ' for ' + terms + ' with sort type of ' + sortType);
        var dataString = '&category=' + category + '&terms=' + terms + '&sort_type=' + sortType;
        jQuery.ajax({
          type: "POST",
          url: themeDir + '/inc/anduril_sort_posts/search_for_rank.php',
          data: dataString,
          success: function(data) {
            console.log(data);
            var output = JSON.parse(data);
            jQuery('#searchOutput').html(output.html);
          },
          error: function() {
            console.log('Whoops.');
          }
        });
      }
      function rankPost(postID) {
        var category = jQuery('#catSlug').html();
        jQuery('#searchOutputWrapper').css('display','block');
        jQuery('#searchOutput').html('<p style="text-align:center"><img src="' + themeDir + '/inc/anduril_sort_posts/img/loader.gif" /></p>');
        var dataString = '&category=' + category + '&post_id=' + postID;
        console.log('We have been told to rank the post with id ' + postID + ' in category ' + category);
        jQuery.ajax({
          type: "POST",
          url: themeDir + '/inc/anduril_sort_posts/rank_item.php',
          data: dataString,
          success: function(data) {
            console.log(data);
            location.reload();
          },
          error: function() {
            console.log('Whoops.');
          }
        });
      }
      function unrankAll() {
        var category = jQuery('#catSlug').html();
        var confirmUnrankAll = confirm('This will unrank all items from ' + category + ' page. Proceed?');
        if (confirmUnrankAll) {
          jQuery('#searchOutputWrapper').css('display','block');
          jQuery('#searchOutput').html('<p style="text-align:center"><img src="' + themeDir + '/inc/anduril_sort_posts/img/loader.gif" /></p>');
          console.log('We have an unrank all order for category ' + category);
          var dataString = '&category=' + category;
          jQuery.ajax({
            type: "POST",
            url: themeDir + '/inc/anduril_sort_posts/unrank_all.php',
            data: dataString,
            success: function(data) {
              console.log(data);
              location.reload();
            },
            error: function() {
              console.log('Whoops.');
            }
          });
        }
      }

      function viewLog() {
        jQuery('#modalBackground').fadeIn();
        var changelog = JSON.parse('<?php echo get_option('anduril_sorter_changelog'); ?>');
        var modalContent = '';
        for (var x = 0; x < changelog.length; x++) {
          modalContent += '<p><b>' + (parseInt(changelog.length) - x) + '.</b> ' + changelog[x].date + ' - ' + changelog[x].user + ' - ' + changelog[x].change + ' - ' + changelog[x].page;
          if (changelog[x].post) {
            modalContent += ' - ' + changelog[x].post + ' (' + changelog[x].id + ')';
          }
          modalContent += '</p>';
        }
        jQuery('#modalContent').html(modalContent);
      }
      function fadeOutModal() {
        jQuery('#modalBackground').fadeOut();
      }
    </script>

    <style>
      #modalBackground {
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: none;
      }
      #modalWrapper {
        background-color: #000;
        color: #fff;
        position: relative;
        top: 30px;
        left: 100px;
        width: 600px;
        height: auto;
        min-height: 100px;
        max-height: 80vh;
        border-radius: 15px;
        padding: 0px 15px 15px 15px;
      }
      #modalContent {
        background-color: #fff;
        color: #000;
        overflow-y: auto;
        max-height: calc(80vh - 45px);
        width: calc(100% - 30px);
        padding: 15px;
      }
    </style>

    <div class="wrap">
      <div>
        <div style="font-size: 12px; cursor: pointer"><a onclick="viewLog()">View log</a></div>
        <!-- Begin modal -->
        <div id="modalBackground" onclick="fadeOutModal()">
          <div id="modalWrapper">
            <div style="text-align: right; color: #fff; background-color: #000; font-weight: bold; height: 15px; width: 100%; line-height: 10px; padding: 0px; margin: 0px"><span onclick="fadeOutModal()" style="cursor: pointer;">x</span></div>
            <div id="modalContent"></div>
          </div>
        </div>
        <!-- Eng modal -->
        <span class="alignright" style="border: 1px solid #0073aa; border-radius: 5px; padding: 0px 3px 0px 3px; margin-left: 10px">Max sortable (site wide): <input type="text"  maxlength="2" style="width: 28px" id="changeSortMax" value="<?php echo get_option('sorter_max'); ?>"/></span>
        <h1 class="wp-heading-inline"><span id="sortLabel" style="padding: 3px">Sort <?php //This is to tell us which category we're working on, and also put the category in the #workingCat element for JS to find
          $sort_type = 'cat'; // We default to 'home,' so this $sort_type is 'cat' like home, even if category is not set in URL
          if (isset($_GET['category'])) {
            $category_slug = $_GET['category'];
            if (get_category_by_slug($category_slug)) { //It's a category
              $category_obj = get_category_by_slug($category_slug);
              $category_name = $category_obj->name;
              $sort_type = 'cat'; //So we can tell lstter that this is a category-based sort
            }
            else if(is_numeric($category_slug)) { //It's a filtered page
              $category_obj = get_post($category_slug);
              $category_name = $category_obj->post_title;
              $sort_type = 'filtered'; //So we can tell letter that this is a CPT-based sort
            }
            else { //It's a CPT
              $category_obj = get_post_type_object($category_slug);
              $category_name = $category_obj->label;
              $sort_type = 'cpt'; //So we can tell letter that this is a CPT-based sort
            }

            echo '<span id="workingCat">' . $category_name . '</span>';
          }
          else { //We default to home if nothing selected
            echo '<span id="workingCat">Home</span>';
            $category_slug = 'home';
            $category_name = 'Home';
          }
        ?>
        </div>
        <?php
          echo '<p id="catSlug" style="display: none">' . $category_slug . '</p>'; //This is where JS gets the category slug
        ?>
      <hr class="wp-header-end">
      <div class="tablenav top">
        <div class="alignleft actions">
          <select id="andurilCategoryPicker">
            <option value="">Change category</option>
            <?php
              $all_pages = get_pages();
              $all_page_slugs = array(); //We make an array of all page slugs so we can check whether given CPT or category has a corresponding page below
              foreach ($all_pages as $page) {
                array_push($all_page_slugs,$page->post_name);
              }

              $categories_array = get_categories();

              foreach ($categories_array as $listing) {
                $listing_slug = $listing->slug;
                $listing_name = $listing->name;
                echo '<option value="' . $listing_slug . '">' . $listing_name . '</option>';
              }

            ?>
          </select>
        </div>
        <div class="alignright actions">
          <input id="searchBox" type="search" placeholder="Enter text" /> <input type="button" id="searchButton" class="button" value="Search" onclick="submitSearch('<?php echo $sort_type; ?>')" />
        </div>
      </div>
      <div id="searchOutputWrapper" style="margin: 15px 0px 15px 0px; padding: 2px 2px 2px 10px; border: 1px solid #999; display: none">
        <div id="searchOutput" style="max-height: 300px; overflow-y: auto">
          <p style="text-align:center">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/anduril_sort_posts/img/loader.gif" />
          </p>
        </div>
      </div>
      <div id="tableWrap">
        <table class="wp-list-table widefat fixed striped posts">
  	      <thead>
  	        <tr>
              <td style="width: 40%">
                <b>Title</b>
              </td>
              <td>
                <b>View Post</b>
              </td>
              <td style="width: 10%">
                <b>Rank</b>
              </td>
              <td style="width: 10%">
                <b>ID</b>
              </td>
              <td>
                <b>Post Type</b>
              </td>
              <td>
                <b>Date</b>
              </td>
              <td>
                <b>Unrank</b>
              </td>
            </tr>
          </thead>
        <?php
          if (isset( $_GET['category'])) {
            $category = $_GET['category'];
          }
          else {
            $category = 'home';
          }
          $today = date("Y-m-d");
          if ($sort_type === 'cat') { //We are building our array based on cat
            $args = array(
              'posts_per_page'   => MASTER_SORT_NUMBER,
              'offset'           => 0,
              'category_name'    => $category,
              'orderby'          => array ('meta_value_num' => 'ASC', 'date' => 'DESC'),
              'meta_key'         => '_anduril_' . $category . '_sort',
              'post_type'        => 'any',
              'post_status'      => array('publish','private'),
              'suppress_filters' => false,
              'meta_query'       => array (
                array (
                  'key'       => '_anduril_' . $category . '_sort',
                  'value'     => MASTER_SORT_NUMBER,
                  'type' => 'NUMERIC',
                  'compare'   => '<=' //Keep stuff over MASTER_SORT_NUMBER out of the picture
                )
              )
            );
            $posts_array = get_posts($args);
          }
          else if ($sort_type === 'filtered') { //We are building our array based on filter
            $args = array(
              'posts_per_page'   => MASTER_SORT_NUMBER,
              'offset'           => 0,
              'orderby'          => array ('meta_value_num' => 'ASC', 'date' => 'DESC'),
              'meta_key'         => '_anduril_' . $category . '_sort',
              'post_type'        => 'any',
              'post_status'      => array('publish','private'),
              'suppress_filters' => false,
              'meta_query'       => array (
                array (
                  'key'       => '_anduril_' . $category . '_sort',
                  'value'     => MASTER_SORT_NUMBER,
                  'type' => 'NUMERIC',
                  'compare'   => '<=' //Keep stuff over MASTER_SORT_NUMBER out of the picture
                )
              )
            );
            $posts_array = get_posts($args);
          }
          else { //Building array based on CPT
            $args = array(
              'posts_per_page'   => MASTER_SORT_NUMBER,
              'offset'           => 0,
              'orderby'          => array ('meta_value_num' => 'ASC', 'date' => 'DESC'),
              'meta_key'         => '_anduril_' . $category . '_sort',
              'post_type'        => $category,
              'post_status'      => array('publish','private'),
              'suppress_filters' => false,
              'meta_query'       => array (
                array (
                  'key'       => '_anduril_' . $category . '_sort',
                  'value'     => MASTER_SORT_NUMBER,
                  'type' => 'NUMERIC',
                  'compare'   => '<=' //Keep stuff over MASTER_SORT_NUMBER out of the picture
                )
              )
            );
            $posts_array = get_posts($args);
          }
          echo '<tbody id="sortable">';
          foreach ($posts_array as $post) { //Retrieve the meta data for sort order FOR THIS CATEGORY

            $order = get_post_meta($post->ID, '_anduril_' . $category . '_sort', true);

            if (empty($order)) {
              $order = 1;
            }

            $view_url = get_permalink($post); //Set the click URL for the "open" button
            if ($post->post_type === 'externallinks') { //If it's an external link, change view URL to external link meta field
              $view_url = $post->_anduril_external_link;
            }

            echo '<tr>
                    <td>
                      <a href="../wp-admin/post.php?post=' . $post->ID . '&action=edit" target="_blank">' . $post->post_title . '</a>
                    </td>
                    <td>
                      <a href="' . $view_url . '" target="_blank"><span class="button">Open</span></a>
                    </td>
                    <td>
                    ' . $order . '
                    </td>
                    <td>
                    ' . $post->ID . '
                    </td>
                    <td>
                      ' . $post->post_type . '
                    </td>
                    <td>
                      ' . $post->post_date . '
                    </td>
                    <td>
                      <span class="button" onclick="unrankItem(' . $post->ID . ')"><b>X</b></span>
                    </td>
                  </tr>
            ';
          }
          echo '<tr>
                  <td>
                    <input type="button" class="button" id="unrankAllButton" onclick="unrankAll()" value="Unrank all" />
                  </td>
                </tr>';
          echo '</tbody>';

        ?></span></h1>
      </table>
    </div> <!-- end table wrap div -->
  </div> <!-- end main wrap div -->
    <?php
}

function anduril_admin_menu() { //Put it on dashboard menu
	add_menu_page( 'Anduril Posts Sorter', 'Sort Posts', 'manage_options', 'sort_categories', 'anduril_sort_posts', 'dashicons-admin-generic', 6  );
  wp_enqueue_script( 'jquery-ui-sortable' );
}

add_action( 'admin_menu', 'anduril_admin_menu' );

?>
