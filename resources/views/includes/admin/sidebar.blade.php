<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('admin.navbar') }}" class="nav-link">
                    <i class="nav-icon fas fa-bars"></i>
                    <p>
                        NavBar
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.news') }}" class="nav-link">
                    <i class="nav-icon fas fa-newspaper"></i>
                    <p>
                        News
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.slider') }}" class="nav-link">
                    <i class="nav-icon fas fa-sliders-h"></i>
                    <p>
                        Slider
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
