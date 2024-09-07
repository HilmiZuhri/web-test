

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Admin Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard-all/ckeditor.js"></script>

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Kelola Konten Blog</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu Utama</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                            Pengguna
                        </a>
                        <a class="nav-link" href="kategori.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-check"></i></div>
                            Kategori Artikel
                        </a>
                        <a class="nav-link" href="artikel.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-file-lines"></i></div>
                            Artikel
                        </a>
                        <a class="nav-link" href="logout.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    admin                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Selamat Datang</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Silahkan Kelola Artikel</li>
                    </ol>


                    <div class="card mb-4">
                        <div class="card-header">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tulisArtikel">Tulis Artikel</button>
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Penulis</th>
                                        <th>Tanggal</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                                                                <tr>
                                                <td>1</td>
                                                <td>Budi</td>
                                                <td>Senin, 05 Juni 2023</td>
                                                <td>Menemukan Pesona Alam yang Menakjubkan di Coban Rais</td>
                                                <td>Air Terjun</td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalUpdateArtikel">
                                                        Update
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDeleteArtikel17">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- The Modal Delete-->
                                            <div class="modal fade" id="modalDeleteArtikel17">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Artikel</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <form method="post">
                                                                Apakah artikel berjudul "Menemukan Pesona Alam yang Menakjubkan di Coban Rais" akan dihapus?
                                                                <input type="hidden" name="idartikeldelete" value="17" required>
                                                                <div class="mb-3 mt-3">
                                                                    <button type="submit" name="tombolHapusArtikel" class="btn btn-primary">Hapus</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                <tr>
                                                <td>2</td>
                                                <td>Budi</td>
                                                <td>Rabu, 31 Mei 2023</td>
                                                <td>Menyegarkan Jiwa di Coban Talun: Tempat Rekreasi yang Memikat</td>
                                                <td>Air Terjun</td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalUpdateArtikel">
                                                        Update
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDeleteArtikel12">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- The Modal Delete-->
                                            <div class="modal fade" id="modalDeleteArtikel12">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Artikel</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <form method="post">
                                                                Apakah artikel berjudul "Menyegarkan Jiwa di Coban Talun: Tempat Rekreasi yang Memikat" akan dihapus?
                                                                <input type="hidden" name="idartikeldelete" value="12" required>
                                                                <div class="mb-3 mt-3">
                                                                    <button type="submit" name="tombolHapusArtikel" class="btn btn-primary">Hapus</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                <tr>
                                                <td>3</td>
                                                <td>Budi</td>
                                                <td>Senin, 29 Mei 2023</td>
                                                <td>Menemukan Keseruan di Tempat Rekreasi Batu Secret Zoo</td>
                                                <td>Edukasi</td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalUpdateArtikel">
                                                        Update
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDeleteArtikel9">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- The Modal Delete-->
                                            <div class="modal fade" id="modalDeleteArtikel9">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Artikel</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <form method="post">
                                                                Apakah artikel berjudul "Menemukan Keseruan di Tempat Rekreasi Batu Secret Zoo" akan dihapus?
                                                                <input type="hidden" name="idartikeldelete" value="9" required>
                                                                <div class="mb-3 mt-3">
                                                                    <button type="submit" name="tombolHapusArtikel" class="btn btn-primary">Hapus</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                <tr>
                                                <td>4</td>
                                                <td>Iwan</td>
                                                <td>Senin, 29 Mei 2023</td>
                                                <td>Selamat datang di Museum Angkut Malang: Sebuah Perjalanan Menakjubkan Melalui Sejarah dan Kecanggihan Otomotif</td>
                                                <td>Edukasi</td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalUpdateArtikel">
                                                        Update
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDeleteArtikel8">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- The Modal Delete-->
                                            <div class="modal fade" id="modalDeleteArtikel8">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Artikel</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <form method="post">
                                                                Apakah artikel berjudul "Selamat datang di Museum Angkut Malang: Sebuah Perjalanan Menakjubkan Melalui Sejarah dan Kecanggihan Otomotif" akan dihapus?
                                                                <input type="hidden" name="idartikeldelete" value="8" required>
                                                                <div class="mb-3 mt-3">
                                                                    <button type="submit" name="tombolHapusArtikel" class="btn btn-primary">Hapus</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                <tr>
                                                <td>5</td>
                                                <td>Iwan</td>
                                                <td>Senin, 29 Mei 2023</td>
                                                <td>Selamat datang di Pantai Ngliyep: Oase Pantai yang Memikat di Malang</td>
                                                <td>Pantai</td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalUpdateArtikel">
                                                        Update
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDeleteArtikel7">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- The Modal Delete-->
                                            <div class="modal fade" id="modalDeleteArtikel7">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Artikel</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <form method="post">
                                                                Apakah artikel berjudul "Selamat datang di Pantai Ngliyep: Oase Pantai yang Memikat di Malang" akan dihapus?
                                                                <input type="hidden" name="idartikeldelete" value="7" required>
                                                                <div class="mb-3 mt-3">
                                                                    <button type="submit" name="tombolHapusArtikel" class="btn btn-primary">Hapus</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                <tr>
                                                <td>6</td>
                                                <td>Iwan</td>
                                                <td>Senin, 29 Mei 2023</td>
                                                <td>Pantai Balekambang Malang: Surga Pantai Tropis yang Menawan</td>
                                                <td>Pantai</td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalUpdateArtikel">
                                                        Update
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDeleteArtikel6">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- The Modal Delete-->
                                            <div class="modal fade" id="modalDeleteArtikel6">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Artikel</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <form method="post">
                                                                Apakah artikel berjudul "Pantai Balekambang Malang: Surga Pantai Tropis yang Menawan" akan dihapus?
                                                                <input type="hidden" name="idartikeldelete" value="6" required>
                                                                <div class="mb-3 mt-3">
                                                                    <button type="submit" name="tombolHapusArtikel" class="btn btn-primary">Hapus</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                <tr>
                                                <td>7</td>
                                                <td>Iwan</td>
                                                <td>Senin, 29 Mei 2023</td>
                                                <td>Jelajahi Keajaiban DinoPark Batu Malang: Petualangan Penuh Kenangan</td>
                                                <td>Edukasi</td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalUpdateArtikel">
                                                        Update
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDeleteArtikel5">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- The Modal Delete-->
                                            <div class="modal fade" id="modalDeleteArtikel5">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Artikel</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <form method="post">
                                                                Apakah artikel berjudul "Jelajahi Keajaiban DinoPark Batu Malang: Petualangan Penuh Kenangan" akan dihapus?
                                                                <input type="hidden" name="idartikeldelete" value="5" required>
                                                                <div class="mb-3 mt-3">
                                                                    <button type="submit" name="tombolHapusArtikel" class="btn btn-primary">Hapus</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                <tr>
                                                <td>8</td>
                                                <td>Budi</td>
                                                <td>Senin, 29 Mei 2023</td>
                                                <td>Mengunjungi Surga Tersembunyi: Keindahan Air Terjun Coban Rondo</td>
                                                <td>Air Terjun</td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalUpdateArtikel">
                                                        Update
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDeleteArtikel4">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- The Modal Delete-->
                                            <div class="modal fade" id="modalDeleteArtikel4">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Artikel</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <form method="post">
                                                                Apakah artikel berjudul "Mengunjungi Surga Tersembunyi: Keindahan Air Terjun Coban Rondo" akan dihapus?
                                                                <input type="hidden" name="idartikeldelete" value="4" required>
                                                                <div class="mb-3 mt-3">
                                                                    <button type="submit" name="tombolHapusArtikel" class="btn btn-primary">Hapus</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                <tr>
                                                <td>9</td>
                                                <td>Budi</td>
                                                <td>Senin, 29 Mei 2023</td>
                                                <td>Merasakan Serunya Petualangan di Eco Green Park: Menjelajahi Alam dan Belajar tentang Konservasi</td>
                                                <td>Edukasi</td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalUpdateArtikel">
                                                        Update
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDeleteArtikel3">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- The Modal Delete-->
                                            <div class="modal fade" id="modalDeleteArtikel3">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Artikel</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <form method="post">
                                                                Apakah artikel berjudul "Merasakan Serunya Petualangan di Eco Green Park: Menjelajahi Alam dan Belajar tentang Konservasi" akan dihapus?
                                                                <input type="hidden" name="idartikeldelete" value="3" required>
                                                                <div class="mb-3 mt-3">
                                                                    <button type="submit" name="tombolHapusArtikel" class="btn btn-primary">Hapus</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

    <!-- The Modal -->
    <div class="modal fade modal-lg" id="tulisArtikel">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Tulis Artikel</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                                        <form method="post" enctype="multipart/form-data">
                        <div class="mb-3 mt-3">
                            <label for="penulis" class="form-label">Penulis:</label>
                            <input type="text" class="form-control" id="penulis" value="admin" name="penulis" readonly>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="tanggal" class="form-label">Tanggal:</label>
                            <input type="text" class="form-control" id="tanggal" value="Selasa, 06 Juni 2023" name="tanggal" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul:</label>
                            <input type="text" class="form-control" id="judul" placeholder="Judul Artikel" name="judul">
                        </div>
                        <div class="mb-3">
                            <label for="sel1" class="form-label">Kategori:</label>

                            <select class="form-select" id="kategori" name="kategori">
                                                                        <option value="Edukasi">Edukasi</option>
                                                                        <option value="Pantai">Pantai</option>
                                                                        <option value="Air Terjun">Air Terjun</option>
                                                                        <option value="Pegunungan">Pegunungan</option>
                                                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="comment">Isi Artikel:</label>
                            <textarea class="form-control" rows="15" id="isiartikel" name="isiartikel"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar:</label>
                            <input class="form-control" type="file" id="gambar" name="gambar">
                        </div>
                        <button type="submit" name="tombolSimpanArtikel" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace('isiartikel', {
            width: '100%',
            height: 500,
            removeButtons: 'PasteFromWord'
        });
    </script>
</body>

</html>