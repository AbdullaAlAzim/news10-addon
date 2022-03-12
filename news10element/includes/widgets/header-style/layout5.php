 <div class="news10-overlay"></div>
        <header>
            <!-- news10 Top Bar Start -->
            <div class="news10-top-bar">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-9 col-xl-7">
                            <div class="news10-news-slide news-tech-breaking">
                                <div class="news10-slide-title">
                                    <div class="newss10-slide-arrow">
                                        <div class="newss10-prev-btn" id="breakingnews-prev"><i class="fal fa-chevron-left"></i></div>
                                        <div class="newss10-next-btn" id="breakingnews-next"><i class=" fal fa-chevron-right"></i></div>
                                    </div>
                                    <h6>Trending News : </h6>
                                </div>
                                <div class="news10-techheader-breaking swiper-container">
                                    <div class="swiper-wrapper">
                                        <h6 class="swiper-slide">Bragi Headphone review: finally, wireless earbuds worth buying ...</h6>
                                        <h6 class="swiper-slide">Bragi Headphone review: finally, wireless earbuds worth buying 2 ...</h6>
                                        <h6 class="swiper-slide">Bragi Headphone review: finally, wireless earbuds worth buying 3 ...</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-3">
                            <div class="news10-social-link">
                                <ul>
                                
                                    <li><a href="<?php echo esc_attr($settings['link1']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['icon1'], [ 'aria-hidden' => 'true' ] ); ?></li></a>

                                    <li><a href="<?php echo esc_attr($settings['link2']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['icon2'], [ 'aria-hidden' => 'true' ] ); ?></li>
                                    <li><a href="<?php echo esc_attr($settings['link3']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['icon3'], [ 'aria-hidden' => 'true' ] ); ?></li></a>
                                    <li><a href="<?php echo esc_attr($settings['link4']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['icon4'], [ 'aria-hidden' => 'true' ] ); ?></li></a>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="news10-subscribe">
                                <a href="#">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- news10 Top Bar End -->
            <!-- news10 Manu Bar Start -->
            <div class="news10-manu-bar">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-7 col-lg-2 order-7 order-lg-1">
                            <div class="logo">
                                
                                <a href="<?php echo esc_url(home_url('/'));?>">
                                     <?php echo  get_that_image($settings['icon']); ?>
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-8 order-4 order-lg-2">
                            <nav class="news10-main-manu">
                                <button class="close-btn d-lg-none">
                                    <span></span>
                                    <span></span>
                                </button>
                              <?php
                            echo str_replace(['menu-item-has-children', 'sub-menu'], ['dropdown', 'dropdown-menu'],
                                wp_nav_menu( array(
                                        'container' => false,
                                        'echo' => false,
                                        'menu_id' => 'm-main-menu',
                                        'menu' =>    $main_menu,
                                        'items_wrap' => '<ul>%3$s</ul>',
                                    )
                                ));
                            ?>
                            </nav>
                        </div>
                        <div class="col-5 col-lg-2 order-2 order-lg-5">
                            <ul class="news10-right-btns">
                                <li>
                                    <button class="news10-search-btn">
                                        <span class="icon"><svg viewBox="0 0 511.999 511.999"><path d="M508.874,478.708L360.142,329.976c28.21-34.827,45.191-79.103,45.191-127.309c0-111.75-90.917-202.667-202.667-202.667 S0,90.917,0,202.667s90.917,202.667,202.667,202.667c48.206,0,92.482-16.982,127.309-45.191l148.732,148.732 c4.167,4.165,10.919,4.165,15.086,0l15.081-15.082C513.04,489.627,513.04,482.873,508.874,478.708z M202.667,362.667 c-88.229,0-160-71.771-160-160s71.771-160,160-160s160,71.771,160,160S290.896,362.667,202.667,362.667z"></path></svg></span>
                                    </button>
                                </li>
                                <li class="d-none d-lg-inline-block">
                                    <button type="button" class="news10-h-manu-btn">
                                        <svg viewBox="0 0 20 20"> <circle cx="17.9" cy="2" r="2.1"/> <circle cx="2.1" cy="10" r="2.1"/> <circle cx="10" cy="10" r="2.1"/> <circle cx="17.9" cy="10" r="2.1"/> <circle cx="2.1" cy="18" r="2.1"/> <circle cx="10" cy="18" r="2.1"/> <circle cx="18" cy="18" r="2.1"/> <circle cx="2.1" cy="2" r="2.1"/> <circle cx="10" cy="2" r="2.1"/> </svg>
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
                    'menu' =>    $mobile_menu,
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