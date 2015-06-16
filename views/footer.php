<footer class="footer">
	<p>&copy; IM Team9</p>
</footer>

	<script src="/gardenii-eticket/assets/js/jquery-1.11.3.min.js"></script>
    <!--<script src="/gardenii-eticket/assets/js/ie10-viewport-bug-workaround.js"></script>-->
    <script src="/gardenii-eticket/assets/js/bootstrap.min.js"></script>
    <script src="/gardenii-eticket/assets/js/material.min.js"></script>
    <script src="/gardenii-eticket/assets/js/ripples.min.js"></script>
    <script>
      $.material.init();
      // if (window.location.protocol != "https:")
		  //	   window.location.href = "https:" + window.location.href.substring(window.location.protocol.length);
      
      $(document).ready(function() {
        console.log("IN");
        $('[type=password]').keypress(function(e) {
          var $password = $(this),
              tooltipVisible = $('.tooltip').is(':visible'),
              s = String.fromCharCode(e.which);
          
          //Check if capslock is on. No easy way to test for this
          //Tests if letter is upper case and the shift key is NOT pressed.
          if ( s.toUpperCase() === s && s.toLowerCase() !== s && !e.shiftKey ) {
            if (!tooltipVisible)
              $password.tooltip('show');
          } else {
            if (tooltipVisible)
              $password.tooltip('hide');
          }
          
          //Hide the tooltip when moving away from the password field
          $password.blur(function(e) {
            $password.tooltip('hide');
          });
        });
      });
    </script>
