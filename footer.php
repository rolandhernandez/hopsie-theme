<?php
/**
 * Default Footer Template
 *
 */
?>

<div class="top-bar footer" id="responsive-menu">
  <div class="top-bar-left">
  <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text"><?php bloginfo( 'name' ); ?></li>
    </ul>
  </div>
  <div class="top-bar-right">
  <?php h5bs_footer_nav(); ?>
  </div>
</div>

<?php wp_footer(); ?>

<?php
// don't track admins or editors and google analytics option is filled in
if ( ! current_user_can( 'edit_pages' ) && get_option( 'client_google_analytics' ) ) :
  $analytics_id = get_option( 'client_google_analytics' ); ?>

  <!-- Google Universal Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', '<?= $analytics_id; ?>', 'auto');ga('send', 'pageview');
  </script>
<?php endif; ?>

</body>
</html>
