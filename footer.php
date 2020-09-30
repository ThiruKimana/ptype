<?php
  /**
  * Theme Name: ptype
  * Theme URL: http://geekedtype.com
  * Description:This is the template for displaying the footer
  * Author: Thiru Kimana <kimstilltheman@geekedtype.com>
  * GNU General Public License v2 or later
  * Version: 0.0.1
  * Copyright 2020, Thiru Kimana
  *	
  **/

  ?>
</div>
<footer id="footer">
<div id="copyright">
<?php printf( esc_html__( 'copyright', '' ), '', '' );?>&copy;
<?php echo esc_html( date_i18n( __( 'Y', 'ptype' ) ) ); ?> <a href="<?php echo esc_url( __( '', 'ptype' ) ); ?>"><?php printf( esc_html__( '', 'ptype' ), '' ); ?></a>
<span class="sep"> | </span><?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'ptype' ), 'ptype', '<a href="http://geekedtype.com" rel="designer nofollow">Thiru Kimana</a>' ); ?>
</div>
<div id="footer-logo">  
<a class="footerLogo" href="<?php echo get_home_url(); ?>">
<img src="<?php echo get_template_directory_uri(); ?>/images/footerlogo.png" width="373px" height="172px" alt="" /></a>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>