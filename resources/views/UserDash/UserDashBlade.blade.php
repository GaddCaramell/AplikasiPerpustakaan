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
        @include('Template.Usernavbar')
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
                <!-- Carousel Start -->

                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner mb-3">
                        <div class="carousel-item active">
                            <img src="\assets\images\CarouselPic\Floraa PC.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Buku Tentang Flora</h5>
                                <p>Buku yang menceritakan dunia Flora</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="\assets\images\CarouselPic\One piece.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>One Piece</h5>
                                <p>ONE PIECE IS REAL!!!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="\assets\images\CarouselPic\blek kloper.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Black Clover</h5>
                                <p>5 CLOVER GRIAMORE</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- Carousel END -->




                <div class="card">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <th>Judul Buku</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Stok Tersisa</th>
                                </thead>
                                <tbody>
                                    @foreach ($Buku as $b)
                                        <tr>
                                            <td>{{ $b->Judul }}</td>
                                            <td>{{ $b->Penulis }}</td>
                                            <td>{{ $b->Penerbit }}</td>
                                            <td>{{ $b->TahunTerbit }}</td>
                                            <td>{{ $b->Stok }}</td>
                                            <td>
                                                <button type="submit" class="btn btn-primary Pinjam">Pinjam</button>
                                                <button type="submit" class="btn btn-icon"><i
                                                        class="bi bi-bookmark"></i></button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $Buku->onEachSide(5)->links() }}
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
