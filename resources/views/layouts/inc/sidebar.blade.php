<div class="sidebar" data-background-color="white">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark2">
            <a href="#" class="logo">
                <img src="{{ asset('assets/kai/assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand"
                    class="navbar-brand" height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('dashboard') }}">
                                    <span class="sub-item">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                @if (Auth::user()->usertype == 'administrator')
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#base">
                            <i class="fas fa-desktop"></i>
                            <p>Base Administrator</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('pengguna.index') }}">
                                        <i class="fas fa-user-edit"></i>
                                        <span>Data Users</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('anggota.index') }}">
                                        <i class="fas fa-user-friends"></i>
                                        <span>Data Members</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('level.index') }}">
                                        <i class="fas fa-tasks"></i>
                                        <span>Data Levels</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('jurusan.index') }}">
                                        <i class="fas fa-list-ol"></i>
                                        <span>Data Majors</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('gelombang.index') }}">
                                        <i class="far fa-chart-bar"></i>
                                        <span>Data Wavess</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('buku.index') }}">
                                        <i class="fa fa-book"></i>
                                        <span>Data Books</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-database"></i>
                        <p>Base Transaction</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('peminjam.index') }}">
                                    <i class="fas fa-money-check-alt"></i>
                                    <span>Data Transaction</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#forms">
                        <i class="fa fa-history"></i>
                        <p>Data History</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="forms/forms.html">
                                    <i class="far fa-clock"></i>
                                    <span>Participant History</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

















{{-- <li class="nav-item">
    <a data-bs-toggle="collapse" href="#tables">
        <i class="fas fa-table"></i>
        <p>Tables</p>
        <span class="caret"></span>
    </a>
    <div class="collapse" id="tables">
        <ul class="nav nav-collapse">
            <li>
                <a href="tables/tables.html">
                    <span class="sub-item">Basic Table</span>
                </a>
            </li>
            <li>
                <a href="tables/datatables.html">
                    <span class="sub-item">Datatables</span>
                </a>
            </li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <a data-bs-toggle="collapse" href="#maps">
        <i class="fas fa-map-marker-alt"></i>
        <p>Maps</p>
        <span class="caret"></span>
    </a>
    <div class="collapse" id="maps">
        <ul class="nav nav-collapse">
            <li>
                <a href="maps/googlemaps.html">
                    <span class="sub-item">Google Maps</span>
                </a>
            </li>
            <li>
                <a href="maps/jsvectormap.html">
                    <span class="sub-item">Jsvectormap</span>
                </a>
            </li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <a data-bs-toggle="collapse" href="#charts">
        <i class="far fa-chart-bar"></i>
        <p>Charts</p>
        <span class="caret"></span>
    </a>
    <div class="collapse" id="charts">
        <ul class="nav nav-collapse">
            <li>
                <a href="charts/charts.html">
                    <span class="sub-item">Chart Js</span>
                </a>
            </li>
            <li>
                <a href="charts/sparkline.html">
                    <span class="sub-item">Sparkline</span>
                </a>
            </li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <a href="widgets.html">
        <i class="fas fa-desktop"></i>
        <p>Widgets</p>
        <span class="badge badge-success">4</span>
    </a>
</li>
<li class="nav-item">
    <a data-bs-toggle="collapse" href="#submenu">
        <i class="fas fa-bars"></i>
        <p>Menu Levels</p>
        <span class="caret"></span>
    </a>
    <div class="collapse" id="submenu">
        <ul class="nav nav-collapse">
            <li>
                <a data-bs-toggle="collapse" href="#subnav1">
                    <span class="sub-item">Level 1</span>
                    <span class="caret"></span>
                </a>
                <div class="collapse" id="subnav1">
                    <ul class="nav nav-collapse subnav">
                        <li>
                            <a href="#">
                                <span class="sub-item">Level 2</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sub-item">Level 2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-bs-toggle="collapse" href="#subnav2">
                    <span class="sub-item">Level 1</span>
                    <span class="caret"></span>
                </a>
                <div class="collapse" id="subnav2">
                    <ul class="nav nav-collapse subnav">
                        <li>
                            <a href="#">
                                <span class="sub-item">Level 2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">
                    <span class="sub-item">Level 1</span>
                </a>
            </li>
        </ul>
    </div>
</li> --}}
