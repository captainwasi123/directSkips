<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">MANAGEMENT</li>
                        <li> 
                            <a class="waves-effect" href="{{URL::to('/admin')}}" aria-expanded="false">
                                <i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li> 
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-bullseye"></i>
                                <span class="hide-menu">Order Management</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{URL::to('/admin/orders/orders')}}">Orders</a></li>
                                <li><a href="{{URL::to('/admin/orders/booked')}}">Booked</a></li>
                                <li><a href="{{URL::to('/admin/orders/delivered')}}">Delivered</a></li>
                                <li><a href="{{URL::to('/admin/orders/collected')}}">Collected</a></li>
                                <li><a href="{{URL::to('/admin/orders/archive')}}">Archive</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">SETTINGs</li>
                        <li> 
                            <a class="waves-effect" href="{{URL::to('/admin/counties')}}" aria-expanded="false">
                                <i class="mdi mdi-map-marker"></i>
                                <span class="hide-menu">Counties</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect" href="{{URL::to('/admin/settings/type')}}" aria-expanded="false">
                                <i class="mdi mdi-grid"></i>
                                <span class="hide-menu">Service Type</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect" href="{{URL::to('/admin/settings/VAT')}}" aria-expanded="false">
                                <i class="mdi mdi-file"></i>
                                <span class="hide-menu">VAT Setup</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect" href="{{URL::to('/admin/settings/holiday')}}" aria-expanded="false">
                                <i class="fa fa-bullhorn"></i>
                                <span class="hide-menu">Holiday</span>
                            </a>
                        </li>
                        <li> 
                            <a class="waves-effect" href="{{URL::to('/admin/settings/profile')}}" aria-expanded="false">
                                <i class="fa fa-user"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>