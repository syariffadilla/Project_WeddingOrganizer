<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <!-- SVG Logo Here -->
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">WeddingBo</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    @if (Auth::user()->role == 2)
        <!-- Menu untuk pengguna dengan role 2 -->
        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
                <a href="{{ route('dashboardUser') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>

            <!-- Halaman Utama -->
            <li class="menu-item">
                <a href="{{route('utama')}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Halaman Utama</div>
                </a>
            </li>



            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Booking</span></li>

            <!-- Transaksi -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bi bi-clipboard-data"></i>
                    <div data-i18n="User interface">Transaksi</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('TransaksiUser') }}" class="menu-link">
                            <div data-i18n="Accordion">Data Transaksi All</div>
                        </a>
                    </li>
                </ul>
            </li>


        </ul>
    @else
        <!-- Menu untuk role lainnya (misalnya role 1) -->
        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
                <a href="{{ route('admin.dashboard') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>

            <!-- Halaman Utama -->
            <li class="menu-item">
                <a href="" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Halaman Utama</div>
                </a>
            </li>

            <li class="menu-header small text-uppercase"><span class="menu-header-text">PAKET</span></li>

            <!-- Paket -->
            <li class="menu-item {{ Route::is('admin.dashboard.paket') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard.paket') }}" class="menu-link">
                    <i class="menu-icon tf-icons bi bi-box-seam"></i>
                    <div data-i18n="Boxicons">Paket</div>
                </a>
            </li>

            <!-- Vendor -->
            <li class="menu-item {{ Route::is('admin.vendor') ? 'active' : '' }}">
                <a href="{{ route('admin.vendor') }}" class="menu-link">
                    <i class="menu-icon tf-icons bi bi-list-columns-reverse"></i>
                    <div data-i18n="Boxicons">Vendor</div>
                </a>
            </li>

            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">PENJUALAN</span></li>

            <!-- Transaksi -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bi bi-clipboard-data"></i>
                    <div data-i18n="User interface">Transaksi</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('admin.transaksi') }}" class="menu-link">
                            <div data-i18n="Accordion">Data Transaksi All</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.transaksi.1') }}" class="menu-link">
                            <div data-i18n="Alerts">Data Belum Konfirmasi</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.transaksi.2') }}" class="menu-link">
                            <div data-i18n="Alerts">Data Boking Konfirmasi</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.transaksi.3') }}" class="menu-link">
                            <div data-i18n="Alerts">Data Boking Ditolak</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">PENGGUNA</span></li>
            <!-- Pelanggan -->
            <li class="menu-item">
                <a href="{{ route('admin.pengguna.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bi bi-people-fill"></i>
                    <div data-i18n="Boxicons">Pelanggan</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('admin.team.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bi bi-people-fill"></i>
                    <div data-i18n="Boxicons">Team</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('admin.pengguna.index2') }}" class="menu-link">
                    <i class="menu-icon tf-icons bi bi-person-circle"></i>
                    <div data-i18n="Boxicons">Admin</div>
                </a>
            </li>
        </ul>
    @endif
</aside>
