<?php
  //Register widgetized areas (sidebars) and widgets
  function anduril_widgets_init() {
      //Start with sidebars
      register_sidebar(
        array(
          'name'          => __('Front Page - Top', 'anduril'),
          'id'            => 'template-front-page-top',
          'description'   => __('Widgets in this area will be appear at the top and span the width of the front page.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Front Page - Main', 'anduril'),
          'id'            => 'template-front-page-main',
          'description'   => __('Widgets in this area will be appear in the main column of the front page.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Front Page - Sidebar', 'anduril'),
          'id'            => 'template-front-page-sidebar',
          'description'   => __('Widgets in this area will be appear in the sidebar column of the front page.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Template One - Top', 'anduril'),
          'id'            => 'template-one-top',
          'description'   => __('Widgets in this area will be appear at the top and span the width of pages with Template One.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Template One - Main', 'anduril'),
          'id'            => 'template-one-main',
          'description'   => __('Widgets in this area will be appear in the main column of pages with Template One.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Template One - Sidebar', 'anduril'),
          'id'            => 'template-one-sidebar',
          'description'   => __('Widgets in this area will be appear in the sidebar column of pages with Template One.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Template Two - Top', 'anduril'),
          'id'            => 'template-two-top',
          'description'   => __('Widgets in this area will be appear at the top and span the width of pages with Template Two.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Template Two - Main', 'anduril'),
          'id'            => 'template-two-main',
          'description'   => __('Widgets in this area will be appear in the main column of pages with Template Two.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Template Two - Sidebar', 'anduril'),
          'id'            => 'template-two-sidebar',
          'description'   => __('Widgets in this area will be appear in the sidebar column of pages with Template Two.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Template Three - Top', 'anduril'),
          'id'            => 'template-three-top',
          'description'   => __('Widgets in this area will be appear at the top and span the width of pages with Template Three.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Template Three - Main', 'anduril'),
          'id'            => 'template-three-main',
          'description'   => __('Widgets in this area will be appear in the main column of pages with Template Three.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Template Three - Sidebar', 'anduril'),
          'id'            => 'template-three-sidebar',
          'description'   => __('Widgets in this area will be appear in the sidebar column of pages with Template Three.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Template Four - Top', 'anduril'),
          'id'            => 'template-four-top',
          'description'   => __('Widgets in this area will be appear at the top and span the width of pages with Template Four.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Template Four - Main', 'anduril'),
          'id'            => 'template-four-main',
          'description'   => __('Widgets in this area will be appear in the main column of pages with Template Four.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Template Four - Sidebar', 'anduril'),
          'id'            => 'template-four-sidebar',
          'description'   => __('Widgets in this area will be appear in the sidebar column of pages with Template Four.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Template Five - Top', 'anduril'),
          'id'            => 'template-five-top',
          'description'   => __('Widgets in this area will be appear at the top and span the width of pages with Template Five.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Template Five - Main', 'anduril'),
          'id'            => 'template-five-main',
          'description'   => __('Widgets in this area will be appear in the main column of pages with Template Five.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Template Five - Sidebar', 'anduril'),
          'id'            => 'template-five-sidebar',
          'description'   => __('Widgets in this area will be appear in the sidebar column of pages with Template Five.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Default Template - Top', 'anduril'),
          'id'            => 'default-template-top',
          'description'   => __('Widgets in this area will be appear at the top and span the width of pages with Default Template.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Default Template - Main', 'anduril'),
          'id'            => 'default-template-main',
          'description'   => __('Widgets in this area will be appear in the main column of pages with Default Template.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Default Template - Sidebar', 'anduril'),
          'id'            => 'default-template-sidebar',
          'description'   => __('Widgets in this area will be appear in the sidebar column of pages with Default Template.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Post - Top', 'anduril'),
          'id'            => 'post-top',
          'description'   => __('Widgets in this area will be appear at the top and span the width of posts.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Post - Main', 'anduril'),
          'id'            => 'post-main',
          'description'   => __('Widgets in this area will be appear in the main column of posts.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );
      register_sidebar(
        array(
          'name'          => __('Post - Sidebar', 'anduril'),
          'id'            => 'post-sidebar',
          'description'   => __('Widgets in this area will be appear in the sidebar column of posts.', 'anduril'),
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2 class="widgettitle">',
          'after_title'   => '</h2>',
        )
      );

      //Now widgets
      register_widget('anduril_big_top_widget');
      register_widget('anduril_small_top_widget');
      register_widget('anduril_static_top_widget');
      register_widget('anduril_list_posts_widget');
      register_widget('anduril_content_slider_widget');
      register_widget('anduril_content_scroller_widget');
      register_widget('anduril_products_widget');
      register_widget('anduril_parallax_image_widget');
  }
  add_action('widgets_init', 'anduril_widgets_init');

  // Creating the Big Top widget
  class anduril_big_top_widget extends WP_Widget {

    function __construct() {
    parent::__construct(
      'anduril_big_top_widget', //ID
      __('Anduril Top - Big ', 'anduril'), //Label for editor
      array( //Description for editor
        'description' => __('A big, parallax branding image (uses media/branding-background.jpg)', 'anduril'),
        )
      );
    }

    public function widget($args, $instance) { //Widget front-end
      $output = get_big_top_output($args, $instance);
      echo __($output, 'anduril');
    }

    public function form($instance) { //Widget backend
      if (isset($instance['headline'])) {
        $headline = $instance['headline'];
      }
      else {
        $headline = __('', 'anduril');
      }
      if (isset($instance['subhead'])) {
        $subhead = $instance['subhead'];
      }
      else {
        $subhead = __(get_bloginfo('name'), 'anduril');
      }
      if (isset($instance['subsubhead'])) {
        $subsubhead = $instance['subsubhead'];
      }
      else {
        $subsubhead = '';
      }
      if (isset($instance['message'])) {
        $message = $instance['message'];
      }
      else {
        $message = __(get_bloginfo('description'), 'anduril');
      }
      if (isset($instance['custom'])) {
        $custom = $instance['custom'];
      }
      else {
        $custom = __('', 'anduril');
      }
      $branding = $instance['branding'] ? 'true' : 'false';
      ?>
        <p>
          <label for="<?php echo $this->get_field_id('headline'); ?>"><?php _e('Headline:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('headline'); ?>" name="<?php echo $this->get_field_name('headline'); ?>" type="text" value="<?php echo esc_attr($headline); ?>" />

          <label for="<?php echo $this->get_field_id('subhead'); ?>"><?php _e('Subhead:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('subhead'); ?>" name="<?php echo $this->get_field_name('subhead'); ?>" type="text" value="<?php echo esc_attr($subhead); ?>" />

          <label for="<?php echo $this->get_field_id('subsubhead'); ?>"><?php _e('Subsubhead:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('subsubhead'); ?>" name="<?php echo $this->get_field_name('subsubhead'); ?>" type="text" value="<?php echo esc_attr($subsubhead); ?>" />

          <label for="<?php echo $this->get_field_id('message'); ?>"><?php _e('Message:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('message'); ?>" name="<?php echo $this->get_field_name('message'); ?>" type="text" value="<?php echo esc_attr($message); ?>" />

          <label for="<?php echo $this->get_field_id('custom'); ?>"><?php _e('Custom code block:'); ?></label>
          <textarea class="widefat" id="<?php echo $this->get_field_id('custom'); ?>" name="<?php echo $this->get_field_name('custom'); ?>"><?php echo esc_attr($custom); ?></textarea>

          <label for="<?php echo $this->get_field_id('branding'); ?>">Use branding image (media/branding.png):</label>
          <input class="checkbox" type="checkbox" <?php checked($instance['branding'], 'on'); ?> id="<?php echo $this->get_field_id('branding'); ?>" name="<?php echo $this->get_field_name('branding'); ?>" />
        </p>
      <?php
    }

    public function update($new_instance, $old_instance) { // Updating widget replacing old instances with new
      $instance = array();
      $instance['headline'] = (!empty($new_instance['headline'])) ? strip_tags($new_instance['headline']) : '';
      $instance['subhead'] = (!empty($new_instance['subhead'])) ? strip_tags($new_instance['subhead']) : '';
      $instance['subsubhead'] = (!empty($new_instance['subsubhead'])) ? strip_tags($new_instance['subsubhead']) : '';
      $instance['message'] = (!empty($new_instance['message'])) ? strip_tags($new_instance['message']) : '';
      $instance['custom'] = (!empty($new_instance['custom'])) ? $new_instance['custom'] : '';
      $instance['branding'] = $new_instance['branding'];
      return $instance;
    }
  } //Class anduril_big_top_widget ends here

  function get_big_top_output($widget_args, $instance) {
    echo $widget_args['before_widget'];
    ?>
      <div class="parallax">
        <div class="parallaxContent">
          <div class="bigTopContainer">
            <div class="bigTopContent">
              <div class="container-fluid">
                <div class="row eqRow">
                  <?php
                    if (empty($instance['custom'])) { //We span page if no custom code, otherwise two cols of 6
                      ?>
                        <div class="col-sm-12">
                      <?php
                    }
                    else {
                      ?>
                        <div class="col-sm-7">
                      <?php
                    }
                  ?>
                    <?php
                      if (!empty($instance['headline'])) {
                        ?>
                          <div class="bigTopHeadline"><?php _e($instance['headline']); ?></div>
                        <?php
                      }
                      if ($instance['branding']) {
                        ?>
                          <div class="bigTopBrandingImgTextContainer">
                            <div class="bigTopBrandingImgContainer">
                              <div class="bigTopBrandingImg">
                                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/media/branding.png" /></a>
                              </div>
                            </div>
                            <?php
                              if (!empty($instance['subhead']) || !empty($instance['subsubhead']) || !empty($instance['message'])) {
                            ?>
                              <div class="bigTopBrandingTextContainer">
                                <div class="bigTopTextBox">
                                  <?php
                                    if (!empty($instance['subhead'])) {
                                      ?>
                                        <div class="bigTopSubhead"><?php _e($instance['subhead']); ?></div>
                                      <?php
                                    }
                                    if (!empty($instance['subsubhead'])) {
                                      ?>
                                        <div class="bigTopSubSubhead"><?php _e($instance['subsubhead']); ?></div>
                                      <?php
                                    }
                                    if (!empty($instance['message'])) {
                                      ?>
                                        <div class="bigTopMessage"><?php _e($instance['message']); ?></div>
                                      <?php
                                    }
                                  ?>
                              </div>
                            </div>
                          <?php
                            }
                          ?>
                        </div>
                        <?php
                      }
                      else {
                        ?>
                          <div class="bigTopTextBox">
                        <?php
                        if (!empty($instance['subhead'])) {
                          ?>
                            <div class="bigTopSubhead"><?php _e($instance['subhead']); ?></div>
                          <?php
                        }
                        if (!empty($instance['subsubhead'])) {
                          ?>
                            <div class="bigTopSubSubhead"><?php _e($instance['subsubhead']); ?></div>
                          <?php
                        }
                        if (!empty($instance['message'])) {
                          ?>
                            <div class="bigTopMessage"><?php _e($instance['message']); ?></div>
                          <?php
                        }
                          ?>
                            </div>
                          <?php
                      }
                  ?>
                  </div>
                  <?php
                    if (!empty($instance['custom'])) {
                      ?>
                        <div class="col-sm-5">
                          <div class="bigTopCustomCodeContainer">
                            <div class="bigTopCustomCode">
                              <div class="bigTopCustomCodeMargin">
                                <?php _e($instance['custom']); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
    echo $widget_args['after_widget'];
  }

  // Creating the Small Top widget
  class anduril_small_top_widget extends WP_Widget {

    function __construct() {
    parent::__construct(
      'anduril_small_top_widget', //ID
      __('Anduril Top - Small', 'anduril'), //Label for editor
      array( //Description for editor
        'description' => __('A thin parralax branding image (uses media/branding-background.jpg)', 'anduril'),
        )
      );
    }

    public function widget($args, $instance) { //Widget front-end
      $output = get_small_top_output($args, $instance);
      echo __($output, 'anduril');
    }

    public function form($instance) { //Widget backend
      if (isset($instance['headline'])) {
        $headline = $instance['headline'];
      }
      else {
        $headline = __(get_bloginfo('name'), 'anduril');
      }
      $branding = $instance['branding'] ? 'true' : 'false';
      if (isset($instance['custom'])) {
        $custom = $instance['custom'];
      }
      else {
        $custom = __('', 'anduril');
      }
      ?>
        <p>
          <label for="<?php echo $this->get_field_id('headline'); ?>"><?php _e('Headline:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('headline'); ?>" name="<?php echo $this->get_field_name('headline'); ?>" type="text" value="<?php echo esc_attr($headline); ?>" />

          <label for="<?php echo $this->get_field_id('custom'); ?>"><?php _e('Custom code block:'); ?></label>
          <textarea class="widefat" id="<?php echo $this->get_field_id('custom'); ?>" name="<?php echo $this->get_field_name('custom'); ?>"><?php echo esc_attr($custom); ?></textarea>

          <label for="<?php echo $this->get_field_id('branding'); ?>">Use branding image:</label>
          <input class="checkbox" type="checkbox" <?php checked($instance['branding'], 'on'); ?> id="<?php echo $this->get_field_id('branding'); ?>" name="<?php echo $this->get_field_name('branding'); ?>" />
        </p>
      <?php
    }

    public function update($new_instance, $old_instance) { // Updating widget replacing old instances with new
      $instance = array();
      $instance['headline'] = (!empty($new_instance['headline'])) ? strip_tags($new_instance['headline']) : '';
      $instance['custom'] = (!empty($new_instance['custom'])) ? $new_instance['custom'] : '';
      $instance['branding'] = $new_instance['branding'];
      return $instance;
    }
  } //Class anduril_small_top_widget ends here

  function get_small_top_output($widget_args, $instance) {
    echo $widget_args['before_widget'];
    if (!empty($instance['headline'])) {
      $headline = $instance['headline'];
    }
    else {
      $headline = '';
    }
    if (!empty($instance['custom'])) {
      $custom = $instance['custom'];
    }
    else {
      $custom = '';
    }
    ?>
      <div class="smallTop">
        <div class="smallTopContent">
          <?php
            if ($instance['branding']) {
              ?>
                <div class="smallTopImageContainer">
                  <a href="<?php echo get_site_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/branding.png" class="smallTopBrandingImg"/>
                  </a>
                </div>
              <?php
            }
            if (!empty($headline)) {
              ?>
                <div class="smallTopHeadlineContainer">
                  <?php _e($instance['headline']); ?>
                </div>
              <?php
            }
            if (!empty($custom)) {
              ?>
                <div class="smallTopCodeContainer">
                  <?= $instance['custom']; ?>
                </div>
              <?php
            }
          ?>
        </div>
      </div>
    <?php
    echo $widget_args['after_widget'];
  }

  // Creating the Static Top widget
  class anduril_static_top_widget extends WP_Widget {

    function __construct() {
    parent::__construct(
      'anduril_static_top_widget', //ID
      __('Anduril Top - Static', 'anduril'), //Label for editor
      array( //Description for editor
        'description' => __('A plain, variable-height branding image (uses media/branding-static.png)', 'anduril'),
        )
      );
    }

    public function widget($args, $instance) { //Widget front-end
      $output = get_static_top_output($args, $instance);
      echo __($output, 'anduril');
    }
  } //Class anduril_static_top_widget ends here

  function get_static_top_output($widget_args, $instance) {
    echo $widget_args['before_widget'];
    ?>
      <div class="staticTop">
        <a href="/">
          <img src="<?php echo get_template_directory_uri(); ?>/media/branding-static.png" class="staticTopImg" />
        </a>
      </div>
    <?php
    echo $widget_args['after_widget'];
  }

  // Creating the List Posts widget
  class anduril_list_posts_widget extends WP_Widget {

    function __construct() {
    parent::__construct(
      'anduril_list_posts_widget', //ID
      __('Anduril List Posts', 'anduril'), //Label for editor
      array( //Description for editor
        'description' => __('Display posts in a customized list', 'anduril'),
        )
      );
    }

    public function widget($args, $instance) { //Widget front-end
      $output = get_list_posts_output($args, $instance);
      echo __($output, 'anduril');
    }

    public function form($instance) { //Widget backend
      if (isset($instance['title'])) {
        $title = $instance['title'];
      }
      else {
        $title = __('', 'anduril');
      }
      if (isset($instance['subtitle'])) {
        $subtitle = $instance['subtitle'];
      }
      else {
        $subtitle = __('', 'anduril');
      }
      if (isset($instance['number'])) {
        $number = $instance['number'];
      }
      else {
        $number = __('99', 'anduril');
      }
      if (isset($instance['columns'])) {
        $columns = $instance['columns'];
      }
      else {
        $columns = __('3', 'anduril');
      }
      if (isset($instance['category'])) {
        $category = $instance['category'];
      }
      else {
        $category = __('', 'anduril');
      }
      if (isset($instance['specific_posts'])) {
        $specific_posts = $instance['specific_posts'];
      }
      else {
        $specific_posts = __('', 'anduril');
      }
      if (isset($instance['background_color'])) {
        $background_color = $instance['background_color'];
      }
      else {
        $background_color = __('#fff', 'anduril');
      }
      if (isset($instance['background_img'])) {
        $background_img = $instance['background_img'];
      }
      else {
        $background_img = __('', 'anduril');
      }
      if (isset($instance['widget_class'])) {
        $widget_class = $instance['widget_class'];
      }
      else {
        $widget_class = __('listPosts', 'anduril');
      }
      if (isset($instance['thumbnail_float'])) {
        $thumbnail_float = $instance['thumbnail_float'];
      }
      else {
        $thumbnail_float = __('', 'anduril');
      }
      if (isset($instance['floated_width'])) {
        $floated_width = $instance['floated_width'];
      }
      else {
        $floated_width = __(200, 'anduril');
      }
      if (isset($instance['thumbnail_order'])) {
        $thumbnail_order = $instance['thumbnail_order'];
      }
      else {
        $thumbnail_order = __(1, 'anduril');
      }
      if (isset($instance['headline_order'])) {
        $headline_order = $instance['headline_order'];
      }
      else {
        $headline_order = __(2, 'anduril');
      }
      if (isset($instance['excerpt_order'])) {
        $excerpt_order = $instance['excerpt_order'];
      }
      else {
        $excerpt_order = __(3, 'anduril');
      }
      if (isset($instance['content_order'])) {
        $content_order = $instance['content_order'];
      }
      else {
        $content_order = __(0, 'anduril');
      }
      if (isset($instance['more_button'])) {
        $more_button = $instance['more_button'];
      }
      else {
        $more_button = __('Learn more', 'anduril');
      }

      //Build categories dropdown
      $categories_dropdown_code = '<option value="">Match page slug</option>';
      $categories = get_categories();
      foreach ($categories as $cat) {
        if ($cat->slug === $category) {
          $selected = ' selected';
        }
        else {
          $selected = '';
        }
        $categories_dropdown_code .= '<option value="' . $cat->slug . '"' . $selected . '>' . $cat->name . '</option>';
        $disable_link = $instance['disable_link'] ? 'true' : 'false';
      }

      ?>
        <p>
          <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />

          <label for="<?php echo $this->get_field_id('subtitle'); ?>"><?php _e('Subtitle:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('subtitle'); ?>" name="<?php echo $this->get_field_name('subtitle'); ?>" type="text" value="<?php echo esc_attr($subtitle); ?>" />

          <label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number of posts:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="number" value="<?php echo esc_attr($number); ?>" min="1" max="99" />

          <label for="<?php echo $this->get_field_id('columns'); ?>"><?php _e('Columns:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('columns'); ?>" name="<?php echo $this->get_field_name('columns'); ?>" type="number" value="<?php echo esc_attr($columns); ?>" min="1" max="6" />

          <label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Category:'); ?></label>
          <select class="widefat" id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" value="<?php echo esc_attr($category); ?>">
            <?php echo $categories_dropdown_code; ?>
          </select>

          <label for="<?php echo $this->get_field_id('specific_posts'); ?>"><?php _e('Specific posts (comma separated IDs, overrides category):'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('specific_posts'); ?>" name="<?php echo $this->get_field_name('specific_posts'); ?>" type="text" value="<?php echo esc_attr($specific_posts); ?>" />

          <label for="<?php echo $this->get_field_id('background_color'); ?>"><?php _e('Background color:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('background_color'); ?>" name="<?php echo $this->get_field_name('background_color'); ?>" type="text" value="<?php echo esc_attr($background_color); ?>" />

          <label for="<?php echo $this->get_field_id('background_img'); ?>"><?php _e('Background image URL:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('background_img'); ?>" name="<?php echo $this->get_field_name('background_img'); ?>" type="text" value="<?php echo esc_attr($background_img); ?>" />

          <label for="<?php echo $this->get_field_id('widget_class'); ?>"><?php _e('Widget class:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('widget_class'); ?>" name="<?php echo $this->get_field_name('widget_class'); ?>" type="text" value="<?php echo esc_attr($widget_class); ?>" />

          <label for="<?php echo $this->get_field_id('thumbnail_float'); ?>"><?php _e('Thumnail float:'); ?></label>
          <select class="widefat" id="<?php echo $this->get_field_id('thumbnail_float'); ?>" name="<?php echo $this->get_field_name('thumbnail_float'); ?>" value="<?php echo esc_attr($thumbnail_order); ?>">
            <option value="">None</option>
            <option value="left"<?php if ($thumbnail_float == 'left') {echo ' selected';} ?>>Left</option>
            <option value="right"<?php if ($thumbnail_float == 'right') {echo ' selected';} ?>>Right</option>
          </select>

          <label for="<?php echo $this->get_field_id('floated_width'); ?>"><?php _e('Floated thumbnail width (desktop, px):'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('floated_width'); ?>" name="<?php echo $this->get_field_name('floated_width'); ?>" type="number" value="<?php echo esc_attr($floated_width); ?>" />

          <label for="<?php echo $this->get_field_id('thumbnail_order'); ?>"><?php _e('Thumnail order:'); ?></label>
          <select class="widefat" id="<?php echo $this->get_field_id('thumbnail_order'); ?>" name="<?php echo $this->get_field_name('thumbnail_order'); ?>" value="<?php echo esc_attr($thumbnail_order); ?>">
            <?php echo anduril_get_order_dropdown($thumbnail_order); ?>
          </select>

          <label for="<?php echo $this->get_field_id('headline_order'); ?>"><?php _e('Headline order:'); ?></label>
          <select class="widefat" id="<?php echo $this->get_field_id('headline_order'); ?>" name="<?php echo $this->get_field_name('headline_order'); ?>" value="<?php echo esc_attr($headline_order); ?>">
            <?php echo anduril_get_order_dropdown($headline_order); ?>
          </select>

          <label for="<?php echo $this->get_field_id('excerpt_order'); ?>"><?php _e('Exceprt order:'); ?></label>
          <select class="widefat" id="<?php echo $this->get_field_id('excerpt_order'); ?>" name="<?php echo $this->get_field_name('excerpt_order'); ?>" value="<?php echo esc_attr($excerpt_order); ?>">
            <?php echo anduril_get_order_dropdown($excerpt_order); ?>
          </select>

          <label for="<?php echo $this->get_field_id('content_order'); ?>"><?php _e('Content order:'); ?></label>
          <select class="widefat" id="<?php echo $this->get_field_id('content_order'); ?>" name="<?php echo $this->get_field_name('content_order'); ?>" value="<?php echo esc_attr($content_order); ?>">
            <?php echo anduril_get_order_dropdown($content_order); ?>
          </select>

          <label for="<?php echo $this->get_field_id('more_button'); ?>"><?php _e('Button text:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('more_button'); ?>" name="<?php echo $this->get_field_name('more_button'); ?>" type="text" value="<?php echo esc_attr($more_button); ?>" />

          <label for="<?php echo $this->get_field_id('disable_link'); ?>">Disable link:</label>
          <input class="checkbox" type="checkbox" <?php checked($instance['disable_link'], 'on'); ?> id="<?php echo $this->get_field_id('disable_link'); ?>" name="<?php echo $this->get_field_name('disable_link'); ?>" />
        </p>
      <?php
    }

    public function update($new_instance, $old_instance) { // Updating widget replacing old instances with new
      $instance = array();
      $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
      $instance['subtitle'] = (!empty($new_instance['subtitle'])) ? strip_tags($new_instance['subtitle']) : '';
      $instance['number'] = (!empty($new_instance['number'])) ? strip_tags($new_instance['number']) : '';
      $instance['columns'] = (!empty($new_instance['columns'])) ? strip_tags($new_instance['columns']) : '';
      $instance['category'] = (!empty($new_instance['category'])) ? strip_tags($new_instance['category']) : '';
      $instance['specific_posts'] = (!empty($new_instance['specific_posts'])) ? strip_tags($new_instance['specific_posts']) : '';
      $instance['background_color'] = (!empty($new_instance['background_color'])) ? strip_tags($new_instance['background_color']) : '';
      $instance['background_img'] = (!empty($new_instance['background_img'])) ? strip_tags($new_instance['background_img']) : '';
      $instance['widget_class'] = (!empty($new_instance['widget_class'])) ? strip_tags($new_instance['widget_class']) : '';
      $instance['thumbnail_float'] = (!empty($new_instance['thumbnail_float'])) ? strip_tags($new_instance['thumbnail_float']) : '';
      $instance['floated_width'] = (!empty($new_instance['floated_width'])) ? strip_tags($new_instance['floated_width']) : '';
      $instance['thumbnail_order'] = (!empty($new_instance['thumbnail_order'])) ? strip_tags($new_instance['thumbnail_order']) : '';
      $instance['headline_order'] = (!empty($new_instance['headline_order'])) ? strip_tags($new_instance['headline_order']) : '';
      $instance['excerpt_order'] = (!empty($new_instance['excerpt_order'])) ? strip_tags($new_instance['excerpt_order']) : '';
      $instance['content_order'] = (!empty($new_instance['content_order'])) ? strip_tags($new_instance['content_order']) : '';
      $instance['more_button'] = (!empty($new_instance['more_button'])) ? strip_tags($new_instance['more_button']) : '';
      $instance['disable_link'] = $new_instance['disable_link'];
      return $instance;
    }
  } //Class anduril_list_posts_widget ends here

  function anduril_get_order_dropdown ($order) {
    $orders = ['1','2','3','4','Hidden'];
    foreach ($orders as $item) {
      $selected = '';
      if ($item == $order) {
        $selected = ' selected';
      }
      $output .= '<option value="' . $item . '"' . $selected . '>' . $item . '</option>';
    }
    return $output;
  }

  function get_list_posts_output($widget_args, $instance) {
      echo $widget_args['before_widget'];
        $widget_id = $widget_args['widget_id'];
        if (!empty($instance['title'])) {
          $title = apply_filters('widget_title', $instance['title']);
        }
        else {
          $title = '';
        }
        if (!empty($instance['subtitle'])) {
          $subtitle = $instance['subtitle'];
        }
        else {
          $subtitle = '';
        }
        if (!empty($instance['number'])) {
          $number = $instance['number'];
        }
        else {
          $number = 0;
        }
        if (!empty($instance['columns'])) {
          $fiver = false;
          switch ($instance['columns']) {
            case 1:
              $columns = 12;
              break;
            case 2:
              $columns = 6;
              break;
            case 3:
              $columns = 4;
              break;
            case 4:
              $columns = 3;
              break;
            case 5:
              $columns = 2;
              $fiver = true;
              break;
            case 6:
              $columns = 2;
              break;
            default:
              $columns = 1;
              break;
          }
        }
        else {
          $columns = 1;
        }
        if (!empty($instance['category'])) {
          $category = $instance['category'];
        }
        else {
          wp_reset_postdata();
          global $post;
          $category = $post->post_name;
        }
        if (!empty($instance['specific_posts'])) {
          $specific_posts = $instance['specific_posts'];
        }
        else {
          $specific_posts = '';
        }
        if (!empty($instance['background_color'])) {
          $background_color = $instance['background_color'];
        }
        else {
          $background_color = '';
        }
        if (!empty($instance['background_img'])) {
          $background_img = $instance['background_img'];
        }
        else {
          $background_img = '';
        }
        if (!empty($instance['widget_class'])) {
          $widget_class = $instance['widget_class'];
        }
        else {
          $widget_class = '';
        }
        if (!empty($instance['more_button'])) {
          $more_button = $instance['more_button'];
        }
        else {
          $more_button = '';
        }
        if (!empty($instance['thumbnail_float'])) {
          $thumbnail_float = $instance['thumbnail_float'];
        }
        else {
          $thumbnail_float = '';
        }
        if (!empty($instance['floated_width'])) {
          $floated_width = $instance['floated_width'];
        }
        else {
          $floated_width = '';
        }

        $order_array = [];

        if (!empty($instance['thumbnail_order'])) {
          $thumbnail_order = $instance['thumbnail_order'];
          if ($thumbnail_order != 'Hidden') {
            $order_array['thumbnail'] = $thumbnail_order;
          }
        }
        else {
          $thumbnail_order = '';
        }
        if (!empty($instance['headline_order'])) {
          $headline_order = $instance['headline_order'];
          if ($headline_order != 'Hidden') {
            $order_array['headline'] = $headline_order;
          }
        }
        else {
          $headline_order = '';
        }
        if (!empty($instance['excerpt_order'])) {
          $excerpt_order = $instance['excerpt_order'];
          if ($excerpt_order != 'Hidden') {
            $order_array['excerpt'] = $excerpt_order;
          }
        }
        else {
          $excerpt_order = '';
        }
        if (!empty($instance['content_order'])) {
          $content_order = $instance['content_order'];
          if ($content_order != 'Hidden') {
            $order_array['content'] = $content_order;
          }
        }
        else {
          $content_order = '';
        }
        ?>
            <style>
              <?php echo '#' . $widget_id; ?> {
                background-color: <?php echo $background_color; ?>;
                <?php
                  if (!empty($background_img)){
                    ?>
                    background-image: url('<?php echo $background_img; ?>');
                    background-position: center repeat-y;
                    background-size: cover;
                    background-attachment: fixed;
                    <?php
                  }
                ?>

              }
            </style>
            <div class="<?php echo $widget_class; ?>">
              <div class="widgetColumnMargin">
                <div class="container-fluid">
                <?php
                  if (!empty($title)) {
                    ?>
                      <div class="row">
                        <div class="col-sm-12">
                          <?php
                            _e($widget_args['before_title'] . $title . $widget_args['after_title']);
                          ?>
                          <div class="widgetSubtitle"><?php _e($subtitle); ?></div>
                        </div>
                      </div>
                    <?php
                  }
                ?>
                <div class="row eqRow">
              <?php
              if (!empty($specific_posts)) {
                $posts_array = [];
                $post_ids_array = explode(',',$specific_posts);
                foreach ($post_ids_array as $post_id) {
                  array_push($posts_array,get_post($post_id));
                }
              }
              else {
                $args = array(
                	'posts_per_page'   => $number,
                	'offset'           => 0,
                	'category_name'    => $category,
                	'orderby'         => array('meta_sort' => 'ASC','date' => 'DESC'),
                  'meta_query'      => array(
                    'meta_sort' => array(
                      'key'     => '_anduril_' . $category . '_sort',
                      'type'    => 'NUMERIC'
                    )
                  ),
                	'post_type'        => 'post',
                	'post_status'      => array('publish','private'),
                	'suppress_filters' => true
                );
                $posts_array = get_posts($args);
              }
              asort($order_array);
              foreach ($posts_array as $index => $post) {
                if (substr($post->post_title,0,9) === '[DIVIDER]') {
                    ?>
                    <div class="col-sm-12">
                      <?php _e(apply_filters('the_content', $post->post_content)); ?>
                    </div>
                  <?php
                }
                else {
                if ($fiver) { //Accommodate five columns
                  ?>
                    <div class="col-sm-5ths">
                  <?php
                }
                else {
                    ?>
                    <div class="col-sm-<?php echo $columns;?>">
                    <?php
                }
                ?>
                      <div class="widgetItemContainer">
                <?php

                          if (empty($thumbnail_float)) { //Default unfloated behavior
                            anduril_get_list_posts_details($instance,$order_array,$post);
                          }
                          else { //We are floating the image
                            switch ($thumbnail_float) {
                              case 'left':
                                ?>
                                  <div class="widgetFloatedContainer">
                                    <div class="widgetLeftFloatedThumbnail">
                                      <?php
                                        if (!empty(get_the_post_thumbnail_url($post))) { //Make sure there is a thumnail
                                          ?>
                                            <div class="widgetThumbnail">
                                              <?php
                                                if (!$instance['disable_link']) {
                                                  ?>
                                                    <a href="<?php echo get_permalink($post); ?>">
                                                  <?php
                                                }
                                              ?>
                                              <img src="<?php echo get_the_post_thumbnail_url($post); ?>" style="max-width: <?php echo $floated_width; ?>px" />
                                              <?php
                                                if (!$instance['disable_link']) {
                                                  ?>
                                                    </a>
                                                  <?php
                                                }
                                              ?>
                                            </div>
                                          <?php
                                        }
                                      ?>
                                    </div>
                                    <div class="widgetLeftFloatedContent">
                                      <?php
                                        anduril_get_list_posts_details($instance,$order_array,$post,true);
                                      ?>
                                    </div>
                                  </div>
                                <?php
                                break;
                              case 'right':
                                ?>
                                  <div class="widgetFloatedContainer">
                                    <div class="widgetRightFloatedThumbnail">
                                      <?php
                                        if (!empty(get_the_post_thumbnail_url($post))) { //Make sure there is a thumnail
                                          ?>
                                            <div class="widgetThumbnail">
                                              <?php
                                                if (!$instance['disable_link']) {
                                                  ?>
                                                    <a href="<?php echo get_permalink($post); ?>">
                                                  <?php
                                                }
                                              ?>
                                              <img src="<?php echo get_the_post_thumbnail_url($post); ?>" style="max-width: <?php echo $floated_width; ?>px" />
                                              <?php
                                                if (!$instance['disable_link']) {
                                                  ?>
                                                    </a>
                                                  <?php
                                                }
                                              ?>
                                            </div>
                                          <?php
                                        }
                                      ?>
                                    </div>
                                    <div class="widgetRightFloatedContent">
                                      <?php
                                        anduril_get_list_posts_details($instance,$order_array,$post,true);
                                      ?>
                                    </div>
                                  </div>
                                <?php
                                break;
                            }
                          }
                        ?>
                    </div>
                  </div>
                <?php
                }
              }
            ?>
            </div>
          </div>
        </div>
      </div>
  <?php
    echo $widget_args['after_widget'];
  }

  function anduril_get_list_posts_details($instance,$order_array,$post,$skip_thumb = false) {
    foreach ($order_array as $key => $value) {
      switch ($key) {
        case 'thumbnail':
          if (!empty(get_the_post_thumbnail_url($post)) && !$skip_thumb) { //Make sure there is a thumnail and we're not skipping it cause of float
            ?>
              <div class="widgetThumbnail">
                <?php
                  if (!$instance['disable_link']) {
                    ?>
                      <a href="<?php echo get_permalink($post); ?>">
                    <?php
                  }
                ?>
                <img src="<?php echo get_the_post_thumbnail_url($post); ?>" />
                <?php
                  if (!$instance['disable_link']) {
                    ?>
                      </a>
                    <?php
                  }
                ?>
              </div>
            <?php
          }
          break;
        case 'headline':
          if (!empty(get_the_title($post))) {
            ?>
              <div class="widgetHeadline">
                <?php
                  if (!$instance['disable_link']) {
                    ?>
                      <a href="<?php echo get_permalink($post); ?>">
                    <?php
                  }
                  _e(get_the_title($post));
                  if (!$instance['disable_link']) {
                    ?>
                      </a>
                    <?php
                  }
                ?>
              </div>
            <?php
              if (!$instance['disable_link']) {
                ?>
                  </a>
                <?php
              }
            }
          break;
        case 'excerpt':
          if (!empty($post->post_excerpt)) {
            ?>
              <div class="widgetExcerpt"><?php _e($post->post_excerpt); ?></div>
            <?php
          }
            break;
          case 'content':
            if (!empty($post->post_content)) {
              ?>
                <div class="widgetContent"><?php _e(apply_filters('the_content', $post->post_content)); ?></div>
              <?php
            }
          break;
      }
    }
    if (!empty($instance['more_button'])) {
      ?>
        <div class="widgetButtonContainer">
          <button class="moreButton widgetButton"<?php echo ' onclick="window.location.href=\'' . get_permalink($post) . '\'"'; ?>>
            <?php
              _e($instance['more_button']);
            ?>
          </button>
        </div>
     <?php
    }
  }

  // Creating the Content Slider widget
  class anduril_content_slider_widget extends WP_Widget {

    function __construct() {
    parent::__construct(
      'anduril_content_slider_widget', //ID
      __('Anduril Content Slider', 'anduril'), //Label for editor
      array( //Description for editor
        'description' => __('Display single post headlines and content with arrows to slide to next and previous', 'anduril'),
        )
      );
    }

    public function widget($args, $instance) { //Widget front-end
      $output = get_content_slider_output($args, $instance);
      echo __($output, 'anduril');
    }

    public function form($instance) { //Widget backend
      if (isset($instance['title'])) {
        $title = $instance['title'];
      }
      else {
        $title = __('', 'anduril');
      }
      if (isset($instance['subtitle'])) {
        $subtitle = $instance['subtitle'];
      }
      else {
        $subtitle = __('', 'anduril');
      }
      if (isset($instance['number'])) {
        $number = $instance['number'];
      }
      else {
        $number = __('99', 'anduril');
      }
      if (isset($instance['category'])) {
        $category = $instance['category'];
      }
      else {
        $category = __('', 'anduril');
      }
      if (isset($instance['background_color'])) {
        $background_color = $instance['background_color'];
      }
      else {
        $background_color = __('#fff', 'anduril');
      }
      if (isset($instance['background_img'])) {
        $background_img = $instance['background_img'];
      }
      else {
        $background_img = __('', 'anduril');
      }
      if (isset($instance['widget_class'])) {
        $widget_class = $instance['widget_class'];
      }
      else {
        $widget_class = __('contentSlider', 'anduril');
      }
      //Build categories dropdown
      $categories_dropdown_code = '<option value="">Match page slug</option>';
      $categories = get_categories();
      foreach ($categories as $cat) {
        if ($cat->slug === $category) {
          $selected = ' selected';
        }
        else {
          $selected = '';
        }
        $categories_dropdown_code .= '<option value="' . $cat->slug . '"' . $selected . '>' . $cat->name . '</option>';
      }
      if (isset($instance['thumbnail_order'])) {
        $thumbnail_order = $instance['thumbnail_order'];
      }
      else {
        $thumbnail_order = __(1, 'anduril');
      }
      if (isset($instance['headline_order'])) {
        $headline_order = $instance['headline_order'];
      }
      else {
        $headline_order = __(2, 'anduril');
      }
      if (isset($instance['excerpt_order'])) {
        $excerpt_order = $instance['excerpt_order'];
      }
      else {
        $excerpt_order = __(3, 'anduril');
      }
      if (isset($instance['content_order'])) {
        $content_order = $instance['content_order'];
      }
      else {
        $content_order = __(0, 'anduril');
      }
      if (isset($instance['more_button'])) {
        $more_button = $instance['more_button'];
      }
      else {
        $more_button = __('See all', 'anduril');
      }
      if (isset($instance['link'])) {
        $link = $instance['link'];
      }
      else {
        $link = __('', 'anduril');
      }
      $disable_link = $instance['disable_link'] ? 'true' : 'false';
      ?>
        <p>
          <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />

          <label for="<?php echo $this->get_field_id('subtitle'); ?>"><?php _e('Subtitle:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('subtitle'); ?>" name="<?php echo $this->get_field_name('subtitle'); ?>" type="text" value="<?php echo esc_attr($subtitle); ?>" />

          <label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number of posts:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="number" value="<?php echo esc_attr($number); ?>" />

          <label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Category:'); ?></label>
          <select class="widefat" id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" value="<?php echo esc_attr($category); ?>">
            <?php echo $categories_dropdown_code; ?>
          </select>

          <label for="<?php echo $this->get_field_id('background_color'); ?>"><?php _e('Background color:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('background_color'); ?>" name="<?php echo $this->get_field_name('background_color'); ?>" type="text" value="<?php echo esc_attr($background_color); ?>" />

          <label for="<?php echo $this->get_field_id('background_img'); ?>"><?php _e('Background image:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('background_img'); ?>" name="<?php echo $this->get_field_name('background_img'); ?>" type="text" value="<?php echo esc_attr($background_img); ?>" />

          <label for="<?php echo $this->get_field_id('widget_class'); ?>"><?php _e('Widget class:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('widget_class'); ?>" name="<?php echo $this->get_field_name('widget_class'); ?>" type="text" value="<?php echo esc_attr($widget_class); ?>" />

          <label for="<?php echo $this->get_field_id('thumbnail_order'); ?>"><?php _e('Thumnail order:'); ?></label>
          <select class="widefat" id="<?php echo $this->get_field_id('thumbnail_order'); ?>" name="<?php echo $this->get_field_name('thumbnail_order'); ?>" value="<?php echo esc_attr($thumbnail_order); ?>">
            <?php echo anduril_get_order_dropdown($thumbnail_order); ?>
          </select>

          <label for="<?php echo $this->get_field_id('headline_order'); ?>"><?php _e('Headline order:'); ?></label>
          <select class="widefat" id="<?php echo $this->get_field_id('headline_order'); ?>" name="<?php echo $this->get_field_name('headline_order'); ?>" value="<?php echo esc_attr($headline_order); ?>">
            <?php echo anduril_get_order_dropdown($headline_order); ?>
          </select>

          <label for="<?php echo $this->get_field_id('excerpt_order'); ?>"><?php _e('Exceprt order:'); ?></label>
          <select class="widefat" id="<?php echo $this->get_field_id('excerpt_order'); ?>" name="<?php echo $this->get_field_name('excerpt_order'); ?>" value="<?php echo esc_attr($excerpt_order); ?>">
            <?php echo anduril_get_order_dropdown($excerpt_order); ?>
          </select>

          <label for="<?php echo $this->get_field_id('content_order'); ?>"><?php _e('Content order:'); ?></label>
          <select class="widefat" id="<?php echo $this->get_field_id('content_order'); ?>" name="<?php echo $this->get_field_name('content_order'); ?>" value="<?php echo esc_attr($content_order); ?>">
            <?php echo anduril_get_order_dropdown($content_order); ?>
          </select>

          <label for="<?php echo $this->get_field_id('more_button'); ?>"><?php _e('Read more button text:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('more_button'); ?>" name="<?php echo $this->get_field_name('more_button'); ?>" type="text" value="<?php echo esc_attr($more_button); ?>" />

          <label for="<?php echo $this->get_field_id('link'); ?>"><?php _e('Read more link:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('link'); ?>" name="<?php echo $this->get_field_name('link'); ?>" type="text" value="<?php echo esc_attr($link); ?>" />

          <label for="<?php echo $this->get_field_id('disable_link'); ?>">Disable headline/thumbnails links:</label>
          <input class="checkbox" type="checkbox" <?php checked($instance['disable_link'], 'on'); ?> id="<?php echo $this->get_field_id('disable_link'); ?>" name="<?php echo $this->get_field_name('disable_link'); ?>" />

        </p>
      <?php
    }

    public function update($new_instance, $old_instance) { // Updating widget replacing old instances with new
      $instance = array();
      $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
      $instance['subtitle'] = (!empty($new_instance['subtitle'])) ? strip_tags($new_instance['subtitle']) : '';
      $instance['number'] = (!empty($new_instance['number'])) ? strip_tags($new_instance['number']) : '';
      $instance['category'] = (!empty($new_instance['category'])) ? strip_tags($new_instance['category']) : '';
      $instance['background_color'] = (!empty($new_instance['background_color'])) ? strip_tags($new_instance['background_color']) : '';
      $instance['background_img'] = (!empty($new_instance['background_img'])) ? strip_tags($new_instance['background_img']) : '';
      $instance['widget_class'] = (!empty($new_instance['widget_class'])) ? strip_tags($new_instance['widget_class']) : '';
      $instance['thumbnail_order'] = (!empty($new_instance['thumbnail_order'])) ? strip_tags($new_instance['thumbnail_order']) : '';
      $instance['headline_order'] = (!empty($new_instance['headline_order'])) ? strip_tags($new_instance['headline_order']) : '';
      $instance['excerpt_order'] = (!empty($new_instance['excerpt_order'])) ? strip_tags($new_instance['excerpt_order']) : '';
      $instance['content_order'] = (!empty($new_instance['content_order'])) ? strip_tags($new_instance['content_order']) : '';
      $instance['more_button'] = (!empty($new_instance['more_button'])) ? strip_tags($new_instance['more_button']) : '';
      $instance['link'] = (!empty($new_instance['link'])) ? strip_tags($new_instance['link']) : '';
      $instance['disable_link'] = $new_instance['disable_link'];
      return $instance;
    }
  } //Class anduril_content_slider_widget ends here

  function get_content_slider_output($widget_args, $instance) {
      echo $widget_args['before_widget'];
        $widget_id = $widget_args['widget_id'];
        if (!empty($instance['title'])) {
          $title = apply_filters('widget_title', $instance['title']);
        }
        else {
          $title = '';
        }
        if (!empty($instance['subtitle'])) {
          $subtitle = $instance['subtitle'];
        }
        else {
          $subtitle = '';
        }
        if (!empty($instance['number'])) {
          $number = $instance['number'];
        }
        else {
          $number = 0;
        }
        if (!empty($instance['category'])) {
          $category = $instance['category'];
        }
        else {
          wp_reset_postdata();
          global $post;
          $category = $post->post_name;
        }
        if (!empty($instance['background_color'])) {
          $background_color = $instance['background_color'];
        }
        else {
          $background_color = '';
        }
        if (!empty($instance['background_img'])) {
          $background_img = $instance['background_img'];
        }
        else {
          $background_img = '';
        }
        if (!empty($instance['widget_class'])) {
          $widget_class = $instance['widget_class'];
        }
        else {
          $widget_class = '';
        }
        if (!empty($instance['more_button'])) {
          $more_button = $instance['more_button'];
        }
        else {
          $more_button = '';
        }
        if (!empty($instance['link'])) {
          $link = $instance['link'];
        }
        else {
          $link = '';
        }

        $order_array = [];

        if (!empty($instance['thumbnail_order'])) {
          $thumbnail_order = $instance['thumbnail_order'];
          if ($thumbnail_order != 'Hidden') {
            $order_array['thumbnail'] = $thumbnail_order;
          }
        }
        else {
          $thumbnail_order = '';
        }
        if (!empty($instance['headline_order'])) {
          $headline_order = $instance['headline_order'];
          if ($headline_order != 'Hidden') {
            $order_array['headline'] = $headline_order;
          }
        }
        else {
          $headline_order = '';
        }
        if (!empty($instance['excerpt_order'])) {
          $excerpt_order = $instance['excerpt_order'];
          if ($excerpt_order != 'Hidden') {
            $order_array['excerpt'] = $excerpt_order;
          }
        }
        else {
          $excerpt_order = '';
        }
        if (!empty($instance['content_order'])) {
          $content_order = $instance['content_order'];
          if ($content_order != 'Hidden') {
            $order_array['content'] = $content_order;
          }
        }
        else {
          $content_order = '';
        }
        ?>
            <style>
              <?php echo '#' . $widget_id; ?> {
                background-color: <?php echo $background_color; ?>;
                <?php
                  if (!empty($background_img)){
                    ?>
                    background-image: url('<?php echo $background_img; ?>');
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    <?php
                  }
                ?>

              }
            </style>
            <div class="<?php echo $widget_class; ?>">
              <?php
                if (!empty($title)) {
                  ?>
                    <div class="row">
                      <div class="col-sm-12">
                        <?php
                          _e($widget_args['before_title'] . $title . $widget_args['after_title']);
                          if(!empty($subtitle)) {
                            ?>
                              <div class="widgetSubtitle"><?php _e($subtitle); ?></div>
                            <?php
                          }
                        ?>
                      </div>
                    </div>
                  <?php
                }
              ?>
              <div class="widgetContainer">
                <div class="widgetControlTable">
                  <div class="widgetControlContainerLeft"><img src="<?php echo get_template_directory_uri(); ?>/media/left_arrow.png" /></div>
                  <div class="widgetControlContainerRight"><img src="<?php echo get_template_directory_uri(); ?>/media/right_arrow.png" /></div>
                  <div class="widgetContentContainer">
                    <div class="widgetSliderArea">
                      <?php
                      $args = array(
                        'posts_per_page'   => $number +1,
                        'offset'           => 0,
                        'category_name'    => $category,
                        'orderby'         => array('meta_sort' => 'ASC','date' => 'DESC'),
                        'meta_query'      => array(
                          'meta_sort' => array(
                            'key'     => '_anduril_' . $category . '_sort',
                            'type'    => 'NUMERIC'
                          )
                        ),
                        'post_type'        => 'post',
                        'post_status'      => 'publish',
                        'suppress_filters' => true
                      );
                      $posts_array = get_posts($args);
                      asort($order_array);
                      foreach ($posts_array as $index => $post) {
                        if (substr($post->post_title,0,9) === '[DIVIDER]') {
                          continue;
                        }
                        else {
                          ?>
                            <div class="widgetItemWrapper">
                            <div class="widgetItem">
                          <?php
                          foreach ($order_array as $key => $value) {
                            switch ($key) {
                              case 'thumbnail':
                                ?>
                                  <div class="widgetThumbnail">
                                    <?php
                                      if (!$instance['disable_link']) {
                                        ?>
                                          <a href="<?php echo get_permalink($post); ?>">
                                        <?php
                                      }
                                    ?>
                                    <img src="<?php echo get_the_post_thumbnail_url($post); ?>" />
                                    <?php
                                      if (!$instance['disable_link']) {
                                        ?>
                                          </a>
                                        <?php
                                      }
                                    ?>
                                  </div>
                                <?php
                                break;
                              case 'headline':
                                ?>
                                  <div class="widgetHeadline">
                                    <?php
                                      if (!$instance['disable_link']) {
                                        ?>
                                          <a href="<?php echo get_permalink($post); ?>">
                                        <?php
                                      }
                                      _e(get_the_title($post));
                                      if (!$instance['disable_link']) {
                                        ?>
                                          </a>
                                        <?php
                                      }
                                    ?>
                                  </div>
                                <?php
                                  if (!$instance['disable_link']) {
                                    ?>
                                      </a>
                                    <?php
                                  }
                                break;
                              case 'excerpt':
                                ?>
                                  <div class="widgetExcerpt"><?php _e($post->post_excerpt); ?></div>
                                <?php
                                break;
                              case 'content':
                                ?>
                                  <div class="widgetContent"><?php _e(apply_filters('the_content', $post->post_content)); ?></div>
                                <?php
                                break;
                            }
                          }
                        }
                        ?>
                          </div>
                          </div>
                        <?php
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              if (!empty($more_button)) {
                ?>
                <div class="row">
                  <div class="col-sm-12" style="text-align: center">
                    <div class="moreButton widgetButton"><a href="<?php echo $link; ?>"><?php _e($more_button) ?></a></div>
                  </div>
                </div>
                <?php
              }
              ?>
            </div>
  <?php
    echo $widget_args['after_widget'];

    ?>
      <!-- Load slider JS -->
      <script src="<?php echo get_template_directory_uri(); ?>/js/andurilSlider.js"></script>
    <?php
  }

  // Creating the Content Scroller widget
  class anduril_content_scroller_widget extends WP_Widget {

    function __construct() {
    parent::__construct(
      'anduril_content_scroller_widget', //ID
      __('Anduril Content Scroller', 'anduril'), //Label for editor
      array( //Description for editor
        'description' => __('Display a post with headline and excerpt above and content scrolling slowly in pane', 'anduril'),
        )
      );
    }

    public function widget($args, $instance) { //Widget front-end
      $output = get_content_scroller_output($args, $instance);
      echo __($output, 'anduril');
    }

    public function form($instance) { //Widget backend
      if (isset($instance['title'])) {
        $title = $instance['title'];
      }
      else {
        $title = __('', 'anduril');
      }
      if (isset($instance['subtitle'])) {
        $subtitle = $instance['subtitle'];
      }
      else {
        $subtitle = __('', 'anduril');
      }
      if (isset($instance['scroller_post'])) {
        $scroller_post = $instance['scroller_post'];
      }
      else {
        $scroller_post = __('', 'anduril');
      }
      if (isset($instance['scroller_speed'])) {
        $scroller_speed = $instance['scroller_speed'];
      }
      else {
        $scroller_speed = __(25, 'anduril');
      }
      if (isset($instance['background_color'])) {
        $background_color = $instance['background_color'];
      }
      else {
        $background_color = __('#fff', 'anduril');
      }
      if (isset($instance['background_img'])) {
        $background_img = $instance['background_img'];
      }
      else {
        $background_img = __('', 'anduril');
      }
      if (isset($instance['widget_class'])) {
        $widget_class = $instance['widget_class'];
      }
      else {
        $widget_class = __('contentScroller', 'anduril');
      }
      if (isset($instance['side_panes'])) {
        $side_panes = $instance['side_panes'];
      }
      else {
        $side_panes = __('no', 'anduril');
      }
      ?>
        <p>
          <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />

          <label for="<?php echo $this->get_field_id('subtitle'); ?>"><?php _e('Subtitle:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('subtitle'); ?>" name="<?php echo $this->get_field_name('subtitle'); ?>" type="text" value="<?php echo esc_attr($subtitle); ?>" />

          <label for="<?php echo $this->get_field_id('scroller_post'); ?>"><?php _e('ID of post to scroll:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('scroller_post'); ?>" name="<?php echo $this->get_field_name('scroller_post'); ?>" type="number" value="<?php echo esc_attr($scroller_post); ?>" />

          <label for="<?php echo $this->get_field_id('background_color'); ?>"><?php _e('Background color:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('background_color'); ?>" name="<?php echo $this->get_field_name('background_color'); ?>" type="text" value="<?php echo esc_attr($background_color); ?>" />

          <label for="<?php echo $this->get_field_id('background_img'); ?>"><?php _e('Background image:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('background_img'); ?>" name="<?php echo $this->get_field_name('background_img'); ?>" type="text" value="<?php echo esc_attr($background_img); ?>" />

          <label for="<?php echo $this->get_field_id('widget_class'); ?>"><?php _e('Widget class:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('widget_class'); ?>" name="<?php echo $this->get_field_name('widget_class'); ?>" type="text" value="<?php echo esc_attr($widget_class); ?>" />

          <label for="<?php echo $this->get_field_id('scroller_speed'); ?>"><?php _e('Scroll speed (pixels per second):'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('scroller_speed'); ?>" name="<?php echo $this->get_field_name('scroller_speed'); ?>" type="number" value="<?php echo esc_attr($scroller_speed); ?>" />

          <label for="<?php echo $this->get_field_id('side_panes'); ?>"><?php _e('Side panes:'); ?></label>
          <select class="widefat" id="<?php echo $this->get_field_id('side_panes'); ?>" name="<?php echo $this->get_field_name('side_panes'); ?>" value="<?php echo esc_attr($side_panes); ?>">
            <option value="no" <?php if ($side_panes == 'no') {echo ' selected';} ?>>No</option>
            <option value="yes" <?php if ($side_panes == 'yes') {echo ' selected';} ?>>Yes</option>
          </select>
        </p>
      <?php
    }

    public function update($new_instance, $old_instance) { // Updating widget replacing old instances with new
      $instance = array();
      $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
      $instance['subtitle'] = (!empty($new_instance['subtitle'])) ? strip_tags($new_instance['subtitle']) : '';
      $instance['scroller_post'] = (!empty($new_instance['scroller_post'])) ? strip_tags($new_instance['scroller_post']) : '';
      $instance['background_color'] = (!empty($new_instance['background_color'])) ? strip_tags($new_instance['background_color']) : '';
      $instance['background_img'] = (!empty($new_instance['background_img'])) ? strip_tags($new_instance['background_img']) : '';
      $instance['widget_class'] = (!empty($new_instance['widget_class'])) ? strip_tags($new_instance['widget_class']) : '';
      $instance['scroller_speed'] = (!empty($new_instance['scroller_speed'])) ? strip_tags($new_instance['scroller_speed']) : '';
      $instance['side_panes'] = (!empty($new_instance['side_panes'])) ? strip_tags($new_instance['side_panes']) : '';
      return $instance;
    }
  } //Class anduril_content_scroller_widget ends here

  function get_content_scroller_output($widget_args, $instance) {
      echo $widget_args['before_widget'];
      $widget_id = $widget_args['widget_id'];
      if (!empty($instance['title'])) {
        $title = apply_filters('widget_title', $instance['title']);
      }
      else {
        $title = '';
      }
      if (!empty($instance['subtitle'])) {
        $subtitle = $instance['subtitle'];
      }
      else {
        $subtitle = '';
      }
      if (!empty($instance['scroller_post'])) {
        $scroller_post = $instance['scroller_post'];
      }
      else {
        $scroller_post = '';
      }
      if (!empty($instance['background_color'])) {
        $background_color = $instance['background_color'];
      }
      else {
        $background_color = '';
      }
      if (!empty($instance['background_img'])) {
        $background_img = $instance['background_img'];
      }
      else {
        $background_img = '';
      }
      if (!empty($instance['widget_class'])) {
        $widget_class = $instance['widget_class'];
      }
      else {
        $widget_class = '';
      }
      if (!empty($instance['scroller_speed'])) {
        $scroller_speed = $instance['scroller_speed'];
      }
      else {
        $scroller_speed = '';
      }
      if (!empty($instance['side_panes'])) {
        $side_panes = $instance['side_panes'];
      }
      else {
        $side_panes = '';
      }

      if (!empty($scroller_post)) {
        $post = get_post($scroller_post);
        ?>

        <style>
          <?php echo '#' . $widget_id; ?> {
            background-color: <?php echo $background_color; ?>;
            <?php
              if (!empty($background_img)){
                ?>
                background-image: url('<?php echo $background_img; ?>');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                <?php
              }
            ?>

          }
        </style>
        <div class="<?php echo $widget_class; if ($side_panes == 'yes') { echo ' container-fluid'; }?>">
          <?php
          if (!empty($instance['title'])) {
            _e($widget_args['before_title'] . $title . $widget_args['after_title']);
          }
          ?>
          <div class="widgetHeader">
            <?php
              if (!empty($post->post_title)) {
                ?>
                  <div class="widgetHeadline"><?php _e($post->post_title); ?></div>
                <?php
              }
            ?>
            <?php
              if (!empty($post->post_excerpt)) {
                ?>
                  <div class="widgetExcerpt"><?php _e($post->post_excerpt); ?></div>
                <?php
              }
            ?>
          </div>
          <div class="widgetBody<?php if ($side_panes == 'yes') { echo ' row'; }?>">
            <?php
              if ($side_panes == 'yes') {
                ?>
                  <div class="widgetSidePaneLeft col-sm-4"></div>
                <?php
              }
            ?>
            <div class="widgetScrollArea <?php if ($side_panes == 'yes') { echo ' col-sm-4'; }?>">
              <?php _e(apply_filters('the_content', $post->post_content)); ?>
            </div>
            <?php
              if ($side_panes == 'yes') {
                ?>
                  <div class="widgetSidePaneRight col-sm-4"></div>
                <?php
              }
            ?>
          </div>
        </div>
          <!-- Scroller JS -->
          <script>
            andurilScrollSpeed = <?php echo $scroller_speed/10; ?>; //Scroll speed in pixels per 100 miliseconds
          </script>
          <script src="<?php echo get_template_directory_uri(); ?>/js/andurilScroller.js"></script>
      <?php
    }
    echo $widget_args['after_widget'];
  }

  // Creating the List Posts widget
  class anduril_products_widget extends WP_Widget {

    function __construct() {
    parent::__construct(
      'anduril_products_widget', //ID
      __('Anduril List Products', 'anduril'), //Label for editor
      array( //Description for editor
        'description' => __('Display WooCommerce products in a customized shop page', 'anduril'),
        )
      );
    }

    public function widget($args, $instance) { //Widget front-end
      $output = get_products_output($args, $instance);
      echo __($output, 'anduril');
    }

    public function form($instance) { //Widget backend
      if (isset($instance['title'])) {
        $title = $instance['title'];
      }
      else {
        $title = __('', 'anduril');
      }
      if (isset($instance['subtitle'])) {
        $subtitle = $instance['subtitle'];
      }
      else {
        $subtitle = __('', 'anduril');
      }
      if (isset($instance['number'])) {
        $number = $instance['number'];
      }
      else {
        $number = __('99', 'anduril');
      }
      if (isset($instance['columns'])) {
        $columns = $instance['columns'];
      }
      else {
        $columns = __('4', 'anduril');
      }
      if (isset($instance['category'])) {
        $category = $instance['category'];
      }
      else {
        $category = __('', 'anduril');
      }
      if (isset($instance['background_color'])) {
        $background_color = $instance['background_color'];
      }
      else {
        $background_color = __('#fff', 'anduril');
      }
      if (isset($instance['background_img'])) {
        $background_img = $instance['background_img'];
      }
      else {
        $background_img = __('', 'anduril');
      }
      if (isset($instance['widget_class'])) {
        $widget_class = $instance['widget_class'];
      }
      else {
        $widget_class = __('listProducts', 'anduril');
      }
      if (isset($instance['orderby'])) {
        $orderby = $instance['orderby'];
      }
      else {
        $orderby = __('date', 'anduril');
      }
      if (isset($instance['order'])) {
        $order = $instance['order'];
      }
      else {
        $order = __('DESC', 'anduril');
      }

      $dropdown = $instance['dropdown'] ? 'true' : 'false';

      //Build categories dropdown
      $categories_dropdown_code = '<option value="">Match page slug</option>';
      $categories = get_terms('product_cat');
      foreach ($categories as $cat) {
        if ($cat->slug === $category) {
          $selected = ' selected';
        }
        else {
          $selected = '';
        }
        $categories_dropdown_code .= '<option value="' . $cat->slug . '"' . $selected . '>' . $cat->name . '</option>';
      }

      ?>
        <p>
          <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />

          <label for="<?php echo $this->get_field_id('subtitle'); ?>"><?php _e('Subtitle:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('subtitle'); ?>" name="<?php echo $this->get_field_name('subtitle'); ?>" type="text" value="<?php echo esc_attr($subtitle); ?>" />

          <label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number of products:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="number" value="<?php echo esc_attr($number); ?>" min="1" max="99" />

          <label for="<?php echo $this->get_field_id('columns'); ?>"><?php _e('Columns:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('columns'); ?>" name="<?php echo $this->get_field_name('columns'); ?>" type="number" value="<?php echo esc_attr($columns); ?>" min="1" max="6" />

          <label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Category:'); ?></label>
          <select class="widefat" id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" value="<?php echo esc_attr($category); ?>">
            <?php echo $categories_dropdown_code; ?>
          </select>

          <label for="<?php echo $this->get_field_id('background_color'); ?>"><?php _e('Background color:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('background_color'); ?>" name="<?php echo $this->get_field_name('background_color'); ?>" type="text" value="<?php echo esc_attr($background_color); ?>" />

          <label for="<?php echo $this->get_field_id('background_img'); ?>"><?php _e('Background image URL:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('background_img'); ?>" name="<?php echo $this->get_field_name('background_img'); ?>" type="text" value="<?php echo esc_attr($background_img); ?>" />

          <label for="<?php echo $this->get_field_id('widget_class'); ?>"><?php _e('Widget class:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('widget_class'); ?>" name="<?php echo $this->get_field_name('widget_class'); ?>" type="text" value="<?php echo esc_attr($widget_class); ?>" />

          <label for="<?php echo $this->get_field_id('orderby'); ?>"><?php _e('Order by:'); ?></label>
          <select class="widefat" id="<?php echo $this->get_field_id('orderby'); ?>" name="<?php echo $this->get_field_name('orderby'); ?>" value="<?php echo esc_attr($orderby); ?>">
            <option value="date"<?php if ($orderby == 'date') {echo ' selected';} ?>>Date</option>
            <option value="price"<?php if ($orderby == 'price') {echo ' selected';} ?>>Price</option>
            <option value="popularity"<?php if ($orderby == 'popularity') {echo ' selected';} ?>>Popularity</option>
            <option value="rand"<?php if ($orderby == 'rand') {echo ' selected';} ?>>Random</option>
            <option value="rating"<?php if ($orderby == 'rating') {echo ' selected';} ?>>Rating</option>
            <option value="title"<?php if ($orderby == 'title') {echo ' selected';} ?>>Title</option>
          </select>

          <label for="<?php echo $this->get_field_id('order'); ?>"><?php _e('Order:'); ?></label>
          <select class="widefat" id="<?php echo $this->get_field_id('order'); ?>" name="<?php echo $this->get_field_name('order'); ?>" value="<?php echo esc_attr($orderby); ?>">
            <option value="DESC"<?php if ($orderby == 'DESC') {echo ' selected';} ?>>Descending</option>
            <option value="ASC"<?php if ($orderby == 'ASC') {echo ' selected';} ?>>Ascending</option>
          </select>

          <label for="<?php echo $this->get_field_id('dropdown'); ?>">Show user-sort dropdown:</label>
          <input class="checkbox" type="checkbox" <?php checked($instance['dropdown'], 'on'); ?> id="<?php echo $this->get_field_id('dropdown'); ?>" name="<?php echo $this->get_field_name('dropdown'); ?>" />
        </p>
      <?php
    }

    public function update($new_instance, $old_instance) { // Updating widget replacing old instances with new
      $instance = array();
      $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
      $instance['subtitle'] = (!empty($new_instance['subtitle'])) ? strip_tags($new_instance['subtitle']) : '';
      $instance['number'] = (!empty($new_instance['number'])) ? strip_tags($new_instance['number']) : '';
      $instance['columns'] = (!empty($new_instance['columns'])) ? strip_tags($new_instance['columns']) : '';
      $instance['category'] = (!empty($new_instance['category'])) ? strip_tags($new_instance['category']) : '';
      $instance['background_color'] = (!empty($new_instance['background_color'])) ? strip_tags($new_instance['background_color']) : '';
      $instance['background_img'] = (!empty($new_instance['background_img'])) ? strip_tags($new_instance['background_img']) : '';
      $instance['widget_class'] = (!empty($new_instance['widget_class'])) ? strip_tags($new_instance['widget_class']) : '';
      $instance['orderby'] = (!empty($new_instance['orderby'])) ? strip_tags($new_instance['orderby']) : '';
      $instance['order'] = (!empty($new_instance['order'])) ? strip_tags($new_instance['order']) : '';
      $instance['dropdown'] = $new_instance['dropdown'];
      return $instance;
    }
  } //Class anduril_products_widget ends here

  function get_products_output($widget_args, $instance) {
      echo $widget_args['before_widget'];
        $widget_id = $widget_args['widget_id'];
        if (!empty($instance['title'])) {
          $title = apply_filters('widget_title', $instance['title']);
        }
        else {
          $title = '';
        }
        if (!empty($instance['subtitle'])) {
          $subtitle = $instance['subtitle'];
        }
        else {
          $subtitle = '';
        }
        if (!empty($instance['number'])) {
          $number = $instance['number'];
        }
        else {
          $number = -1;
        }
        if (!empty($instance['columns'])) {
          $columns = $instance['columns'];
        }
        else {
          $columns = 1;
        }
        if (!empty($instance['category'])) {
          $category = $instance['category'];
        }
        else {
          wp_reset_postdata();
          global $post;
          $category = $post->post_name;
        }
        if (!empty($instance['background_color'])) {
          $background_color = $instance['background_color'];
        }
        else {
          $background_color = '';
        }
        if (!empty($instance['background_img'])) {
          $background_img = $instance['background_img'];
        }
        else {
          $background_img = '';
        }
        if (!empty($instance['widget_class'])) {
          $widget_class = $instance['widget_class'];
        }
        else {
          $widget_class = '';
        }
        if (!empty($instance['orderby'])) {
          $orderby = $instance['orderby'];
        }
        else {
          $orderby = 'date';
        }
        if (!empty($instance['order'])) {
          $order = $instance['order'];
        }
        else {
          $order = 'DESC';
        }
        if (isset($_GET['orderby'])) {
          $user_order = $_GET['orderby'];
          switch ($user_order) {
            case 'popularity':
              $orderby = 'popularity';
              $order = 'DESC';
              break;
            case 'date':
              $orderby = 'date';
              $order = 'DESC';
              break;
            case 'price':
              $orderby = 'price';
              $order = 'ASC';
              break;
            case 'price-desc':
              $orderby = 'price';
              $order = 'DESC';
              break;
            default:
              break;
          }
        }
        ?>
            <style>
              <?php echo '#' . $widget_id; ?> {
                background-color: <?php echo $background_color; ?>;
                <?php
                  if (!empty($background_img)){
                    ?>
                    background-image: url('<?php echo $background_img; ?>');
                    background-position: center repeat-y;
                    background-size: 100% auto;
                    background-attachment: fixed;
                    <?php
                  }
                ?>

              }
            </style>
            <div class="<?php echo $widget_class; ?>">
              <div class="widgetColumnMargin">
                <div class="container-fluid">
                <?php
                  if (!empty($title)) {
                    ?>
                      <div class="row">
                        <div class="col-sm-12">
                          <?php
                            _e($widget_args['before_title'] . $title . $widget_args['after_title']);
                          ?>
                          <div class="widgetSubtitle"><?php _e($subtitle); ?></div>
                        </div>
                      </div>
                    <?php
                  }
                ?>
                <div class="row">
                  <?php
                    if ($instance['dropdown']) {
                  ?>
                    <div class="productDropdown">
                      <select id="andurilProductSort" class="form-control">
                        <option value=""<?php if ($user_order == '') { _e(' selected'); } ?>>Default sorting</option>
                        <option value="popularity"<?php if ($user_order == 'popularity') { _e(' selected'); } ?>>Popularity</option>
                        <option value="date"<?php if ($user_order == 'date') { _e(' selected'); } ?>>Newness</option>
                        <option value="price"<?php if ($user_order == 'price') { _e(' selected'); } ?>>Price - lowest to highest</option>
                        <option value="price-desc"<?php if ($user_order == 'price-desc') { _e(' selected'); } ?>>Price - highest to lowest</option>
                      </select>

                      <script>
                        jQuery(document).ready(function($) {
                          $('#andurilProductSort').change(function() {
                            let chosenValue = $('#andurilProductSort').val();
                            let sortTerm = '';
                            if (chosenValue) {
                              sortTerm = '?orderby=' + chosenValue;
                            }
                            location.href = location.protocol + '//' + location.hostname + '/' + location.pathname + sortTerm;
                          });
                        });
                      </script>
                    </div>

                  <?php
                    }
                echo do_shortcode('[products limit="' . $number . '" columns="' . $columns . '" category="' . $category . '" orderby="' . $orderby . '" order="' . $order . '"]');
              ?>
            </div>
          </div>
        </div>
      </div>
  <?php
    echo $widget_args['after_widget'];
  }

  // Creating the Parallax Image widget
  class anduril_parallax_image_widget extends WP_Widget {

    function __construct() {
    parent::__construct(
      'anduril_parallax_image_widget', //ID
      __('Anduril Parallax Image', 'anduril'), //Label for editor
      array( //Description for editor
        'description' => __('A single column-spanning parallax image with text and optional link', 'anduril'),
        )
      );
    }

    public function widget($args, $instance) { //Widget front-end
      $output = get_parallax_image_output($args, $instance);
      echo __($output, 'anduril');
    }

    public function form($instance) { //Widget backend
      if (isset($instance['image'])) {
        $image = $instance['image'];
      }
      else {
        $image = '';
      }
      if (isset($instance['background_color'])) {
        $background_color = $instance['background_color'];
      }
      else {
        $background_color = '#fff';
      }
      if (isset($instance['widget_class'])) {
        $widget_class = $instance['widget_class'];
      }
      else {
        $widget_class = 'parallaxImage';
      }
      if (isset($instance['headline'])) {
        $headline = $instance['headline'];
      }
      else {
        $headline = '';
      }
      if (isset($instance['headline'])) {
        $headline = $instance['headline'];
      }
      else {
        $headline = '';
      }
      if (isset($instance['subhead'])) {
        $subhead = $instance['subhead'];
      }
      else {
        $subhead = '';
      }
      if (isset($instance['link_text'])) {
        $link_text = $instance['link_text'];
      }
      else {
        $link_text = '';
      }
      if (isset($instance['link'])) {
        $link = $instance['link'];
      }
      else {
        $link = '';
      }
      ?>
        <p>
          <label for="<?php echo $this->get_field_id('image'); ?>"><?php _e('Image:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('image'); ?>" type="text" value="<?php echo esc_attr($image); ?>" />

          <label for="<?php echo $this->get_field_id('background_color'); ?>"><?php _e('Background color:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('background_color'); ?>" name="<?php echo $this->get_field_name('background_color'); ?>" type="text" value="<?php echo esc_attr($background_color); ?>" />

          <label for="<?php echo $this->get_field_id('widget_class'); ?>"><?php _e('Widget class:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('widget_class'); ?>" name="<?php echo $this->get_field_name('widget_class'); ?>" type="text" value="<?php echo esc_attr($widget_class); ?>" />

          <label for="<?php echo $this->get_field_id('headline'); ?>"><?php _e('Headline:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('headline'); ?>" name="<?php echo $this->get_field_name('headline'); ?>" type="text" value="<?php echo esc_attr($headline); ?>" />

          <label for="<?php echo $this->get_field_id('subhead'); ?>"><?php _e('Subheadline:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('subhead'); ?>" name="<?php echo $this->get_field_name('subhead'); ?>" type="text" value="<?php echo esc_attr($subhead); ?>" />

          <label for="<?php echo $this->get_field_id('link_text'); ?>"><?php _e('Link text:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('link_text'); ?>" name="<?php echo $this->get_field_name('link_text'); ?>" type="text" value="<?php echo esc_attr($link_text); ?>" />

          <label for="<?php echo $this->get_field_id('link'); ?>"><?php _e('Link:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('link'); ?>" name="<?php echo $this->get_field_name('link'); ?>" type="text" value="<?php echo esc_attr($link); ?>" />
        </p>
      <?php
    }

    public function update($new_instance, $old_instance) { // Updating widget replacing old instances with new
      $instance = array();
      $instance['image'] = (!empty($new_instance['image'])) ? strip_tags($new_instance['image']) : '';
      $instance['background_color'] = (!empty($new_instance['background_color'])) ? strip_tags($new_instance['background_color']) : '';
      $instance['widget_class'] = (!empty($new_instance['widget_class'])) ? strip_tags($new_instance['widget_class']) : '';
      $instance['headline'] = (!empty($new_instance['headline'])) ? strip_tags($new_instance['headline']) : '';
      $instance['subhead'] = (!empty($new_instance['subhead'])) ? strip_tags($new_instance['subhead']) : '';
      $instance['link_text'] = (!empty($new_instance['link_text'])) ? strip_tags($new_instance['link_text']) : '';
      $instance['link'] = (!empty($new_instance['link'])) ? strip_tags($new_instance['link']) : '';
      return $instance;
    }
  } //Class anduril_parallax_image_widget ends here

  function get_parallax_image_output($widget_args, $instance) {
    echo $widget_args['before_widget'];
    $widget_id = $widget_args['widget_id'];
    if (!empty($instance['image'])) {
      $image = $instance['image'];
    }
    else {
      $image = '';
    }
    if (!empty($instance['background_color'])) {
      $background_color = $instance['background_color'];
    }
    else {
      $background_color = '';
    }
    if (!empty($instance['headline'])) {
      $headline = $instance['headline'];
    }
    else {
      $headline = '';
    }
    if (!empty($instance['subhead'])) {
      $subhead = $instance['subhead'];
    }
    else {
      $subhead = '';
    }
    if (!empty($instance['link_text'])) {
      $link_text = $instance['link_text'];
    }
    else {
      $link_text = '';
    }
    if (!empty($instance['link'])) {
      $link = $instance['link'];
    }
    else {
      $link = '';
    }
    if (!empty($instance['widget_class'])) {
      $widget_class = $instance['widget_class'];
    }
    else {
      $widget_class = '';
    }
    ?>
      <style>
        <?php echo '#' . $widget_id; ?> {
          background-color: <?php echo $background_color; ?>;
          <?php
            if (!empty($image)){
              ?>
              background-image: url('<?php echo $image; ?>');
              height: auto;
              background-position: center;
              background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;
              <?php
            }
          ?>

        }
      </style>
      <div class="<?php echo $widget_class; ?>">
        <?php
          if (!empty($headline)) {
            ?>
              <div class="widgetHeadline">
                <?= $headline; ?>
              </div>
            <?php
          }
          if (!empty($subhead)) {
            ?>
              <div class="widgetSubheadline">
                <?= $subhead; ?>
              </div>
            <?php
          }
          if (!empty($link_text)) {
            if(!empty($link)) {
              ?>
                <a href="<?= $link; ?>">
              <?php
            }
            ?>
              <div class="widgetLinkText">
                <?= $link_text; ?>
              </div>
            <?php
              if(!empty($link)) {
                ?>
                  </a>
                <?php
              }
          }
        ?>
      </div>
    <?php
    echo $widget_args['after_widget'];
  }

?>
