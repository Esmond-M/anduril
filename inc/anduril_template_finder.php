<?php

function anduril_template_finder() {
  $templates = get_page_templates();
  reset($templates); //To get first key as default template to display
  $current_template = key($templates);

  if (isset($_GET['template'])) {
    $current_template = $_GET['template']; //In case we've chosen a new template
  }
  ?>
    <script>
      jQuery(document).ready(function($) {
        $('#andurilTemplatePicker').change(function() {
          let newTemplate = $(this).val();
          location.href = location.protocol + '//' + location.hostname + location.pathname + '?page=find_templates&template=' + newTemplate;
        });
      });
    </script>

    <style>
      .andurilPagesList {
        font-size: 16px;
        margin-top: 15px;
      }
      .andurilPagesListItem {
        background-color: #fff;
        padding: 5px;
        margin: 5px;
        width: 100%;
      }
      .andurilPagesListItem:nth-child(even) {
        background-color: #ddd;
      }
    </style>

    <div class="wrap"><h1 class="wp-heading-inline">Anduril Template Finder</h1></div>

      <div class="alignleft actions">
      <div>
        <p>Change template:</p>
          <select id="andurilTemplatePicker">
            <?php
              $selected_url = '';
              foreach ($templates as $template_name => $template_url) {
                $pages = get_pages(array(
                  'meta_key' => '_wp_page_template',
                  'meta_value' => $template_url,
                  'post_status' => array(
                    'publish',
                    'draft',
                    'private',
                    'future',
                    'pending'
                  ),
                  'hierarchical' => false
                ));
                $selected = '';
                if ($current_template == $template_name) {
                  $selected = ' selected';
                  $selected_url = $template_url;
                }
                echo '<option value="' . $template_name . '"' . $selected . '>' . $template_name . ' - ' . count($pages) . ' pages</option>';
              }
            ?>
            </select>
          </div>
        <div class="andurilPagesList">
        <?php
          $found_pages = get_pages(array(
            'meta_key' => '_wp_page_template',
            'meta_value' => $selected_url,
            'post_status' => array(
              'publish',
              'draft',
              'private',
              'future',
              'pending'
            ),
            'hierarchical' => false
          ));
          foreach ($found_pages as $found_page) {
            _e('<div class="andurilPagesListItem"><a href="/wp-admin/post.php?post=' . $found_page->ID . '&action=edit" target="_blank">' . $found_page->post_title . '</a> - ID: ' . $found_page->ID . ' - status: ' . $found_page->post_status . ' - <a href="'. get_permalink($found_page) . '" target="_blank">View live</a></div>');
          }
        ?>
      </div>
  <?php
}

function anduril_admin_menu_tf() { //Put it on dashboard menu
	add_menu_page( 'Anduril Template Finder', 'Template Finder', 'manage_options', 'find_templates', 'anduril_template_finder', 'dashicons-admin-generic', 6  );
  wp_enqueue_script( 'jquery-ui-sortable' );
}

add_action( 'admin_menu', 'anduril_admin_menu_tf' );

?>
