<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Growithtech</div>
    </a>

    <!--Manager HR-->
    @if (Auth::user()->role == 1) 
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/manager-hr/dashboard-managerhr') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('employee.index') }}">
                <i class="fas fa-sharp fa-solid fa-fw fa-users"></i>
                <span>Employee Data</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/manager-hr/kehadiran') }}">
                <i class="fas fa-fw fa-calendar"></i>
                <span>Attendance</span></a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-file-alt"></i>
                <span>Request</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('timeoff.index') }}">Time Off</a>
                    <a class="collapse-item" href="{{ route('reimbursement.index') }}">Reimbursement Request</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/manager-hr/penggajian') }}">
                <i class="fas fa-fw fa-calculator"></i>
                <span>Payroll</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/manager-hr/reporting') }}">
                <i class="fas fa-fw fa-folder-open"></i>
                <span>Reporting</span></a>
        </li>
    @endif

    <!--Staff HR-->
    @if (Auth::user()->role == 2)
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/dashboard-staffhr') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/datapegawai-staffhr') }}">
                <i class="fas fa-sharp fa-solid fa-fw fa-users"></i>
                <span>Employee Data</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/kehadiran-staffhr') }}">
                <i class="fas fa-fw fa-calendar"></i>
                <span>Attendance</span></a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-file-alt"></i>
                <span>Submission</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ url('/pengajuanizin-staffhr') }}">Time Off</a>
                    <a class="collapse-item" href="{{ url('/pengajuanreimbursement-staffhr') }}">Reimbursement</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/penggajian-staffhr') }}">
                <i class="fas fa-fw fa-calculator"></i>
                <span>Payroll</span></a>
        </li>
    @endif


    <!--Manager Development-->
    @if (Auth::user()->role == 3)
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/manager-dev/dashboard-managerdev') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/eksekutif/kehadiran') }}">
                <i class="fas fa-sharp fa-solid fa-fw fa-user"></i>
                <span>Attendance</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/project') }}">
                <i class="fas fa-fw fa-list"></i>
                <span>Project</span></a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-file-alt"></i>
                <span>Submission</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ url('/manager-dev/pengajuanCuti') }}">Time Off</a>
                    <a class="collapse-item" href="{{ url('/manager-dev/pengajuanReimbursement') }}">Reimbursement</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/manager-dev/reporting') }}">
                <i class="fas fa-fw fa-folder-open"></i>
                <span>Reporting</span></a>
        </li>
    @endif


    <!--Staff Development-->
    @if (Auth::user()->role == 4)
            <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/staff-dev/kehadiran') }}">
                <i class="fas fa-sharp fa-solid fa-fw fa-user"></i>
                <span>Attendance</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('project.index') }}">
                <i class="fas fa-fw fa-list"></i>
                <span>Project</span></a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-file-alt"></i>
                <span>Submission</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ url('/staff-dev/pengajuanCuti') }}">Time Off</a>
                    <a class="collapse-item" href="{{ url('/staff-dev/pengajuanReimbursement') }}">Reimbursement</a>
                </div>
            </div>
        </li>
    @endif

</ul>
