<nav class="main-header navbar navbar-expand" style="background-color: rgb(160, 135, 135);">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"
                    style="color:gold"></i></a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" style=" color:gold">
                {{Auth::user()->name}} <i class="fas fa-caret-down"></i>
            </a>
            <div class="dropdown-menu  dropdown-menu-right" style="color:white;background-color:rgb(160, 135, 135)">


                <div class="dropdown-divider"></div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="submit" style="color:gold;background-color:rgb(160, 135, 135);border:none">
                        <i class="fas fa-sign-out-alt mr-2"></i> Log Out
                    </button>
                </form>
            </div>
        </li>
    </ul>
</nav>
