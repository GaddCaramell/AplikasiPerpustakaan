<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Perpustakaan</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<style>
    .Judul {
        font-family: 'Lucida Grande';
        padding-top: 10px;
        padding-left: 10px;

    }

    .icon {
        width: 50px;
        background-color: white;
    }

    .iconBuku {
        width: 70px;
        opacity: 40%;

    }
</style>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('Template.navbar')
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">

                        </li>
                        <li class="nav-item">

                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/images/profile/user-1.jpg" alt="" width="35"
                                        height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="./authentication-login.html"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body" style="background-color: turquoise">
                                <div class="row justify-content-start">
                                    <div class="col-6">
                                        <h4>{{ $JumlahBuku }}</h4>
                                        <h5>Buku</h5>
                                    </div>
                                    <div class="col-4">
                                        <img src="/assets/images/IconCardDashboard/book-svgrepo-com.svg"
                                            class="iconBuku">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body" style="background-color: lime">
                                <div class="row justify-content-start">
                                    <div class="col-6">
                                        <h4>{{ $JumlahPengguna }}</h4>
                                        <h5>Member</h5>
                                    </div>
                                    <div class="col-5">
                                        <img src="/assets/images/IconCardDashboard/person-team-svgrepo-com.svg"
                                            class="iconBuku">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body" style="background-color: lime">
                                <div class="row justify-content-start">
                                    <div class="col-6">
                                        <h4>{{ $BukuDipinjam }}</h4>
                                        <h5>Dipinjam</h5>
                                    </div>
                                    <div class="col-5">
                                        <img src="/assets/images/IconCardDashboard/bookmarklet-svgrepo-com.svg"
                                            class="iconBuku">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body" style="background-color: lime">
                                <div class="row justify-content-start">
                                    <div class="col-6">
                                        <h4>{{ $Ulasan }}</h4>
                                        <h5>Ulasan</h5>
                                    </div>
                                    <div class="col-5">
                                        <img src="/assets/images/IconCardDashboard/book-education-reading-school-office-svgrepo-com.svg"
                                            class="iconBuku">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../assets/js/dashboard.js"></script>
</body>

</html>
