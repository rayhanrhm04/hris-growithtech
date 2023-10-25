 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Growithtech</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/staff-dev/kehadiran') }}">
            <i class="fas fa-sharp fa-solid fa-fw fa-user"></i>
            <span>Kehadiran / Attendance </span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/staff-dev/project') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Project</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Pengajuan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('/staff-dev/pengajuanCuti') }}">Izin</a>
                <a class="collapse-item" href="{{ url('/staff-dev/pengajuanReimbursement') }}">Reimbursement</a>
            </div>
        </div>
    </li>
