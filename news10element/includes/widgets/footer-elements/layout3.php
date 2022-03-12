    <!-- footer section start  -->
    <footer class="news10-food-footer-section news10-section pb-0">
        <div class="container">
           
             <a href="<?php echo home_url('/');?>" class="news10-food-footer-logo"><?php echo  get_that_image($settings['fdnfo_logoo']); ?></a>
            <div class="news10-food-footer-nav">
                <ul>
                      <?php if(($settings['fdmember_listt']) ): foreach ($settings['fdmember_listt'] as $members):?>
                    <li><a href="<?php echo esc_attr($members['fdlinkk']['url']); ?>"><?php echo ($members['fdtextt']); ?></a></li>
                      <?php endforeach; endif; ?>
              
                </ul>
            </div>
            <div class="news10-food-social-link">
                <a href="<?php echo esc_attr($settings['fdlink11']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['fdicon11'], [ 'aria-hidden' => 'true' ] ); ?></a>
                <a href="<?php echo esc_attr($settings['fdlink22']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['fdicon22'], [ 'aria-hidden' => 'true' ] ); ?></a>
                <a href="<?php echo esc_attr($settings['fdlink33']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['fdicon33'], [ 'aria-hidden' => 'true' ] ); ?></a>

                
            </div>
        </div>
        <div class="footer-bottom">
            <span><?php echo $settings['fdcop_right']; ?></span>
        </div>
    </footer>
    <!-- footer section end  -->