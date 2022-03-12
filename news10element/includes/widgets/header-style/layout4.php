    <!-- header start  -->
    <div class="news10-overlay"></div>
    <header class="news10-news-fashion-header">
        <div class="container">
            <div class="news10-news-fashion-header-wraper">
                <div class="news10-header-logo">
                    <a class="header-logo" href="<?php echo esc_url(home_url('/'));?>">
                        <?php echo  get_that_image($settings['icon']); ?>
                    </a>
                    <a class="nav-fix-logo" href="<?php echo esc_url(home_url('/'));?>">
                        <?php echo  get_that_image($settings['icon']); ?>
                    </a>
                </div>
                <div class="news10-main-menu-wrapper ">
                    <div class="news10-main-menu desktop-menu">
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
                    </div>
                    <div class="news10-nav-right">
                        <div class="search-btn search-bar">
                            <i class="far fa-search"></i>
                        </div>
                        <!-- <div class="news10-nav-open"><i class="flaticon-menu"></i></div> -->
                        <div class="news10-nav-open btn1">
                            <div class="icon-left"></div>
                            <div class="icon-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- mobile manu  -->
    <div class="news10-main-menu mobile-menu fashion-news-mobile-menu">
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
    <!-- header end -->
    <!-- search news10l start  -->
    <div class="news10-search-news10l news10-travel-search-news10l">
        <div class="container">
            <form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="news10-search-form">
                <input type="search" class="form-control" placeholder="Search..." autocomplete="off" value="<?php echo get_search_query(); ?>" name="s">
                <button class="theme-btn fashion-bg"><?php esc_html_e('Search','news10'); ?></button>
            </form>
        </div>
    </div>
    <!-- search news10l end  -->