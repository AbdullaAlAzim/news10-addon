	 <!-- footer section start  -->
    <footer class="news10-footer-section news10-data-background" data-background="<?php echo esc_url($settings['bgg']['url']); ?>">
        <a href="<?php echo home_url('/');?>" class="footer-logo"><?php echo  get_that_image($settings['image']); ?></a>
       
        <div class="news10-footer-social-link">
            <a href="" class="social-item"> <span><?php \Elementor\Icons_Manager::render_icon( $settings['icon1'], [ 'aria-hidden' => 'true' ] ); ?></span><?php esc_attr_e($settings['facebook']); ?></a>
            <a href="" class="social-item"> <span><?php \Elementor\Icons_Manager::render_icon( $settings['icon2'], [ 'aria-hidden' => 'true' ] ); ?></span><?php esc_attr_e($settings['twitter']); ?></a>
            <a href="" class="social-item"> <span><?php \Elementor\Icons_Manager::render_icon( $settings['icon3'], [ 'aria-hidden' => 'true' ] ); ?></span><?php esc_attr_e($settings['instagram']); ?></a>
            <a href="" class="social-item"> <span><?php \Elementor\Icons_Manager::render_icon( $settings['icon4'], [ 'aria-hidden' => 'true' ] ); ?></span><?php esc_attr_e($settings['youtube']); ?></a>
        </div>
        <div class="news10-footer-bottom">
            <span><?php esc_html_e($settings['item_description']); ?></span>
        </div>
    </footer>
    <!-- footer section end  -->