

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
                        admin                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Selamat Datang</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Silahkan Kelola Kategori</li>
                        </ol>
                        
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <button type="button" 
                                class="btn btn-primary"
                                data-bs-toggle="modal" 
                                data-bs-target="#modalTambahKategori">
                                Tambah Kategori
                                </button>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                                                                <tr>
                                            <td>1</td>
                                            <td>Edukasi</td>
                                            <td>Artikel yang membahas tempat wisata edukasi.</td>
                                            <td>
                                                <button type="button" class="btn btn-warning"
                                                data-bs-toggle="modal" 
                                                data-bs-target="#modalUpdateKategori2">
                                                Update
                                                </button>
                                                <button type="button" 
                                                class="btn btn-danger" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#modalDeleteKategori2">
                                                Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- The Modal Delete-->
                                        <div class="modal fade" id="modalDeleteKategori2">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete Kategori</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form method="post">
                                                    Apakah kategori Edukasi akan dihapus? 
                                                    <input type="hidden"  name="idkategoridelete" value="2" required>
                                                    <div class="mb-3 mt-3">
                                                    <button type="submit" name="tombolHapusKategori" class="btn btn-primary">Hapus</button>
                                                    </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                         <!-- The Modal Update-->
                                        <div class="modal fade" id="modalUpdateKategori2">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Update Kategori</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form method="post" class="needs-validation">
                                                    <div class="mb-3 mt-3">
                                                    <label for="namakategori">Nama Kategori</label>
                                                    <input type="text" class="form-control" id="namaupdatekategori" value="Edukasi" name="namaupdatekategori" required>
                                                    <input type="hidden" class="form-control" id="idupdatekategori" value="2" name="idupdatekategori" required>
                                                    </div>
                                                    <div class="mb-3 mt-3">
                                                    <label for="keterangan">Keterangan:</label>
                                                    <textarea class="form-control" rows="5" id="keteranganupdatekategori" name="keteranganupdatekategori" required>Artikel yang membahas tempat wisata edukasi.</textarea>
                                                    </div>
                                                    <button type="submit" name="tombolUpdateKategori" class="btn btn-primary">Update</button>
                                                </form>
                                            </div>


                                            </div>
                                        </div>
                                        </div>
                                                                                <tr>
                                            <td>2</td>
                                            <td>Pantai</td>
                                            <td>Artikel yang membahas tempat wisata pantai.</td>
                                            <td>
                                                <button type="button" class="btn btn-warning"
                                                data-bs-toggle="modal" 
                                                data-bs-target="#modalUpdateKategori3">
                                                Update
                                                </button>
                                                <button type="button" 
                                                class="btn btn-danger" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#modalDeleteKategori3">
                                                Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- The Modal Delete-->
                                        <div class="modal fade" id="modalDeleteKategori3">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete Kategori</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form method="post">
                                                    Apakah kategori Pantai akan dihapus? 
                                                    <input type="hidden"  name="idkategoridelete" value="3" required>
                                                    <div class="mb-3 mt-3">
                                                    <button type="submit" name="tombolHapusKategori" class="btn btn-primary">Hapus</button>
                                                    </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                         <!-- The Modal Update-->
                                        <div class="modal fade" id="modalUpdateKategori3">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Update Kategori</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form method="post" class="needs-validation">
                                                    <div class="mb-3 mt-3">
                                                    <label for="namakategori">Nama Kategori</label>
                                                    <input type="text" class="form-control" id="namaupdatekategori" value="Pantai" name="namaupdatekategori" required>
                                                    <input type="hidden" class="form-control" id="idupdatekategori" value="3" name="idupdatekategori" required>
                                                    </div>
                                                    <div class="mb-3 mt-3">
                                                    <label for="keterangan">Keterangan:</label>
                                                    <textarea class="form-control" rows="5" id="keteranganupdatekategori" name="keteranganupdatekategori" required>Artikel yang membahas tempat wisata pantai.</textarea>
                                                    </div>
                                                    <button type="submit" name="tombolUpdateKategori" class="btn btn-primary">Update</button>
                                                </form>
                                            </div>


                                            </div>
                                        </div>
                                        </div>
                                                                                <tr>
                                            <td>3</td>
                                            <td>Air Terjun</td>
                                            <td>Artikel yang membahas tentang tempat wisata air terjun.</td>
                                            <td>
                                                <button type="button" class="btn btn-warning"
                                                data-bs-toggle="modal" 
                                                data-bs-target="#modalUpdateKategori4">
                                                Update
                                                </button>
                                                <button type="button" 
                                                class="btn btn-danger" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#modalDeleteKategori4">
                                                Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- The Modal Delete-->
                                        <div class="modal fade" id="modalDeleteKategori4">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete Kategori</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form method="post">
                                                    Apakah kategori Air Terjun akan dihapus? 
                                                    <input type="hidden"  name="idkategoridelete" value="4" required>
                                                    <div class="mb-3 mt-3">
                                                    <button type="submit" name="tombolHapusKategori" class="btn btn-primary">Hapus</button>
                                                    </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                         <!-- The Modal Update-->
                                        <div class="modal fade" id="modalUpdateKategori4">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Update Kategori</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form method="post" class="needs-validation">
                                                    <div class="mb-3 mt-3">
                                                    <label for="namakategori">Nama Kategori</label>
                                                    <input type="text" class="form-control" id="namaupdatekategori" value="Air Terjun" name="namaupdatekategori" required>
                                                    <input type="hidden" class="form-control" id="idupdatekategori" value="4" name="idupdatekategori" required>
                                                    </div>
                                                    <div class="mb-3 mt-3">
                                                    <label for="keterangan">Keterangan:</label>
                                                    <textarea class="form-control" rows="5" id="keteranganupdatekategori" name="keteranganupdatekategori" required>Artikel yang membahas tentang tempat wisata air terjun.</textarea>
                                                    </div>
                                                    <button type="submit" name="tombolUpdateKategori" class="btn btn-primary">Update</button>
                                                </form>
                                            </div>


                                            </div>
                                        </div>
                                        </div>
                                                                                <tr>
                                            <td>4</td>
                                            <td>Pegunungan</td>
                                            <td>Artikel yang membahas tempat wisata pegunungan.</td>
                                            <td>
                                                <button type="button" class="btn btn-warning"
                                                data-bs-toggle="modal" 
                                                data-bs-target="#modalUpdateKategori5">
                                                Update
                                                </button>
                                                <button type="button" 
                                                class="btn btn-danger" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#modalDeleteKategori5">
                                                Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- The Modal Delete-->
                                        <div class="modal fade" id="modalDeleteKategori5">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete Kategori</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form method="post">
                                                    Apakah kategori Pegunungan akan dihapus? 
                                                    <input type="hidden"  name="idkategoridelete" value="5" required>
                                                    <div class="mb-3 mt-3">
                                                    <button type="submit" name="tombolHapusKategori" class="btn btn-primary">Hapus</button>
                                                    </div>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                         <!-- The Modal Update-->
                                        <div class="modal fade" id="modalUpdateKategori5">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Update Kategori</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form method="post" class="needs-validation">
                                                    <div class="mb-3 mt-3">
                                                    <label for="namakategori">Nama Kategori</label>
                                                    <input type="text" class="form-control" id="namaupdatekategori" value="Pegunungan" name="namaupdatekategori" required>
                                                    <input type="hidden" class="form-control" id="idupdatekategori" value="5" name="idupdatekategori" required>
                                                    </div>
                                                    <div class="mb-3 mt-3">
                                                    <label for="keterangan">Keterangan:</label>
                                                    <textarea class="form-control" rows="5" id="keteranganupdatekategori" name="keteranganupdatekategori" required>Artikel yang membahas tempat wisata pegunungan.</textarea>
                                                    </div>
                                                    <button type="submit" name="tombolUpdateKategori" class="btn btn-primary">Update</button>
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
        <div class="modal fade" id="modalTambahKategori">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Kategori</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="post" class="needs-validation">
                    <div class="mb-3 mt-3">
                    <label for="namapengguna">Nama Kategori</label>
                    <input type="text" class="form-control" id="namakategori" placeholder="Nama Kategori" name="namakategori" required>
                    </div>
                    <div class="mb-3 mt-3">
                    <label for="keterangan">Keterangan:</label>
                    <textarea class="form-control" rows="5" id="keterangan" name="keterangankategori" required></textarea>
                    <div class="mb-3 mt-3">
                    <button type="submit" name="tombolSimpanKategori" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>

    </body>
</html>
