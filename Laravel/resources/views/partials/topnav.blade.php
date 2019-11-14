<header id="topnav">
    <!-- Topbar Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
                @if (Auth::check())
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" role="button" href="{{ route('quan-tri-vien.trang-ca-nhan') }}">
                            <span class="pro-user-name ml-1">
                                {{ Auth::user()->ho_ten }}
                            </span>
                        </a>
                    </li>
                    <li class="dropdown notification-list">
                        <a href="{{ route('quan-tri-vien.dang-xuat') }}" class="nav-link dropdown-toggle nav-user mr-0 waves-effect">
                            Đăng xuất
                        </a>
                    </li>
                @else
                    <li class="dropdown notification-list">
                        <a href="{{ route('quan-tri-vien.dang-nhap') }}" class="nav-link dropdown-toggle nav-user mr-0 waves-effect">
                            Đăng nhập
                        </a>
                    </li>
                @endif
            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="{{ route('layout') }}" class="logo text-center">
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" height="52">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="52">
                    </span>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end Topbar -->

    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    @if (Auth::check())
                    <li class="has-submenu">
                            <a href="{{ route('quan-tri-vien.danh-sach') }}">
                                Quản trị viên
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ route('linh-vuc.danh-sach') }}">
                                Lĩnh vực
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ route('cau-hoi.danh-sach') }}">
                                Câu hỏi
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ route('goi-credit.danh-sach') }}">
                                Gói credit
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ route('nguoi-choi.danh-sach') }}">Người chơi</a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ route('luot-choi.danh-sach') }}">Lượt chơi</a>
                                </li>
                                <li>
                                    <a href="{{ route('chi-tiet-luot-choi.danh-sach') }}">Chi tiết lượt chơi</a>
                                </li>
                                <li>
                                    <a href="{{ route('lich-su-mua-credit.danh-sach') }}">Lịch sử mua credit</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#">Cấu hình<div class="arrow-down"></div></a>
                            <ul class="submenu">
                                <li>
                                    <a href="#">Cấu hình app</a>
                                </li>
                                <li>
                                    <a href="#">Cấu hình trợ giúp</a>
                                </li>
                                <li>
                                    <a href="{{ route('cau-hinh-diem-cau-hoi.danh-sach') }}">Cấu hình điểm câu hỏi</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
                <!-- End navigation menu -->
                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->

</header>