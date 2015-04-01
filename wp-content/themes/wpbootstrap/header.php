 <head>

    <meta charset="utf-8">
    <title>Simon Vaughan &middot; Ljosmyndari - reyndur ljósmyndari vinna í Reykjavík, Ísland</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="author" content="">

	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500' rel='stylesheet' type='text/css'>

    <!-- CSS STYLES -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <!-- basic stylesheet -->
    <link rel="stylesheet" href="royalslider/royalslider.css">

    <!-- skin stylesheet (change it if you use another) -->
    <link rel="stylesheet" href="royalslider/skins/default/rs-default.css"> 

    <!-- Plugin requires jQuery 1.7+  -->
    <!-- If you already have jQuery on your page, you shouldn't include it second time. -->
    <script src='royalslider/jquery-1.8.3.min.js'></script>

    <!-- Main slider JS script file --> 
    <!-- Create it with slider online build tool for better performance. -->
    <script src="royalslider/jquery.royalslider.min.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>

<body>
	<div class="wrapper"> <!--Start of the full page wrapper-->
      		<div class="navbar "> <!--Start of the static navbar -->
        		<div class="container"> <!--Start of the header container-->
	   			<div class="page-header"> <!--Start of page header-->
	       				<h1><span style="color:red";>S</span>imon <span style="color:red";>V</span>aughan <span style="color:red";>L</span>jósmyndari</h1>
	       				<h1 class="headersmall"><span style="color:red";>S</span><a>IMON</a> <span style="color:red";>V</span><a>AUGHAN</a><span style="color:red";>L</span><a>JÓSMYNDARI</a></h1>
	   			</div><!--End of page header-->
          			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
            				<span class="icon-bar"></span>
            				<span class="icon-bar"></span>
            				<span class="icon-bar"></span>
          			</button>
          			<div class="nav-collapse collapse span12">
	    				<div class="top-nav">
            					<ul class="nav navbar-nav span12">           
							<?php wp_list_pages('exclude=80,85,160,165,169, 287&title_li' ); ?>
            					</ul>
	    				</div><!-- End of top navigation -->
          			</div><!-- End of nav-collapse -->
        		</div> <!-- End of header container-->
      		</div> <!-- End of static navbar-->
   	</div>  <!-- End of static navbar-->
	     
	<div class="container"> <!--Start of the main content container-->