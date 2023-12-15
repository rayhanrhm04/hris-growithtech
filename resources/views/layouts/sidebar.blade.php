<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">HRIS Growithtech</div>
    </a>

    <!--Manager HR-->
    @if (Auth::user()->role == 1) 
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/dashboard') }}">
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
            <a class="nav-link" href="{{ url('attendance') }}">
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
                    <a class="collapse-item" href="{{ route('timeoff.index') }}">Time Off Request</a>
                    <a class="collapse-item" href="{{ route('reqtimeoff.index') }}">Time Off</a>
                    <a class="collapse-item" href="{{ route('reimbursement.index') }}">Reimbursement Request</a>
                    <a class="collapse-item" href="{{ route('reqreimbursement.index') }}">Reimbursement</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('payroll.index') }}">
                <i class="fas fa-fw fa-calculator"></i>
                <span>Payroll</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/reporting') }}">
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
            <a class="nav-link" href="{{ url('/dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/employee') }}">
                <i class="fas fa-sharp fa-solid fa-fw fa-users"></i>
                <span>Employee Data</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('attendance') }}">
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
                    <a class="collapse-item" href="{{ route('reqtimeoff.index') }}">Time Off</a>
                    <a class="collapse-item" href="{{ route('reqreimbursement.index') }}">Reimbursement</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('payroll.index') }}">
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
            <a class="nav-link" href="{{ url('/dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('attendance') }}">
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
                <span>Request</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('timeoff.index') }}">Time Off Request</a>
                    <a class="collapse-item" href="{{ route('reqtimeoff.index') }}">Time Off</a>
                    <a class="collapse-item" href="{{ route('reimbursement.index') }}">Reimbursement Request</a>
                    <a class="collapse-item" href="{{ route('reqreimbursement.index') }}">Reimbursement</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/reporting') }}">
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
            <a class="nav-link" href="{{ url('attendance') }}">
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
                <span>Request</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('reqtimeoff.index') }}">Time Off</a>
                    <a class="collapse-item" href="{{ route('reqreimbursement.index') }}">Reimbursement</a>
                </div>
            </div>
        </li>
    @endif

</ul>
