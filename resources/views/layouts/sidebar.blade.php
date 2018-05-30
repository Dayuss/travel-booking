        
    <div class="sidebar">
        <div class="menu-control toggle-sidebar">
            <a class="navbar-brand" href="#"><i class="fa fa-bar-chart"></i> Travel</a>
            <i class="fa fa-bars navicon"></i>
        </div>
        <ul class="menu">
                        <li class="submenu">
                <a href="{{ url('home') }}">
                    <div>
                        <i class="menu-icon fa fa-th-large"></i>
                        <span class="menu-title">Dashboard</span>
                    </div>
                </a>
            </li>
            @if(auth()->user()->isAdmin == 1)
            <li class="submenu">
                <a href="{{ url('lokasi') }}">
                    <div>
                        <i class="menu-icon fa fa-tags"></i>
                        <span class="menu-title">Lokasi</span>
                    </div>
                </a>
            </li>
            <li class="submenu">
                <a href="{{ url('guide') }}">
                    <div>
                        <i class="menu-icon fa fa-users"></i>
                        <span class="menu-title">Guide</span>
                    </div>
                </a>
            </li>
            @endif
            <li class="submenu">
                <a href="{{ url('booking') }}">
                    <div>
                        <i class="menu-icon fa fa-file-text-o"></i>
                        <span class="menu-title">Booking</span>
                    </div>
                </a>
            </li>
            <li class="submenu">
                <a href="{{ url('listbooking') }}">
                    <div>
                        <i class="menu-icon fa fa-newspaper-o"></i>
                        <span class="menu-title">List Booking</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>