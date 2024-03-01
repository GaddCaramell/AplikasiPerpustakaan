<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <img src="../assets/images/logos/bukungestack.svg" class="icon" />
            <h4 class="Judul">Perpustakaan Berjalan</h4>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('Dashboard') }}">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('BukuSaya') }}">
                        <span>
                            <i class="ti ti-bookmark"></i>
                        </span>
                        <span class="hide-menu">Buku Saya</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('Histori') }}">
                        <span>
                            <i class="ti ti-book"></i>
                        </span>
                        <span class="hide-menu">Histori Peminjaman</span>
                    </a>
                </li>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->
