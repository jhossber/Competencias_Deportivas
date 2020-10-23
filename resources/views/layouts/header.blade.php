<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle">
                    <i class="fa fa-bars">
                    </i>
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a aria-expanded="false" class="user-profile dropdown-toggle" data-toggle="dropdown" href="javascript:;">
                        <img alt="" src="../../profile/default.png">
                        Nombre de Users
                        <span class=" fa fa-angle-down">
                        </span>
                    </img>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li>
                        <a href="javascript:;">
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="event.preventDefault();
                        document.getElementById('logout').submit();">
                        <i class="fa fa-sign-out pull-right">
                        </i>
                        Cerrar Sesión
                    </a>
                </li>
                <form action="#" id="logout" method="post">
                    @csrf
                </form>
            </ul>
        </li>
    </ul>
</nav>
</div>
</div>
