<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HRIS Growithtech</title>

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

        @include('layouts.sidebar')
             <!-- Divider -->
             <hr class="sidebar-divider">
 
         </ul>
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
                        <h1 class="h3 mb-0 text-gray-800">Request Reimbursement</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl col-lg">
                            <div class="card shadow mb-4">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row">   
                                        <div class="col">
                                            <form>
                                                <div class="mb-3 row">
                                                    <label class="col-sm-2 col-form-label">Name</label>
                                                    <div class="col-sm-4">
                                                      <input class="form-control" id="name">
                                                    </div>
                                                </div>
                                                
                                                <div class="mb-3 row">
                                                    <label class="col-sm-2 col-form-label">Position</label>
                                                    <div class="col-sm-4">
                                                      <input class="form-control" id="position">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-sm-2 col-form-label">Request Date</label>
                                                    <div class="col-sm-4">
                                                        <input type="date" data-toggle="datatimepicker" class="form-control" id="requestdate" name="requestdate">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-sm-2 col-form-label">Nominal</label>
                                                    <div class="col-sm-4">
                                                      <input class="form-control" id="nominal">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-sm-2 col-form-label">Upload File</label>
                                                    <div class="col-sm-4" class="col-lg-8">
                                                      <input class="form-control" id="file">
                                                    </div>
                                                </div>

                                                <div class="row mb-3 ">
                                                    <div class="col-sm-5 text-center">
                                                        <button type="submit" class="btn btn-primary">Ajukan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                        <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pengajuan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="70%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Tanggal Pengajuan</th>
                                            <th class="text-center">Nominal</th>
                                            <th class="text-center">Bukti</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>7 Agustus 2023</td>
                                            <td>Rp500.000</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-outline-secondary btn-sm btn-icon-split">
                                                        <span class="text">Lihat</span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">Diterima</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>7 Agustus 2023</td>
                                            <td>Rp500.000</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-outline-secondary btn-sm btn-icon-split">
                                                        <span class="text">Lihat</span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">Diterima</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>7 Agustus 2023</td>
                                            <td>Rp500.000</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-outline-secondary btn-sm btn-icon-split">
                                                        <span class="text">Lihat</span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">Diterima</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>7 Agustus 2023</td>
                                            <td>Rp500.000</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-outline-secondary btn-sm btn-icon-split">
                                                        <span class="text">Lihat</span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">Diterima</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>7 Agustus 2023</td>
                                            <td>Rp500.000</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-outline-secondary btn-sm btn-icon-split">
                                                        <span class="text">Lihat</span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">Diterima</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>7 Agustus 2023</td>
                                            <td>Rp500.000</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-outline-secondary btn-sm btn-icon-split">
                                                        <span class="text">Lihat</span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-center">Diterima</td>
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
            @include('layouts.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

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