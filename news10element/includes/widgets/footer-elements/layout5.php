<section class="news10-info-footer news10-section pb-0">
                <div class="container">
                    <div class="news10-link-footer">
                        <div class="row pt-0">
                            <div class="col-lg-4">
                                <div class="footer-left">
                                    <div class="logo">
                                     
                                         <a href="<?php echo home_url('/');?>"><?php echo  get_that_image($settings['nfo_logoo']); ?></a>
                                    </div>
                                    <p><?php echo  ($settings['abou_ccc']); ?></p>
                                    <div class="lint-list">
                                        <ul>
                                            <li>
                                                <p><?php esc_html_e('Contact us:','news10'); ?><a href="mailto:"><?php echo  ($settings['contact_n']); ?></a></p>
                                            </li>
                                            <li>
                                                <p><?php esc_html_e('Call us:','news10'); ?> <a href="tel:"><?php echo  ($settings['call_n']); ?></a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footer-social-link">
                                        <ul>
                                    <li><a href="<?php echo esc_attr($settings['link11']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['icon11'], [ 'aria-hidden' => 'true' ] ); ?></li></a>

                                    <li><a href="<?php echo esc_attr($settings['link22']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['icon22'], [ 'aria-hidden' => 'true' ] ); ?></li>
                                    <li><a href="<?php echo esc_attr($settings['link33']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['icon33'], [ 'aria-hidden' => 'true' ] ); ?></li></a>
                                    <li><a href="<?php echo esc_attr($settings['link44']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['icon44'], [ 'aria-hidden' => 'true' ] ); ?></li></a>
                                </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="news10-title">
                                    <div class="news10-title-text mt-md-30">
                                        <h2><?php esc_html_e('Most Viewed Posts','news10'); ?></h2>
                                    </div>
                                </div>
                                <div class="news10-news-list">
                                    <ul>
                                        <?php 
                    if($npopularpost2->have_posts()) : while($npopularpost2->have_posts()) : $npopularpost2->the_post();?>
                                        <li>
                                            <div class="news10-list-img">
                                                <?php 
                                          if (has_post_thumbnail()) {
                                         the_post_thumbnail();
                                           }
                                        ?>
                                            </div>
                                            <div class="news10-list-text">
                                               
                                                 <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                <ul>
                                                    <li>
                                                        <span class="news10-icon"><svg viewBox="0 0 512 512"><path d="M347.216,301.211l-71.387-53.54V138.609c0-10.966-8.864-19.83-19.83-19.83c-10.966,0-19.83,8.864-19.83,19.83v118.978 c0,6.246,2.935,12.136,7.932,15.864l79.318,59.489c3.569,2.677,7.734,3.966,11.878,3.966c6.048,0,11.997-2.717,15.884-7.952 C357.766,320.208,355.981,307.775,347.216,301.211z"></path><path d="M256,0C114.833,0,0,114.833,0,256s114.833,256,256,256s256-114.833,256-256S397.167,0,256,0z M256,472.341 c-119.275,0-216.341-97.066-216.341-216.341S136.725,39.659,256,39.659c119.295,0,216.341,97.066,216.341,216.341 S375.275,472.341,256,472.341z"></path></svg></span>
                                                        <span class="news10-item-text"><?php the_time('M j, Y');?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <?php
                           endwhile; endif;
                           wp_reset_query();
                           ?>
                                      
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="news10-title">
                                    <div class="news10-title-text mt-md-30">
                                        <h2><?php esc_html_e('News Tags','news10'); ?></h2>
                                    </div>
                                </div>
                                <div class="news10-news-tags">
                                    <ul>
                                         <?php
                                        foreach($categoriesn as $category) :
                                        ?>
                                        <li><a href="<?php echo get_term_link($category->slug, 'post_tag') ?>"><?php echo esc_html($category->name ); ?></a></li>
                                        <?php endforeach; ?>
                                     
                                    </ul>
                                </div>
                                <div class="news10-email">
                                    <form>
                                        <div class="input-group">
                                            <label class="news10-icon" for="news10Email">
                                            <svg viewBox="0 0 512 512"><path d="M505.168,111.894L328.124,246.77l177.408,152.64c4.122-7.792,6.468-16.661,6.468-26.073V138.662 C512,128.971,509.521,119.85,505.168,111.894z"></path><path d="M456.049,82.711H55.95c-11.013,0-21.286,3.211-29.953,8.729l220.786,165.473c5.532,4.06,12.944,4.068,18.485,0.027 l218.79-166.682C475.815,85.468,466.251,82.711,456.049,82.711z"></path><path d="M303.725,265.359l-20.561,15.665c-8.109,5.987-17.616,8.981-27.119,8.981c-9.505,0-19.007-2.993-27.119-8.981 l-0.087-0.064l-20.533-15.389L27.253,421.346c8.396,5.039,18.213,7.943,28.697,7.943h400.1c10.552,0,20.43-2.939,28.862-8.038 L303.725,265.359z"></path><path d="M5.835,113.824C2.107,121.313,0,129.743,0,138.662v234.677c0,9.477,2.376,18.407,6.553,26.237l177.166-152.433 L5.835,113.824z"></path></svg>
                                        </label>
                                            <input type="email" class="form-control" placeholder="Enter Your Email Address" id="news10Email">
                                        </div>
                                        <button type="submit" class="d-btn">Subscribe Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news10-main-footer">
                        <h6><?php echo $settings['nccop_right']; ?></a></h6>
                    </div>
                </div>
            </section>