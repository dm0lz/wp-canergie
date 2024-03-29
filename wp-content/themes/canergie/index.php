
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!--<link rel="shortcut icon" href="/assets/ico/favicon.ico">-->

    <title><?php _e('Canergie : A propos de Canergie', 'canergie'); ?></title>

    <!-- CSS -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- <?php // wp_enqueue_script("jquery"); ?> -->

    <?php wp_head(); ?>

  </head>

  <body>

    <div id="container">

      <?php get_header(); ?>

      <div id="content">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else: ?>
          <p><?php _e('Error'); ?></p>
        <?php endif; ?>

      </div>

      <?php get_footer(); ?>

    </div><!-- /.container -->

  </body>
</html>

