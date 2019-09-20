<?php
  if (!is_front_page()) {
    ?>
      <script>
        jQuery(document).ready(function($) {
          const homeURL = '<?php bloginfo('url')?>';
          const homeCode = `
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5381"><a title="HOME" href="` + homeURL + `">HOME</a></li>
          `;
          $('#menu-main').prepend(homeCode);
        });
      </script>
    <?php
  }
?>

<nav class="navbar-fixed-top navbar-default" role="navigation">
<!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

  </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <?php /* Primary navigation */
      wp_nav_menu(array(
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'false',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker()
        )
      );
      //Custom static menu items below
    ?>
    <div class="navSocialLinks">
      <a target="_blank" href="https://www.facebook.com/SocialMovementTechnologies">
        <img src="<?php echo get_template_directory_uri(); ?>/media/facebook.png">
      </a>
      <a target="_blank" href="https://twitter.com/intent/follow?original_referer=http%3A%2F%2Fwww.socialmovementtechnologies.org%2F&amp;region=follow_link&amp;screen_name=SocialMoveTech&amp;tw_p=followbutton">
        <img src="<?php echo get_template_directory_uri(); ?>/media/twitter.png">
      </a>
      </a>
      <a target="_blank" href="https://www.instagram.com/socialmovetech/">
        <img src="<?php echo get_template_directory_uri(); ?>/media/instagram.png">
      </a>
      <a target="_blank" href="mailto:info@socialmovementtechnologies.org?subject=SMT inquiry">
        <img src="<?php echo get_template_directory_uri(); ?>/media/message.png">
      </a>
    </div>
  </div>
</nav>
