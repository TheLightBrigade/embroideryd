<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="images/favicon.ico">

<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $meta_description; ?>">
<meta name="keywords" content="<?php echo $meta_keywords; ?>" />
<meta name="robots" content="all"/>
<meta name="googlebot" content="index,follow"/>

<link href="fonts/fonts.css" rel="stylesheet"><!-- Font CSS -->
<link href="css/bootstrap.css" rel="stylesheet"><!-- Bootstrap core CSS -->
<link href="css/embroiderystyle.css" rel="stylesheet"><!-- Custom stylesheet -->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="/js/html5shiv.min.js"></script>
  <script src="/js/respond.min.js"></script>
<![endif]-->

<meta name="google-site-verification" content="DLxYO7nx8qbAhTHSZ2TTeSin14xonXbJ0eXbGRhAI5M" />
</head>

<body>
  <div class="supernav container">
    <p class="col-md-12"><a href="mailto:info@embroideryd.com">info@embroideryd.com</a> <span>|</span> (845) 724&ndash;3986</p>
  </div><!-- /.supernav -->
  
  <div class="container">
    <a href="index.php">
      <div class="col-lg-3 col-md-4 col-md-offset-1 col-sm-6 col-xs-9 logo"><img src="images/embroidery_designs_logo.png" alt="Embroidery Designs"></div>
      <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 logo tagline"><img src="images/embroidery_designs_tagline.png" alt="Designs, logos and images from concept to production"></div>
    </a>
  </div><!-- /.container -->
  
  <!-- Fixed navbar -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li <?php if($page == 'index.php') {echo "class='active'";} ?>><a href="index.php">
            <span class="top_nav">HI, WE'RE THE</span><br><span class="bottom_nav">DUNNINGS</span></a>
          </li>
          <li <?php if($page == 'what_we_do.php') {echo "class='active'";} ?>><a href="what_we_do.php"><span class="top_nav">AND THIS IS</span><br><span class="bottom_nav">WHAT WE DO</span></a></li>
          <li <?php if($page == 'how_we_do_it.php') {echo "class='active'";} ?>><a href="how_we_do_it.php"><span class="top_nav">YOU CAN SEE</span><br><span class="bottom_nav">HOW WE DO IT</span></a></li>
          <li <?php if($page == 'our_past_work.php') {echo "class='active'";} ?>><a href="our_past_work.php"><span class="top_nav">OR TAKE A LOOK AT</span><br><span class="bottom_nav">OUR PAST WORK</span></a></li>
          <li <?php if($page == 'contact_us.php') {echo "class='active'";} ?>><a href="contact_us.php"><span class="top_nav">SO COME TALK TO US,</span><br><span class="bottom_nav">WE'D LOVE TO HELP!</span></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>