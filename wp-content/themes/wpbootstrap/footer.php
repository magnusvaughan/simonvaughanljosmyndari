 	<div class="bottom-nav"> <!--Start of the bottom static navbar -->
      		<div class="navbar span12"> <!--Start of the bottom static navbar -->
        		<div class="container"> <!--Start of the footer container-->
          			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
            				<span class="icon-bar"></span>
            				<span class="icon-bar"></span>
            				<span class="icon-bar"></span>
          			</button>
          			<div class="nav-collapse collapse">
          				<ul class="nav navbar-nav span12">           
 						<?php wp_list_pages('include=85,160,165,169, 287&title_li' ); ?> 
           				</ul>
          			</div><!-- End of nav-collapse -->
			</div> <!--End of the main content container-->
      		</div><!--End of the bottom static navbar -->
	</div><!--/.bottom-nav --> <!--End of the bottom static navbar -->
   	<div id="footer">
      		<div class="container span5"> <!--Start of the credit container -->
        		<p class="muted credit ">Site by <a href="http://www.magnusvaughan.com">Magnus</a></p>
      		</div> <!--End of the credit container -->
    	</div>
    </div> <!--End of the main content container-->
    <?php wp_footer(); ?>
  </body>
</html>