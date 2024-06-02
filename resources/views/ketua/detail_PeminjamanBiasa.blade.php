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
                    <li><form action="/logout" method="POST">
                        @csrf
                        <button class="dropdown-item" type="submit">Logout</button>
                    </form></li>
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
                            Ketua
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="data_anggota">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Data Anggota
                                </a>
                                <a class="nav-link" href="calon_anggota">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Calon Anggota
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
                    <h3 class="mt-4 mb-4 text-center">DETAIL FORMULIR PERMOHONAN PINJAMAN KONSUMTIF BIASA</h3>
                    <hr style="height:3px;">
                    <a href="{{ url('/ketua/status_biasa') }}" class="btn btn-success"
                        style="width:90px;height:35px;">Kembali</a>
                    <p></p>

                        <div class="card">
                            <div class="card-header">
                                Identitas
                            </div>
                            <div class="card-body">


                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="form-label">No.Anggota :</label>
                                            <input type="number" name="no_anggota" id="" class="form-control" value="{{ $pinjaman->no_anggota }}" readonly>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="form-label">Alamat Rumah</label>
                                            <input type="text" name="alamat" id="" class="form-control" value="{{ $pinjaman->alamat }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <p></p>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="form-label">Nama :</label>
                                            <input type="text" name="nama" id="" class="form-control" value="{{ $pinjaman->nama }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="form-label">No.Telp/HP :</label>
                                            <input type="number" name="no_telp" id="" class="form-control" value="{{ $pinjaman->no_telp }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <p></p>
                                <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="" class="form-label">Bagian :</label>
                                                <input type="text" name="bagian" id="" class="form-control" value="{{ $pinjaman->bagian }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="" class="form-label">Pekerjaan :</label>
                                                <select name="pekerjaan" class="form-select" aria-label="Default select example" disabled>
                                                    <option selected value="">{{ $pinjaman->pekerjaan }} </option>
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
                                                <input type="text" name="besar_pinjaman" id="" class="form-control" value="Rp.{{ number_format($pinjaman->besar_pinjaman, 0, ',', '.') }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="" class="form-label">Besar Angsuran/Bulan :</label>
                                                <input type="text" name="besar_angsuran" id="" class="form-control" value="Rp.{{ number_format($pinjaman->besar_angsuran, 0, ',', '.') }}" readonly >
                                            </div>
                                        </div>
                            </div>
                                <hr>
                                <div class="card-text">Saya memberikan kuasa penuh kepada Payroll Politeknik Negeri
                                    Batam
                                    untuk melakukan pemotongan gaji saya sebesar angsuran bulanan yang telah saya pilih
                                    di
                                    atas terhitung sejak : </div>
                                <p></p>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="form-label">Tanggal :</label>
                                            <input type="date" name="" id="" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <p></p>
                                <div class="card-text">Sampai dengan</div>
                                <p></p>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="form-label">Tanggal :</label>
                                            <input type="date" name="" id="" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <p></p>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="form-label">Tanggal permohonan</label>
                                            <div class="row">
                                                <div class="col-3">
                                                    <input type="text" name="" id="" value="Batam" class="form-control" readonly>
                                                </div>
                                                <div class="col">
                                                    <input type="date" name="tanggal_permohonan" id="" class="form-control" value="{{ $pinjaman->tanggal_permohonan }}" readonly>
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
                                            <input class="form-control" type="file" id="formFile" readonly disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p></p>
                        <div class="card">
                            <div class="card-header">
                                Keterangan
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="form-label">Nomor rekening pencairan pinjaman :</label>
                                            <input type="number" name="nomor_rekening" id="" class="form-control" value="{{ $pinjaman->nomor_rekening }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="form-label">Alamat email pemberitahuan pencairan
                                                pinjaman
                                                :</label>
                                            <input type="email" name="email" id="" class="form-control" value="{{ $pinjaman->email }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <p></p>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="form-label">Total pencairan pinjaman :</label>
                                            <input type="number" name="total_pinjaman" id="" class="form-control" value="{{ $pinjaman->total_pinjaman }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <p></p>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="" class="form-label">Alasan Peminjaman </label>
                                            <textarea type="text" class="form-control"
                                            name="alasan_pinjaman" aria-label="With textarea" value=" "readonly> {{ $pinjaman->alasan_pinjaman }} </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




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
