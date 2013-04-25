<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset='<?php bloginfo( 'charset' ); ?>' />
  <meta content='width=device-width' name='viewport'>
  <title>
    <?php wp_title( '|', true, 'right' ); ?>
  </title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href="<?php echo get_template_directory_uri(); ?>/stylesheets/bootstrap.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/stylesheets/bootstrap-responsive.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/stylesheets/custom.css" rel="stylesheet">
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery-1.9.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/javascripts/bootstrap.min.js"></script>
   <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
   <![endif]-->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<header>
  <div class='navbar-wrapper'>
    <div class='container'>
      <div class='navbar navbar-inverse'>
        <nav class='navbar-inner' id='navmenu' role='navigation'>
          <ul class='nav'>
            <li><a href="#">HOME</a></li>
            <li><a href="#">SECOND</a></li>
            <li class='dropdown'>
              <a class='dropdown-toggle' data-toggle='dropdown' href='#'>THIRD</a>
              <ul class='dropdown-menu'>
                <li><a href="#">First</a></li>
                <li><a href="#">Second</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
