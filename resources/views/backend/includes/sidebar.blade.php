<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                @lang('menus.backend.sidebar.general')
            </li>
            <li class="nav-item">
                <a class="nav-link {{active_class(Route::is('admin/dashboard'))}}" href="{{ route('admin.dashboard') }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    @lang('menus.backend.sidebar.dashboard')
                </a>
            </li>

            <li class="nav-item nav-dropdown {{active_class(Route::is('admin/settings*'), 'open')}}">
                <a class="nav-link nav-dropdown-toggle {{active_class(Route::is('admin/settings*'))}}" href="#"><i class="nav-icon fas fa-mail-bulk"></i>Leeds</a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{active_class(Route::is('admin/service-complain'))}}" href="{{ route('admin.leeds.service_complain') }}">Service Complain</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{active_class(Route::is('admin/customer-complain'))}}" href="{{ route('admin.leeds.customer_complain') }}">Customer Complain</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{active_class(Route::is('admin/sales-complain'))}}" href="{{ route('admin.leeds.sales_complain') }}">Sales Complain</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{active_class(Route::is('admin/feedback'))}}" href="{{ route('admin.leeds.feedback') }}">Feedback</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link {{active_class(Route::is('admin/file_manager'))}}" href="">
                    <i class="nav-icon fas fa-folder"></i>
                    File Manager
                </a>
            </li>



            <li class="nav-item nav-dropdown {{active_class(Route::is('admin/products*'), 'open')}}">
                <a class="nav-link nav-dropdown-toggle {{active_class(Route::is('admin/products*'))}}" href="#"><i class="nav-icon fas fa-box"></i>Products</a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{active_class(Route::is('admin/products'))}}" href="{{ route('admin.products.index') }}">Product List</a>
                    </li>

                </ul>
            </li>





            @if ($logged_in_user->isAdmin())
                <li class="nav-title">
                    @lang('menus.backend.sidebar.system')
                </li>

                <li class="nav-item nav-dropdown {{active_class(Route::is('admin/auth*'), 'open')}}">
                    <a class="nav-link nav-dropdown-toggle {{active_class(Route::is('admin/auth*'))}}" href="#">
                        <i class="nav-icon far fa-user"></i>
                        @lang('menus.backend.access.title')

                        @if ($pending_approval > 0)
                            <span class="badge badge-danger">{{ $pending_approval }}</span>
                        @endif
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/auth/user*'))}}" href="{{ route('admin.auth.user.index') }}">
                                @lang('labels.backend.access.users.management')

                                @if ($pending_approval > 0)
                                    <span class="badge badge-danger">{{ $pending_approval }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/auth/role*'))}}" href="{{ route('admin.auth.role.index') }}">
                                @lang('labels.backend.access.roles.management')
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="divider"></li>

                <li class="nav-item nav-dropdown {{active_class(Route::is('admin/log-viewer*'), 'open')}}">
                        <a class="nav-link nav-dropdown-toggle {{active_class(Route::is('admin/log-viewer*'))}}" href="#"><i class="nav-icon fas fa-list"></i> @lang('menus.backend.log-viewer.main')</a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/log-viewer'))}}" href="{{ route('log-viewer::dashboard') }}">@lang('menus.backend.log-viewer.dashboard')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/log-viewer/logs*'))}}" href="{{ route('log-viewer::logs.list') }}">
                                @lang('menus.backend.log-viewer.logs')
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{active_class(Route::is('admin/blog'))}}" href="{{ route('admin.blog') }}"><i class="nav-icon fas fa-book"></i>Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{active_class(Route::is('admin/pages'))}}" href="{{ route('admin.pages') }}"><i class="nav-icon fas fa-file"></i>Pages </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{active_class(Route::is('admin/partnerships'))}}" href="{{ route('admin.partnerships') }}"><i class="nav-icon fas fa-hand-holding"></i>Partnerships</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{active_class(Route::is('admin/cloud-service'))}}" href="{{ route('admin.cloud_service') }}"><i class="nav-icon fas fa-cloud"></i>Cloud Service</a>
                </li>



                <li class="nav-item nav-dropdown {{active_class(Route::is('admin/settings*'), 'open')}}">
                    <a class="nav-link nav-dropdown-toggle {{active_class(Route::is('admin/settings*'))}}" href="#"><i class="nav-icon fas fa-cogs"></i>Xelenic Settings</a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/settings'))}}" href="{{ route('admin.settings') }}">Homepage Settings</a>
                        </li>
                    </ul>
                </li>



            @endif

        </ul>
    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><!--sidebar-->
