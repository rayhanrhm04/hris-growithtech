<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Payroll | HRIS Growithtech</title>

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
                            <h1 class="h3 mb-0 text-gray-800">Edit Payroll</h1>
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
                                                <form action="{{ route('payroll.update', $payroll->id) }}"
                                                    method="POST">
                                                    @csrf @method('PUT')
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Name</label>
                                                        <div class="col-sm-4">
                                                            <select name="empl_id" id=""
                                                            class="form-control">
                                                            @foreach ($users as $user)
                                                                <option value="{{ $user->id }}">
                                                                    {{ $user->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Department</label>
                                                        <div class="col-sm-4">
                                                            <select name="department_id" id=""
                                                                class="form-control">
                                                                <option value="">-</option>
                                                                @foreach ($departments as $dept)
                                                                    <option value="{{ $dept->id }}"
                                                                        {{ $payroll->department_id == $dept->id ? 'selected' : '' }}>
                                                                        {{ $dept->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Position</label>
                                                        <div class="col-sm-4">
                                                            <select name="position_id" id=""
                                                                class="form-control">
                                                                <option value="">-</option>
                                                                @foreach ($positions as $post)
                                                                    <option value="{{ $post->id }}"
                                                                        {{ $payroll->postion_id == $post->id ? 'selected' : '' }}>
                                                                        {{ $post->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Meal Allowances</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" id="meal_allowances" name="meal_allowances"
                                                                value="{{ $payroll->meal_allowances }}">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Project Bonus</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" id="project_bonus" name="project_bonus"
                                                                value="{{ $payroll->project_bonus }}">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Reimbursement</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" id="reimbursement_id" name="reimbursement_id"
                                                                value="{{ $payroll->reimbursement_id }}">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Basic Salary</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" id="basic_salary" name="basic_salary"
                                                                value="{{ $payroll->basic_salary }}">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Salary Cuts</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" id="salary_cuts" name="salary_cuts"
                                                                value="{{ $payroll->salary_cuts }}">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-sm-2 col-form-label">Total Salary</label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" id="total_salary" name="total_salary"
                                                                value="{{ $payroll->total_salary }}">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3 ">
                                                        <div class="col-sm-5 text-center">
                                                            <button type="submit"
                                                                class="btn btn-primary">Update</button>
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
