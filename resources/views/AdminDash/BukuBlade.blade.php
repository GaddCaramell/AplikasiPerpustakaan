<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Perpustakaan</title>
    <link rel="shortcut icon" type="image/png" href="/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="/assets/css/styles.min.css" />
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
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('AddBuku') }}">
                            <button class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah buku</button>
                        </a>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Buku ID</th>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Stok</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Buku as $bku)
                                    <tr>
                                        <td>{{ $bku->BukuID }}</td>
                                        <td>{{ $bku->Judul }}</td>
                                        <td>{{ $bku->Penulis }}</td>
                                        <td>{{ $bku->Penerbit }}</td>
                                        <td>{{ $bku->TahunTerbit }}</td>
                                        <td>{{ $bku->Stok }}</td>

                                        <td>
                                            <button type="submit" class="btn btn-secondary"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <a href="{{ url('hapusBuku/' . $bku->BukuID) }}"><button type="submit"
                                                    class="btn btn-danger"><i class="bi bi-trash"></i></button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
