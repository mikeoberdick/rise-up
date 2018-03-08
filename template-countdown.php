<?php /* Template Name: Countdown */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() . '/favicons/apple-touch-icon.png';?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() . '/favicons/favicon-32x32.png';?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() . '/favicons/favicon-16x16.png';?>">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri() . '/favicons/manifest.json';?>">
  <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri() . '/favicons/safari-pinned-tab.svg';?>" color="#5bbad5">
  <meta name="theme-color" content="#ffffff">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
  
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="countdownPage">
  <div class="wrapper" id="page-wrapper">
    <main class="site-main" id="main">
      <div class="container-fluid text-center" tabindex="-1">
        <div class = "row">
            <div class = "col-sm-12 text-center">
              <img class = "mx-auto d-block" src="http://via.placeholder.com/500x500?text=Rise+Up+Logo" alt="Rise Up IV Logo">
              <div class ="clock mt-5 d-inline-block" style = "width: auto;"></div>
              <div id="showtime"></div>
            </div>
        </div><!-- .row -->  
      </div><!-- .container-fluid -->
    </main><!-- #main -->
  </div><!-- #page-wrapper -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
  var date = new Date("March 21, 2018 17:00:00");
  var now = new Date();
  var diff = (date.getTime()/1000) - (now.getTime()/1000);

  var clock = jQuery('.clock').FlipClock(diff,{
      clockFace: 'DailyCounter',
      countdown: true,
      callbacks: {
          stop: function() {
          jQuery('.clock').addClass("hideCountdown");
          jQuery('.clock').html("It's Showtime!");
        }
      }
  });
</script>

</body>

</html>