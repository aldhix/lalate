<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!-- Nav Item -->
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
                Fullname
                <i class="fas fa-caret-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <i class="fas fa-user-circle mr-2"></i> My Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" onclick="event.preventDefault();document.getElementById('form-logout').submit()"
                    class="dropdown-item">
                    <i class="fas fa-sign-out-alt mr-2"></i> Log Out
                </a>
                <form id="form-logout" method="post" action="#">
                    @csrf
                </form>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>