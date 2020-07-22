<section class="margin-wrapper">
  <footer class="footer-class" id="footer">

    <div class="footer-child">
      <span class="footer-span">
      &copy; <?php echo esc_html( date_i18n( __( 'Y', 'minimalistWP' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
      </span>
    </div>

    <div class="footer-child">
      <span class="footer-span">
      <?php bloginfo( 'description' ); ?>
      </span>

    </div>

    <div class="footer-child">
      <?php footerInfo(); ?>
    </div>

    <div class="footer-child">
    </div>

  </footer>

</section>
</div><!-- Close Main Wrapper -->
<?php wp_footer(); ?>
<script>
 jQuery(document).ready(function(){
        jQuery(".menu-button").click(function(){
          jQuery("#navGridId").toggle();
        });
	    jQuery(".close-button-class").click(function(){
			jQuery("#navGridId").hide();
		});
      });
</script>
</body>
</html>
