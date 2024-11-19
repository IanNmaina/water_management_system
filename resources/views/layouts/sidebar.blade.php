<div class="d-flex">
    <!-- Sidebar -->
    <div class="bg-dark text-white p-3" style="width: 250px; min-height: 100vh;">
        <h4 class="text-center mb-4">WBMS Menu</h4>
        <ul class="nav flex-column">
            <!-- Dashboard Section -->
            <li class="nav-item mb-2">
                <a href="{{ route('dashboard') }}" class="btn btn-secondary">>
                    <i class="bi bi-speedometer2"></i> Dashboard
                </a>
            </li>

            <!-- Main Section -->
            <li class="nav-item mb-2">
                <a href="#mainSubMenu" class="nav-link text-white" data-bs-toggle="collapse">
                    <i class="bi bi-folder"></i> Main
                </a>
                <ul class="collapse list-unstyled ps-3" id="mainSubMenu">
                    <li><a href="{{ route('clients.index') }}" class="btn btn-secondary">Users</a></li>
                    <li><a href="#" class="nav-link text-white">Bills</a></li>
                </ul>
            </li>

            <!-- Reports Section -->
            <li class="nav-item mb-2">
                <a href="#reportsSubMenu" class="nav-link text-white" data-bs-toggle="collapse">
                    <i class="bi bi-graph-up"></i> Reports
                </a>
                <ul class="collapse list-unstyled ps-3" id="reportsSubMenu">
                    <li><a href="#" class="nav-link text-white">Monthly</a></li>
                    <li><a href="#" class="nav-link text-white">Quarterly</a></li>
                    <li><a href="#" class="nav-link text-white">Semi-Annual</a></li>
                    <li><a href="#" class="nav-link text-white">Annually</a></li>
                </ul>
            </li>

            <!-- Maintenance Section -->
            <li class="nav-item mb-2">
                <a href="#maintenanceSubMenu" class="nav-link text-white" data-bs-toggle="collapse">
                    <i class="bi bi-wrench"></i> Maintenance
                </a>
                <ul class="collapse list-unstyled ps-3" id="maintenanceSubMenu">
                    <li><a href="#" class="nav-link text-white">Users</a></li>
                    <li><a href="#" class="nav-link text-white">Settings</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- Main Content Area -->
    <div class="p-4" style="flex-grow: 1;">
        @yield('content')
    </div>
</div>
