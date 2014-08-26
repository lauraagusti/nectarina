<?php
/**
 * Footer
 *
 * @package Nectarina
 * @author Mildthemes
 * @link http://mildthemes.com
 * @version 0.0.1
 */
 ?>

			</div>
			<!-- Ends main-container -->
			
			<footer>
		
			</footer>
		
			<!-- WordPress Bar -->
			<?php wp_footer(); ?>
	
	</body>
	
  <script>
	jQuery(document).ready(function(){
		jQuery(".slides").responsiveSlides({
		  auto: true,             // Boolean: Animate automatically, true or false
		  speed: 500,            // Integer: Speed of the transition, in milliseconds
		  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
		  pager: false,           // Boolean: Show pager, true or false
		  nav: false,             // Boolean: Show navigation, true or false
		  random: false,          // Boolean: Randomize the order of the slides, true or false
		  pause: false,           // Boolean: Pause on hover, true or false
		  pauseControls: false,   // Boolean: Pause when hovering controls, true or false
		  prevText: "Previous",   // String: Text for the "previous" button
		  nextText: "Next",       // String: Text for the "next" button
		  maxwidth: "1800px",     // Integer: Max-width of the slideshow, in pixels
		  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
		  manualControls: "",     // Selector: Declare custom pager navigation
		  namespace: "rslides",   // String: Change the default namespace used
		  before: function(){},   // Function: Before callback
		  after: function(){}     // Function: After callback
		});
	});
  </script>

</html>