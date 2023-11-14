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

        @include('layouts.sidebar-staffhr')
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
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Pegawai</h1>
                    </div>

                        <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pegawai</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
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
                                    <a href="#" class="btn btn-primary btn-sm btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">Tambah</span>
                                    </a>
                                </div>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">NIP</th>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">Jenis Kelamin</th>
                                            <th class="text-center">TTL</th>
                                            <th class="text-center">Departemen</th>
                                            <th class="text-center">Posisi</th>
                                            <th class="text-center">Agama</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">No Telp</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Password</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dava Attabrani Akbar</td>
                                            <td>Pria</td>
                                            <td>2002/09/02</td>
                                            <td>Developer</td>
                                            <td>Manager</td>
                                            <td>Islam</td>
                                            <td>Jl. Kopo</td>
                                            <td>08958992905</td>
                                            <td>attabrani.dava@gmail.com</td>
                                            <td>davaganteng123</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-success btn-sm btn-icon-split">
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-icon-split">
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Dava Attabrani Akbar</td>
                                            <td>Pria</td>
                                            <td>2002/09/02</td>
                                            <td>Developer</td>
                                            <td>Manager</td>
                                            <td>Islam</td>
                                            <td>Jl. Kopo</td>
                                            <td>08958992905</td>
                                            <td>attabrani.dava@gmail.com</td>
                                            <td>davaganteng123</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-success btn-sm btn-icon-split">
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-icon-split">
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Dava Attabrani Akbar</td>
                                            <td>Pria</td>
                                            <td>2002/09/02</td>
                                            <td>Developer</td>
                                            <td>Manager</td>
                                            <td>Islam</td>
                                            <td>Jl. Kopo</td>
                                            <td>08958992905</td>
                                            <td>attabrani.dava@gmail.com</td>
                                            <td>davaganteng123</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-success btn-sm btn-icon-split">
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-icon-split">
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Fasya Mutiara</td>
                                            <td>Wanita</td>
                                            <td>2002/07/05</td>
                                            <td>HR</td>
                                            <td>Manager</td>
                                            <td>Islam</td>
                                            <td>Jl. Soekarno Hatta</td>
                                            <td>-</td>
                                            <td>fasya..mutiara@gmail.com</td>
                                            <td>fhasyaimhoetz123</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-success btn-sm btn-icon-split">
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-icon-split">
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Rayhan Miraj B</td>
                                            <td>Pria</td>
                                            <td>2002/10/04</td>
                                            <td>Developer</td>
                                            <td>Staff</td>
                                            <td>Islam</td>
                                            <td>Jl. Moh. Toha</td>
                                            <td>-</td>
                                            <td>rayhan.miraj@gmail.com</td>
                                            <td>rayhanganthengbgtz123</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-success btn-sm btn-icon-split">
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-icon-split">
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Dava Attabrani Akbar</td>
                                            <td>Pria</td>
                                            <td>2002/09/02</td>
                                            <td>Developer</td>
                                            <td>Manager</td>
                                            <td>Islam</td>
                                            <td>Jl. Kopo</td>
                                            <td>08958992905</td>
                                            <td>attabrani.dava@gmail.com</td>
                                            <td>davaganteng123</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-success btn-sm btn-icon-split">
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-icon-split">
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Dava Attabrani Akbar</td>
                                            <td>Pria</td>
                                            <td>2002/09/02</td>
                                            <td>Developer</td>
                                            <td>Manager</td>
                                            <td>Islam</td>
                                            <td>Jl. Kopo</td>
                                            <td>08958992905</td>
                                            <td>attabrani.dava@gmail.com</td>
                                            <td>davaganteng123</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-success btn-sm btn-icon-split">
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-icon-split">
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Dava Attabrani Akbar</td>
                                            <td>Pria</td>
                                            <td>2002/09/02</td>
                                            <td>Developer</td>
                                            <td>Manager</td>
                                            <td>Islam</td>
                                            <td>Jl. Kopo</td>
                                            <td>08958992905</td>
                                            <td>attabrani.dava@gmail.com</td>
                                            <td>davaganteng123</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-success btn-sm btn-icon-split">
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-icon-split">
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Dava Attabrani Akbar</td>
                                            <td>Pria</td>
                                            <td>2002/09/02</td>
                                            <td>Developer</td>
                                            <td>Manager</td>
                                            <td>Islam</td>
                                            <td>Jl. Kopo</td>
                                            <td>08958992905</td>
                                            <td>attabrani.dava@gmail.com</td>
                                            <td>davaganteng123</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-success btn-sm btn-icon-split">
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-icon-split">
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Dava Attabrani Akbar</td>
                                            <td>Pria</td>
                                            <td>2002/09/02</td>
                                            <td>Developer</td>
                                            <td>Manager</td>
                                            <td>Islam</td>
                                            <td>Jl. Kopo</td>
                                            <td>08958992905</td>
                                            <td>attabrani.dava@gmail.com</td>
                                            <td>davaganteng123</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-success btn-sm btn-icon-split">
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-icon-split">
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Dava Attabrani Akbar</td>
                                            <td>Pria</td>
                                            <td>2002/09/02</td>
                                            <td>Developer</td>
                                            <td>Manager</td>
                                            <td>Islam</td>
                                            <td>Jl. Kopo</td>
                                            <td>08958992905</td>
                                            <td>attabrani.dava@gmail.com</td>
                                            <td>davaganteng123</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-success btn-sm btn-icon-split">
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-icon-split">
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>Dava Attabrani Akbar</td>
                                            <td>Pria</td>
                                            <td>2002/09/02</td>
                                            <td>Developer</td>
                                            <td>Manager</td>
                                            <td>Islam</td>
                                            <td>Jl. Kopo</td>
                                            <td>08958992905</td>
                                            <td>attabrani.dava@gmail.com</td>
                                            <td>davaganteng123</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-success btn-sm btn-icon-split">
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-icon-split">
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>Dava Attabrani Akbar</td>
                                            <td>Pria</td>
                                            <td>2002/09/02</td>
                                            <td>Developer</td>
                                            <td>Manager</td>
                                            <td>Islam</td>
                                            <td>Jl. Kopo</td>
                                            <td>08958992905</td>
                                            <td>attabrani.dava@gmail.com</td>
                                            <td>davaganteng123</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-success btn-sm btn-icon-split">
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-icon-split">
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>Dava Attabrani Akbar</td>
                                            <td>Pria</td>
                                            <td>2002/09/02</td>
                                            <td>Developer</td>
                                            <td>Manager</td>
                                            <td>Islam</td>
                                            <td>Jl. Kopo</td>
                                            <td>08958992905</td>
                                            <td>attabrani.dava@gmail.com</td>
                                            <td>davaganteng123</td>
                                            <td class="text-center">
                                                <div class="justify-content-start">
                                                    <a href="#" class="btn btn-success btn-sm btn-icon-split">
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm btn-icon-split">
                                                        <span class="text">Hapus</span>
                                                    </a>
                                                </div>
                                            </td>
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