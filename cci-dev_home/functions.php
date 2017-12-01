<?php
function my_theme_enqueue_styles() {
    $parent_style = 'publishable-mag-style';
    wp_enqueue_style( 
        'parent-style', 
        get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 
        'parent-style', 
        get_template_directory_uri() . 'css/addons.css' );
    wp_enqueue_style( 
        'parent-style', 
        get_template_directory_uri() . 'css/themeinfo.css' );
    wp_enqueue_style( 
        'parent-style', 
        get_template_directory_uri() . 'css/woocommerce2.css' );

    wp_enqueue_style( 'cci-dev_home-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/**
 * Copyrights */
if ( ! function_exists( 'publishable_lite_copyrights_credit' ) ) {
    function publishable_lite_copyrights_credit() { 
    global $mts_options
      ?>
      <!--start copyrights-->
      <div class="copyrights">
          <div class="container">
              <div class="row" id="copyright-note">
                  <span>

          <?php echo 'CC: BY-NC '.date_i18n(__('Y','publishable-mag')); ?> Defenders of Wildlife

                  <div class="top">
                  
                      <a href="#top" class="toplink"><?php _e('Back to Top','publishable-mag'); ?> &uarr;</a>
                  </div>
              </div>
          </div>
      </div>
      <!--end copyrights-->
      <?php }
}

?>
