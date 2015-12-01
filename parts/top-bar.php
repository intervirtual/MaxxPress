<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<div class="top-bar-container contain-to-grid">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area top-bar-<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>">

            <div class="logo">

                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>" />
                </a>
            </div>

            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>

        </ul>
        <section class="top-bar-section">
            <?php foundationpress_top_bar_l(); ?>
            <?php foundationpress_top_bar_r(); ?>
            <ul class="social-icons">
                <li><a href=""><i class="fi-telephone"></i></a></li>
                <li><a href=""><i class="fi-social-linkedin"></i></a></li>
                <li><a href=""><i class="fi-social-twitter"></i></a></li>
                <li><a href=""><i class="fi-social-facebook"></i></a></li>
            </ul>
            <ul class="social-icons">
                <li><a href=""><i class="fi-telephone"></i></a></li>
                <li><a href=""><i class="fi-social-linkedin"></i></a></li>
                <li><a href=""><i class="fi-social-twitter"></i></a></li>
                <li><a href=""><i class="fi-social-facebook"></i></a></li>
            </ul>
            <p class="social-info" >A nova face da odontologia estética<br>Contate agora: tel (11) 3509-6411 | (11) 2204-2410<br>atendimento@maxxil.com.br</p>
        </section>
    </nav>
</div>
<hr class="top-bar-footer" />