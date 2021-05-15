<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.index')}}" class="brand-link">
        <img src="{{asset('back')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">E-Shopping</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('back')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Azad Eyvazov</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link @if(Request::segment(2) == 'panel') active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Panel
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link @if(Request::segment(2) == 'general-settings') active @endif">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Parametrlər
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.generalsettings')}}" class="nav-link @if(Request::segment(2) == 'general-settings') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ümumi Parametrlər</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sosial Şəbəkələr</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>SMTP Parametrləri</p>
                            </a>
                        </li>
                    </ul>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
