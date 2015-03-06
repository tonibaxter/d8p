<?php
    $start_year = 2011;
    
    if ($start_year == date("Y")) {
        $business = $start_year;
    } else {
        $business = $start_year."-".date("Y");
    }
?>

        </div><!-- #page -->
      </div><!-- .content -->
      
      <div id="sticky-footer"></div>
    </div><!-- #sticky-container -->

    <footer id="footer">
      <div class="content">
        <div class="right">
    	<?php if (function_exists(clean_social_menu())) clean_social_menu(); ?>
        </div><!-- .right -->

        <ul id="footer-nav">
          <li><a href="index.php">Info</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="staff.php">Staff</a></li>
        </ul>
        
        <div class="left">
          <p>&copy; <?=$business ?> Digital 8 Productions, LLC</p>
        </div><!-- .left -->
      </div><!-- .content -->
    </footer>
  </div><!-- #container -->


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="assets/js/jquery-2.1.1.min.js"%3E%3C/script%3E'))</script>
  
  <!-- <?php include_once("analyticstracking.php") ?> -->
	<?php wp_footer(); ?>

	</body>
</html>