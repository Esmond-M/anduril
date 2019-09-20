<?php
  get_header();
  if (is_active_sidebar('post-top')) {
    dynamic_sidebar('post-top');
  }
  if (get_post_format() === 'link') {
    $link = $post->_anduril_link;
    echo '<script>
            location.assign(\'' . $link . '\');
          </script>';
  }

  if (isset($_GET['sidebar'])) {
    $sidebar = $_GET['sidebar'];
  }
?>

<div class="postContainer">
  <article>
    <div class="container-fluid">
      <?php
        if (is_active_sidebar('template-post-sidebar') && $sidebar != 'no') {
          ?>
          <div class="row">
            <div class="col-sm-8">
              <!-- <div class="postDate"><?php echo get_the_date(); ?></div>  -->
              <h1><?php _e(get_the_title()); ?></h1>
               <?php
                  $img_url = wp_get_attachment_image_src(get_the_ID(),'full',false);
                  echo '<img src="' . $img_url[0] . '" class="portfolioImage" />';

                 if ( has_excerpt() ) : ?>
                   <div class="entry-caption">
                     <?php the_excerpt(); ?>
                   </div><!-- .entry-caption -->
               <?php endif; ?>
            </div>
            <div class="col-sm-4 sidebarContainer">
              <?php dynamic_sidebar('template-post-sidebar'); ?>
            </div>
          </div>
          <?php
        }
        else {
          ?>
          <div class="row">
            <div class="col-sm-12">
              <!-- <div class="postDate"><?php echo get_the_date(); ?></div>  -->
              <h1><?php _e(get_the_title()); ?></h1>
               <?php
                  $img_url = wp_get_attachment_image_src(get_the_ID(),'full',false);
                  echo '<img src="' . $img_url[0] . '" class="portfolioImg" />';

                 if ( has_excerpt() ) : ?>
                   <div class="entry-caption">
                     <?php the_excerpt(); ?>
                   </div><!-- .entry-caption -->
               <?php endif; ?>
            </div>
          </div>
          <?php
        }
      ?>
    </div>
  </article>
</div>
<?php
  get_footer();
?>
