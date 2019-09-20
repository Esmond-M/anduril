<?php
  if(!isset($use_anduril_template)) {
    $use_anduril_template = 'default-template';
  }

  $post_content = $post->post_content;
  $page_headline = get_the_title();

  if (is_404()) {
    $post_content = get_404_message();
  }

  if (is_search()) {
    $post_content = get_search_results();
    $page_headline = 'Here\'s what we found:';
  }

  get_header();

  if (is_active_sidebar($use_anduril_template . '-top')) {
    dynamic_sidebar($use_anduril_template . '-top');
  }
  ?>
<style>
/* Desktops and laptops ----------- */
@media only screen 
and (min-width : 1024px) {
/* Styles */ #can_embed_form form li {
    width: 250px!important;
  

}
}
</style>
  <div id="masterContainer">
    <div class="container-fluid">
      <div class="row">
        <?php
          if (is_active_sidebar($use_anduril_template . '-sidebar')) {
            ?>
                <div class="col-sm-8">
                  <div class="andurilColumnMargin">
                  <?php
                    if (!is_front_page()) {
                      ?>
                          <div class="pageHeadline">
                            <?php _e($page_headline); ?>
                          </div>
                      <?php
                    }
                    if (is_single($post) && get_post_type($post) == 'product') { //For WooCommerce product pages
                      echo do_shortcode('[product_page id="' . $post->ID . '"]');
                    }
                    else {
                      _e(apply_filters('the_content', $post_content));
                    }
                    ?>
                    </div> <!-- End andurilColumnMargin -->
                    <?php
                    dynamic_sidebar($use_anduril_template . '-main');
                  ?>
                </div> <!-- End col-sm-8 -->
                <div class="col-sm-4">
                  <div class="sidebarContainer">
                    <?php dynamic_sidebar($use_anduril_template . '-sidebar'); ?>
                  </div>
                </div>
              </div> <!-- End row -->
            </div> <!-- End conotainer-fluid -->
            <?php
          }
          else if (is_active_sidebar($use_anduril_template . '-main')) {
              if (is_single($post) || !empty($post_content)) { //So we don't get this div on a page w/o content
                ?>
                  <div class="col-sm-12">
                    <div class="andurilColumnMargin">
                <?php
              }
              if (!is_front_page()) {
                ?>
                <div class="pageHeadline">
                  <?php _e($page_headline); ?>
                </div>
                <?php
              }
              if (is_single($post) && get_post_type($post) == 'product') { //For WooCommerce product pages
                echo do_shortcode('[product_page id="' . $post->ID . '"]');
              }
              else {
                _e(apply_filters('the_content', $post_content));
              }
              if (is_single($post) || !empty($post_content)) { //So we don't get these divs on a page w/o content
                ?>
                    </div> <!-- End andurilColumnMargin -->
                  </div> <!-- End col-sm-12 -->
                <?php
              }
            ?>
            </div> <!-- End row -->
          </div> <!-- End conotainer-fluid -->
              <?php
                dynamic_sidebar($use_anduril_template . '-main');
          }
          else {
            ?>
              <div class="col-sm-12">
                <div class="andurilColumnMargin">
            <?php
            if (!is_front_page()) {
              ?>
                <div class="pageHeadline">
                  <?php _e($page_headline); ?>
                </div>
              <?php
            }
            if (is_single($post) && get_post_type($post) == 'product') { //For WooCommerce product pages
              echo do_shortcode('[product_page id="' . $post->ID . '"]');
            }
            else {
              _e(apply_filters('the_content', $post_content));
            }
          }
        ?>
          </div>  <!-- End andurilColumnMargin -->
        </div>
      </div>
    </div> <!-- End row -->
  </div> <!-- End conotainer-fluid -->
  <?php
  get_footer();
?>
