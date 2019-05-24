

        <!-- START PAGE CONTAINER -->
        <div class="page-container page-navigation-top-fixed">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar page-sidebar-fixed scroll mCustomScrollbar _mCS_1 mCS-autoHide">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                      
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="{{ URL::to('/back-end') }}/img/logo.png" alt=""/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="{{ URL::to('/back-end') }}/img/logo.png" alt="John Doe" style="background-color: #fff;width: 100%;border-radius: 4%;"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">User Name</div>
                                <div class="profile-data-title">ADMIN</div>
                            </div>
                           
                        </div>                                                                        
                    </li>

                    <li class="active">
                        <a href="{{route('admin_dashboard')}}" class="sidebar_menu_item {{(Route::current()->getName() == 'admin_dashboard') ? 'sidebar_link_highlight' : null}} "><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>

                    <li class="active">
                        <a href="{{route('admin_local-reg')}}" class="sidebar_menu_item {{(Route::current()->getName() == 'admin_local-reg') ? 'sidebar_link_highlight' : null}} "><span class="fa fa-desktop"></span> <span class="xn-text">Local registration</span></a>
                    </li>

                    <li class="active">
                        <a href="{{route('admin_foreign-reg')}}" class="sidebar_menu_item {{(Route::current()->getName() == 'admin_foreign-reg') ? 'sidebar_link_highlight' : null}} "><span class="fa fa-desktop"></span> <span class="xn-text">Foreign registration</span></a>
                    </li>

                    <li class="active">
                        <a href="{{route('admin_tourist-reg')}}" class="sidebar_menu_item {{(Route::current()->getName() == 'admin_tourist-reg') ? 'sidebar_link_highlight' : null}} "><span class="fa fa-desktop"></span> <span class="xn-text">Tourist registration</span></a>
                    </li>

                    <li class="active">
                        <a href="{{route('admin_package-reg-list')}}" class="sidebar_menu_item {{(Route::current()->getName() == 'admin_package-reg-list') ? 'sidebar_link_highlight' : null}} "><span class="fa fa-desktop"></span> <span class="xn-text">Package registration</span></a>
                    </li>




                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
