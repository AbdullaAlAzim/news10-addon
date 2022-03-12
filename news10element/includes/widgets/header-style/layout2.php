   <div class="news10-overlay"></div>
  <header class="sticky-manu news10-news-header">
            <!-- news10 Top Bar Start -->
            <div class="news10-header-top-bar">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-5 col-md-6 col-xl-8">
                            <div class="news10-current-date">
                                <span class="icon"><svg viewBox="0 0 477.867 477.867"><path d="M119.467,0C110.041,0,102.4,7.641,102.4,17.067V51.2h34.133V17.067C136.533,7.641,128.892,0,119.467,0z"></path><path d="M358.4,0c-9.426,0-17.067,7.641-17.067,17.067V51.2h34.133V17.067C375.467,7.641,367.826,0,358.4,0z"></path> <path d="M426.667,51.2h-51.2v68.267c0,9.426-7.641,17.067-17.067,17.067s-17.067-7.641-17.067-17.067V51.2h-204.8v68.267 c0,9.426-7.641,17.067-17.067,17.067s-17.067-7.641-17.067-17.067V51.2H51.2C22.923,51.2,0,74.123,0,102.4v324.267 c0,28.277,22.923,51.2,51.2,51.2h375.467c28.277,0,51.2-22.923,51.2-51.2V102.4C477.867,74.123,454.944,51.2,426.667,51.2z M443.733,426.667c0,9.426-7.641,17.067-17.067,17.067H51.2c-9.426,0-17.067-7.641-17.067-17.067V204.8h409.6V426.667z"></path><path d="M353.408,243.942c-6.664-6.669-17.472-6.672-24.141-0.009L204.8,368.401l-56.201-56.201 c-6.669-6.664-17.477-6.66-24.141,0.009c-6.664,6.669-6.66,17.477,0.009,24.141l68.267,68.267c6.665,6.663,17.468,6.663,24.132,0 L353.4,268.083C360.068,261.419,360.072,250.611,353.408,243.942z"></path></svg></span>
                                <span class="news10-current-week"><?php esc_html_e('Date','news10') ?></span> : <span class="news10-current-day"><?php the_time('M j, Y');?></span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3  col-xl-2">
                            <div class="news10-social-link">
                                <ul>
                                    <li><a href="<?php echo esc_attr($settings['link1']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['icon1'], [ 'aria-hidden' => 'true' ] ); ?></li></a>

                                    <li><a href="<?php echo esc_attr($settings['link2']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['icon2'], [ 'aria-hidden' => 'true' ] ); ?></li>
                                    <li><a href="<?php echo esc_attr($settings['link3']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['icon3'], [ 'aria-hidden' => 'true' ] ); ?></li></a>
                                    <li><a href="<?php echo esc_attr($settings['link4']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['icon4'], [ 'aria-hidden' => 'true' ] ); ?></li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- news10 Top Bar End -->
            <!-- news10 Mid Bar Start -->
            <div class="news10-mid-bar">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-3 col-lg-2">
                            <div class="news10-logo">
                                <a href="<?php echo esc_url(home_url('/'));?>">
                                     <?php echo  get_that_image($settings['icon']); ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-8 offset-sm-1 offset-lg-2">
                            <div class="news10-header-adds">
                                 <?php echo  get_that_image($settings['icoon']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- news10 Mid Bar End -->
            <!-- news10 Manu Bar Start -->
            <div class="news10-main-manu-bar">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-5 d-lg-none">
                            <div class="news10-logo">
                              
                                   <a href="<?php echo esc_url(home_url('/'));?>">
                                     <?php echo  get_that_image($settings['icon']); ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-7 order-lg-2 col-lg-2">
                            <ul class="news10-right-btns">
                                <li>
                                    <button class="news10-search-btn">
                                        <span class="icon"><svg viewBox="0 0 511.999 511.999"><path d="M508.874,478.708L360.142,329.976c28.21-34.827,45.191-79.103,45.191-127.309c0-111.75-90.917-202.667-202.667-202.667 S0,90.917,0,202.667s90.917,202.667,202.667,202.667c48.206,0,92.482-16.982,127.309-45.191l148.732,148.732 c4.167,4.165,10.919,4.165,15.086,0l15.081-15.082C513.04,489.627,513.04,482.873,508.874,478.708z M202.667,362.667 c-88.229,0-160-71.771-160-160s71.771-160,160-160s160,71.771,160,160S290.896,362.667,202.667,362.667z"></path></svg></span>
                                    </button>
                                </li>
                              
                                <li class="d-lg-none">
                                    <button type="button" class="manu-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 order-lg-1 col-lg-10">
                            <nav class="news10-main-manu">
                                <button class="close-btn d-lg-none">
                                    <span></span>
                                    <span></span>
                                </button>
                                <span class="news10-home-icon"><svg viewBox="0 0 512 512"><path d="m498.195312 222.695312c-.011718-.011718-.023437-.023437-.035156-.035156l-208.855468-208.847656c-8.902344-8.90625-20.738282-13.8125-33.328126-13.8125-12.589843 0-24.425781 4.902344-33.332031 13.808594l-208.746093 208.742187c-.070313.070313-.140626.144531-.210938.214844-18.28125 18.386719-18.25 48.21875.089844 66.558594 8.378906 8.382812 19.445312 13.238281 31.277344 13.746093.480468.046876.964843.070313 1.453124.070313h8.324219v153.699219c0 30.414062 24.746094 55.160156 55.167969 55.160156h81.710938c8.28125 0 15-6.714844 15-15v-120.5c0-13.878906 11.289062-25.167969 25.167968-25.167969h48.195313c13.878906 0 25.167969 11.289063 25.167969 25.167969v120.5c0 8.285156 6.714843 15 15 15h81.710937c30.421875 0 55.167969-24.746094 55.167969-55.160156v-153.699219h7.71875c12.585937 0 24.421875-4.902344 33.332031-13.808594 18.359375-18.371093 18.367187-48.253906.023437-66.636719zm0 0"></path></svg></span>
                            <?php
                            echo str_replace(['menu-item-has-children', 'sub-menu'], ['dropdown', 'dropdown-menu'],
                                wp_nav_menu( array(
                                        'container' => false,
                                        'echo' => false,
                                        'menu_id' => 'm-main-menu',
                                        'theme_location' => 'primary',
                                        'menu' =>    $main_menu,
                                        'items_wrap' => '<ul>%3$s</ul>',
                                    )
                                ));
                            ?>
                                <span class="news10-more-icon"><a href="#"><svg viewBox="0 0 426.667 426.667"><circle cx="42.667" cy="213.333" r="42.667"></circle><circle cx="213.333" cy="213.333" r="42.667"></circle><circle cx="384" cy="213.333" r="42.667"></circle></svg></a></span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- news10 Manu Bar End -->
        </header>
        <!-- mobile manu  -->
        <div class="news10-main-menu mobile-menu">
            <div class="nav-close">
                <i class="fa fa-times"></i>
            </div>
                <?php
                    echo str_replace(['menu-item-has-children', 'sub-menu'], ['dropdown', 'dropdown-menu'],
                        wp_nav_menu( array(
                                'container' => false,
                                'echo' => false,
                                'menu_id' => 'm-main-menu',
                                'theme_location' => 'primary',
                                'menu' =>    $main_menu,
                                'items_wrap' => '<ul>%3$s</ul>',
                            )
                        ));
                    ?>
        </div>
        <!-- search news10l start  -->
        <div class="news10-search-news10l">
            <div class="container">
                <form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="news10-search-form">
                    <input type="search" class="form-control" placeholder="Search..." autocomplete="off" value="<?php echo get_search_query(); ?>" name="s">
                    <button class="theme-btn blue-btn"><?php esc_html_e('Search','news10'); ?></button>
                </form>
            </div>
        </div>
        <!-- search news10l end  -->
        <main>