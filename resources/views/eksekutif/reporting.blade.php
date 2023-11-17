<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reporting | HRIS Growithtech</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('sbadmin')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('sbadmin')}}/css/sb-admin-2.min.css" rel="stylesheet">
      

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.sidebar-eksekutif')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    @include('layouts.navbar.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Reporting</h1>
                    </div>

                        <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="container">
                                    <div class="row ">
                                        <div class="col-1">
                                            <h8>Bulan</h8>
                                        </div>
                                        <div class="col-2">
                                            <div class="mb-3">
                                                <select name="bulan" id="bulan">
                                                    <option selected>-Pilih Bulan-</option>
                                                    <option value="januari">Januari</option>
                                                    <option value="februari">Februari</option>
                                                    <option value="maret">Maret</option>
                                                    <option value="april">April</option>
                                                    <option value="mei">Mei</option>
                                                    <option value="juni">Juni</option>
                                                    <option value="juli">Juli</option>
                                                    <option value="agustus">Agustus</option>
                                                    <option value="september">September</option>
                                                    <option value="oktober">Oktober</option>
                                                    <option value="november">November</option>
                                                    <option value="desember">Desember</option>
                                                </select>
                                            </div>   
                                        </div>
                                        <div class="col-1">
                                            <h8>Tahun</h8>
                                        </div>
                                        <div class="col-2">
                                            <div class="mb-3">
                                                <select name="bulan" id="bulan">
                                                    <option selected>-Pilih Tahun-</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="col-2">
                                            <a href="#" class="btn btn-primary btn-sm btn-icon-split m-6">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-calendar"></i>
                                                </span>
                                                <span class="text">Tampilkan Data</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="justify-content-start">
                                    <a href="#" class="btn btn-primary btn-sm btn-icon-split">
                                        <span class="text">Excel</span>
                                    </a>
                                    <a href="#" class="btn btn-primary btn-sm btn-icon-split">
                                        <span class="text">PDF</span>
                                    </a>
                                    <a href="#" class="btn btn-primary btn-sm btn-icon-split">
                                        <span class="text">Print</span>
                                    </a>
                                </div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">NIP</th>
                                            <th class="text-center">Nama Pegawai</th>
                                            <th class="text-center">Department</th>
                                            <th class="text-center">Jabatan</th>
                                            <th class="text-center">Gaji Pokok</th>
                                            <th class="text-center">Tambahan</th>
                                            <th class="text-center">Potongan</th>
                                            <th class="text-center">Total Gaji</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1231</td>
                                            <td>Dava Attabrani</td>
                                            <td>Development</td>
                                            <td>Manajer</td>
                                            <td>Rp3.000.000</td>
                                            <td>Rp300.000</td>
                                            <td>Rp0</td>
                                            <td>Rp3.300.000</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>1231</td>
                                            <td>Dava Attabrani</td>
                                            <td>Development</td>
                                            <td>Manajer</td>
                                            <td>Rp3.000.000</td>
                                            <td>Rp300.000</td>
                                            <td>Rp0</td>
                                            <td>Rp3.300.000</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>1231</td>
                                            <td>Dava Attabrani</td>
                                            <td>Development</td>
                                            <td>Manajer</td>
                                            <td>Rp3.000.000</td>
                                            <td>Rp300.000</td>
                                            <td>Rp0</td>
                                            <td>Rp3.300.000</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>1231</td>
                                            <td>Dava Attabrani</td>
                                            <td>Development</td>
                                            <td>Manajer</td>
                                            <td>Rp3.000.000</td>
                                            <td>Rp300.000</td>
                                            <td>Rp0</td>
                                            <td>Rp3.300.000</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>1231</td>
                                            <td>Dava Attabrani</td>
                                            <td>Development</td>
                                            <td>Manajer</td>
                                            <td>Rp3.000.000</td>
                                            <td>Rp300.000</td>
                                            <td>Rp0</td>
                                            <td>Rp3.300.000</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>1231</td>
                                            <td>Dava Attabrani</td>
                                            <td>Development</td>
                                            <td>Manajer</td>
                                            <td>Rp3.000.000</td>
                                            <td>Rp300.000</td>
                                            <td>Rp0</td>
                                            <td>Rp3.300.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('sbadmin')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('sbadmin')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('sbadmin')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('sbadmin')}}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{asset('sbadmin')}}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('sbadmin')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('sbadmin')}}/js/demo/datatables-demo.js"></script>

</body>

</html>