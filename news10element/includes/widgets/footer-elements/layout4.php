    <!-- footer section start  -->
<footer class="news10-fashion-footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="news10-fashion-footer-items">
                        <a href="<?php echo home_url('/');?>" class="news10-fashion-footer-logo"><?php echo  get_that_image($settings['fsnfo_logoo']); ?></a>


                        <p><?php echo  ($settings['fsitem_description']); ?></p>
                        <div class="news10-fashion-social-link">
                            <h5><?php esc_html_e('Follow us :','news10'); ?></h5>
                            <ul>

                                <li><a href="<?php echo esc_attr($settings['fsslink11']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['fssicon11'], [ 'aria-hidden' => 'true' ] ); ?></a></li>
                                <li><a href="<?php echo esc_attr($settings['fsslink22']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['fssicon22'], [ 'aria-hidden' => 'true' ] ); ?></a></li>
                                <li><a href="<?php echo esc_attr($settings['fsslink33']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['fssicon33'], [ 'aria-hidden' => 'true' ] ); ?></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="news10-fashion-footer-items">
                        <h2 class="footer-title"><?php esc_html_e('Popular Post','news10'); ?></h2>

                         <?php 
                    if($npopularpost3->have_posts()) : while($npopularpost3->have_posts()) : $npopularpost3->the_post();?>
                        <div class="news10-single-post news10-sm-single-post news10-effect-wraper">
                            <a href="" class="post-thumb news10-hover-effect">
                                <?php 
                                  if (has_post_thumbnail()) {
                                 the_post_thumbnail('news10-point-80-80');
                                   }
                                ?>
                            </a>
                            <div class="single-post-content-wrapper">
                                <div class="news10-meta-info">
                                    <span class="fashion-ctg"><?php news10_loop_category(); ?></span>
                                    <div class="post-author-date">
                                        <span class="author"><?php esc_html_e('by :','news10'); ?><?php echo get_the_author()?> |</span>
                                        <span class="date"><?php the_time('M j, Y');?></span>
                                    </div>
                                </div>
                                <a href="" class="title"><?php the_title(); ?></a>
                            </div>
                        </div>
                        <?php
                           endwhile; endif;
                           wp_reset_query();
                           ?>                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="news10-fashion-footer-items">
                        <h2 class="footer-title"><?php esc_html_e('Instagram Feed','news10'); ?></h2>
                        <div class="news10-instagram-wraper">

                            <?php if(($settings['fssmember_list']) ): foreach ($settings['fssmember_list'] as $members):?>
                            <div class="news10-effect-wraper ctg-items">
                                <a href="<?php echo get_that_link($members['fsslink']); ?>" class="news10-hover-effect">
                                   <?php echo get_that_image($members['fssmember_photo']); ?>
                                </a>
                            </div>
                             <?php endforeach; endif; ?>

                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <span><?php echo $settings['fsscop_right']; ?></span>
        </div>
    </footer>
    <!-- footer section end  -->