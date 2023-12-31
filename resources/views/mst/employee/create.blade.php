<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard | HRIS Growithtech</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbadmin') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sbadmin') }}/css/sb-admin-2.min.css" rel="stylesheet">

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
                            <h1 class="h3 mb-0 text-gray-800">New Employee Data</h1>
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
                                                <form action="{{ route('employee.store') }}" method="POST">
                                                    @csrf
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Employee ID</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" id="empl_id" name="empl_id">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Name</label>
                                                        <div class="col-sm-4">

                                                            <input class="form-control" id="name" name="name">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Gender</label>
                                                        <div class="col-sm-4">
                                                            <select name="gender_id" id=""
                                                                class="form-control">
                                                                @foreach ($genders as $gen)
                                                                    <option value="{{ $gen->id }}">
                                                                        {{ $gen->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Date Of Birth</label>
                                                        <div class="col-sm-4">
                                                            <input type="date" data-toggle="datatimepicker" class="form-control" id="dob" name="dob">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Place Of Birth</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" id="pob" name="pob">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Department</label>
                                                        <div class="col-sm-4">
                                                            <select name="department_id" id=""
                                                                class="form-control">
                                                                @foreach ($departments as $dept)
                                                                    <option value="{{ $dept->id }}">
                                                                        {{ $dept->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Position</label>
                                                        <div class="col-sm-4">
                                                            <select name="position_id" id=""
                                                                class="form-control">
                                                                @foreach ($positions as $pos)
                                                                    <option value="{{ $pos->id }}">
                                                                        {{ $pos->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Religion</label>
                                                        <div class="col-sm-4">
                                                            <select name="religion_id" id=""
                                                            class="form-control">
                                                            @foreach ($religions as $reg)
                                                                <option value="{{ $reg->id }}">
                                                                    {{ $reg->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Address</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" id="address" name="address">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Phone</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" id="phone" name="phone">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Salary</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" id="salary" name="salary">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" id="email" name="email">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Password</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" id="password" name="password">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3 ">
                                                        <div class="col-sm-5 text-center">
                                                            <button type="submit"
                                                                class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
    <script src="{{ asset('sbadmin') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('sbadmin') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sbadmin') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sbadmin') }}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('sbadmin') }}/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('sbadmin') }}/js/demo/chart-area-demo.js"></script>
    <script src="{{ asset('sbadmin') }}/js/demo/chart-pie-demo.js"></script>

</body>

</html>
