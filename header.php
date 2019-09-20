<!DOCTYPE html>
<html>
	<head>
		<title>
		<?php
      $title = get_bloginfo('name');
      if (!empty($post->post_title)) {
        $title .= ' - ' . get_the_title();
      }
      echo $title;
    ?>
		</title>
    <?php
      $description = '';
      if (!empty($post->post_excerpt)) {
        ?>
    <meta name="description" content="<?php _e(wp_strip_all_tags($post->post_excerpt)); ?>">
        <?php
      }
    ?>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

    <!-- Begin FB, Google code -->
      <script>(function() {
      var _fbq = window._fbq || (window._fbq = []);
      if (!_fbq.loaded) {
      var fbds = document.createElement('script');
      fbds.async = true;
      fbds.src = '//connect.facebook.net/en_US/fbds.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(fbds, s);
      _fbq.loaded = true;
      }
      _fbq.push(['addPixelId', '581965975281728']);
      })();
      window._fbq = window._fbq || [];
      window._fbq.push(['track', 'PixelInitialized', {}]);
      </script>
      <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=581965975281728&amp;ev=PixelInitialized" /></noscript>

      <script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-37604043-1']);
          _gaq.push(['_setDomainName', 'none']);
          _gaq.push(['_setAllowLinker', true]);
            _gaq.push(['_setCustomVar', 1, 'UGC', 'false', 3]);
            _gaq.push(['_setCustomVar', 1, 'Page type', 'Blog', 3]);
          _gaq.push(['_trackPageview']);
          _gaq.push(['_trackPageLoadTime']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
              ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'https://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        </script>
<meta name="google-site-verification" content="pYyyUa32mPxvnbCHbAkMmKSyPmdJePdIc_WiexkvDOo" />
    <!-- End FB, Google code -->
	</head>
	<body>
    <?php get_template_part('template-parts/navbar'); ?>