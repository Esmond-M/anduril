<?php
// Creating the Small Top widget
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
