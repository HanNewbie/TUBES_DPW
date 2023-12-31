<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin <sup>RentalIn</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="/admin/cars">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Daftar Mobil</span></a>
    </li>
   
    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="/admin/messages">
            <i class="fas fa-envelope fa-fw"></i>
            <span>Daftar Complain</span></a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" onclick="document.getElementById('logout-form').submit()" href="#">
            <i class="fas logout fa-fw"></i>
            <span>Logout</span></a>
            <form id="logout-form" action="{{route('logout')}}" method="post">
                @csrf
            </form>
    </li>


    {{-- <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Kendaraan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tata Kendaraan:</h6>
                <a class="collapse-item" href="{{route('admin.cars.index')}}">Mobil</a>
                <a class="collapse-item" href="cards.html">Motor</a>
            </div>
        </div>
    </li> --}}

</ul>