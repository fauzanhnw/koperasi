<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Koperasi Polibatam</title>
    <link rel="icon" type="image/x-icon" href="/img/659px-Logo_Politeknik_Negeri_Batam copy.png" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/color.css">
    <link rel="stylesheet" href="/css/table.css">
</head>

<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-kuning">
        <!-- Sidebar Toggle-->
        <button class="btn btn-lg order-lg-0 me-3 ms-1" id="sidebarToggle" href="#!">
            <i class="fas fa-bars gelap"></i></button>
        <!-- Navbar Brand-->
        <a class="navbar-brand d-none d-sm-inline" href="index.html">
            <img src="/img/logo Koperasi.png" alt="" height="40px"></a>
        <span class="navbar-brand d-block d-sm-none" href="#">
            <img src="/img/logo polibatam.png" height="40px" width="58px">
        </span>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle gelap" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw gelap"></i></a>
                <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                    <li><button class="dropdown-item" type="button"><b>Halo, {{ Auth::guard('anggota')->user()->nama_lengkap; }}
                            </b></button></li>
                    <li><a class="dropdown-item" type="button" href="ganti-pass.php">Ganti Password</a></li>
                    <div class="dropdown-divider"></div>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav mt-4">
                        <a class="nav-link" href="dashboard">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Pengawas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="data_anggota">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Data Anggota
                                </a>
                                <a class="nav-link" href="status_biasa">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Permintaan Pinjaman
                                </a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAnggota" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Anggota
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseAnggota" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="data_pribadi">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i> </div>
                                    Data Anggota
                                </a>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePinjam" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Pinjaman
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsePinjam" aria-labelledby="headingOne" data-bs-parent="#collapseAnggota">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="formbiasa">Pinjaman Biasa</a>
                                        <a class="nav-link" href="formkhusus">Pinjaman Khusus</a>
                                        <a class="nav-link" href="formurgent">Pinjaman Urgent</a>
                                    </nav>
                                </div>
                                <a class="nav-link" href="status">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i> </div>
                                    Status Peminjaman
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Build for PBL TRPL</div>
                    2B REGULER KELOMPOK 1
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid row justify-content px-4">
                    <h3 class="mt-4 mb-4 text-center">FORMULIR PERMOHONAN PINJAMAN KONSUMTIF BIASA</h3>
                    <hr style="height:3px;">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                Identitas
                            </div>
                            <div class="card-body">
                                <div class="sec1">
                                    <p>Catatan : </p>
                                    <p> 1. Formulir ini ditujukan untuk pinjaman 3jt s/d 10 juta yang akan diangsur
                                        maksimal 2 tahun.</p>
                                    <p> 2. Formulir ini wajib dilengkapi dengan ijazah asli dan transkrip nilai asli </p>
                                </div>
                                <hr>
                                <form action="{{ route('ketua.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="" class="form-label">No.Anggota :</label>
                                                <input type="number" name="no_anggota" id="" class="form-control"
                                                    value="{{ Auth::guard('anggota')->user()->no_anggota; }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="" class="form-label">Alamat Rumah</label>
                                                <input type="text" name="alamat" id="" value="{{ Auth::guard('anggota')->user()->alamat; }}" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="nama">Nama:</label>
                                                <input type="text" name="nama" id="nama" value="{{ Auth::guard('anggota')->user()->nama_lengkap; }}" readonly class="form-control">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="" class="form-label">No.Telp/HP :</label>
                                                <input type="number" name="no_telp" id="" value="{{ Auth::guard('anggota')->user()->no_telepon_hp; }}" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="bagian" class="form-label">Bagian:</label>
                                                <input type="text" name="bagian" id="" value="{{ Auth::guard('anggota')->user()->bagian; }}" class="form-control" readonly>
                                            </div>
                                        </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Pekerjaan :</label>
                                                    <select name="pekerjaan" class="form-select"
                                                        aria-label="Default select example" required>
                                                        <option selected>Pilih </option>
                                                        <option value="dosen">Dosen</option>
                                                        <option value="staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <br>
                            <div class="card">
                                <div class="card-header">
                                    Form
                                </div>
                                <div class="card-body">
                                    <p>Dengan ini mengajukan Peminjaman Normal Sebagai berikut:</p>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="" class="form-label">Besar Pinjaman :</label>
                                                <input type="number" name="besar_pinjaman" id="" class="form-control"
                                                    placeholder="Rp 1.000.000">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="" class="form-label">Besar Angsuran/Bulan :</label>
                                                <input type="number" name="besar_angsuran" id="" class="form-control"
                                                    placeholder="Rp 100.000">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <p></p>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="" class="form-label">Tanggal permohonan</label>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <input type="text" name="" id="" value="Batam"
                                                            class="form-control" readonly>
                                                    </div>
                                                    <div class="col">
                                                        <input type="date" name="tanggal_permohonan" id=""
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="formFile" class="form-label">Tanda Tangan Pemohon</label>
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <p></p>

                            <p></p>
                            <div class="card">
                                <div class="card-header">
                                    Keterangan
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="" class="form-label">Nomor rekening pencairan pinjaman
                                                    :</label>
                                                <input type="number" name="nomor_rekening" value="{{ Auth::guard('anggota')->user()->nomor_rekening; }}" id="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="" class="form-label">Alamat email pemberitahuan pencairan
                                                    pinjaman
                                                    :</label>
                                                <input type="email" name="email" id="" value="{{ Auth::guard('anggota')->user()->email; }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <p></p>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="" class="form-label">Alasan Peminjaman </label>
                                                <textarea type="text" class="form-control" name="alasan_pinjaman"
                                                    aria-label="With textarea"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <select name="jenis_pinjaman" id="status" style="display:none;">
                                <option value="biasa">Biasa</option>
                            </select>
                            <input type="hidden" id="date" name="bunga" value="0.9">
                            <input type="hidden" id="date" name="tanggal_pengajuan">
                            <div class="d-flex justify-content-center"><button type="submit" class="btn btn-success">
                                    SUBMIT </button></div>
                    </form>
                    <p></p>
                </div>

            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; KELOMMPOK 1 TRPL-REGULER-2B3</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="/assets/demo/chart-area-demo.js"></script>
    <script src="/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="/js/datatables-simple-demo.js"></script>


</body>

</html>
