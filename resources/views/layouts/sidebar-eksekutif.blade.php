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
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/eksekutif/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/eksekutif/kehadiran') }}">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Kehadiran</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/eksekutif/project') }}">
            <i class="fas fa-fw fa-check"></i>
            <span>Project</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/eksekutif/dataPegawai') }}">
            <i class="fas fa-sharp fa-solid fa-fw fa-users"></i>
            <span>Data Pegawai</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Pengajuan Izin</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('/eksekutif/pengajuanCuti') }}">Cuti</a>
                <a class="collapse-item" href="{{ url('/eksekutif/pengajuanReimbursement') }}">Reimbursement Claim</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ url('/eksekutif/reporting') }}">
            <i class="fas fa-fw fa-folder-open"></i>
            <span>Reporting</span></a>
    </li>

    <hr class="sidebar-divider">

</ul>