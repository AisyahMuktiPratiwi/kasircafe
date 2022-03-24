<aside class="main-sidebar  elevation-4" style="background-color:rgb(160, 135, 135);color:yellow">
    <!-- Brand Logo -->
    <a href="/">
        <img src="{{asset('admlte/img/logo.png')}}" alt="AdminLTE Logo" width="100px">
        <span class="brand-text font-weight-light" style="color:gold;font-family: 'Sail', cursive;font-size:25px">Cafe
            Ngopi</span>

    </a>
    <hr>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admlte/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="brand-text font-weight-light" style="color:gold;">{{Auth::user()->name}}</a>
            </div>

        </div>
        <hr>
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search"
                    style="background-color: rgb(179, 152, 152);border:none;">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw" style="color: gold;"></i>
                    </button>
                </div>
            </div>

        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('dashboard.index')}}" class="nav-link brand-text font-weight-light"
                        style="color:gold">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                @if(Auth::user()->level =='Manager')
                <li class="nav-item has-treeview">
                    <a href="{{route('product.index')}}" class="nav-link brand-text font-weight-light"
                        style="color:gold"><i class="nav-icon fas fa-mug-hot"></i>

                        <p>Menu</p>
                    </a>

                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('product.index')}}" class="nav-link brand-text font-weight-light"
                        style="color:gold">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>Laporan</p>
                    </a>

                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('activitylog.index')}}" class="nav-link brand-text font-weight-light"
                        style="color:gold">
                        <i class="nav-icon fas fa-user-edit"></i>
                        <p>Log </p>
                    </a>

                </li>
                @endif
                @if(Auth::user()->level == 'Kasir')
                <li class="nav-item has-treeview">
                    <a href="{{route('cart.index')}}" class="nav-link brand-text font-weight-light" style="color:gold">
                        <i class="nav-icon fas fa-cash-register"></i>
                        <p>Order</p>
                    </a>


                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('laporan.index')}}" class="nav-link brand-text font-weight-light"
                        style="color:gold">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>Laporan</p>
                    </a>

                </li>
                @endif
                @if(Auth::user()->level == 'Admin')
                <li class="nav-item has-treeview">
                    <a href="{{route('user.index')}}" class="nav-link brand-text font-weight-light" style="color:gold">
                        <i class="nav-icon fas fa-user-edit"></i>
                        <p>Pengguna</p>
                    </a>

                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('activitylog.index')}}" class="nav-link brand-text font-weight-light"
                        style="color:gold">
                        <i class="nav-icon fas fa-user-secret"></i>
                        <p>Log</p>
                    </a>

                </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!--
 /.sideb
ar -->

</aside>