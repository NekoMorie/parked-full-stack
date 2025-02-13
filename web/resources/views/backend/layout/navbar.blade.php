    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand mx-3 text-bold" href="/dashboard">
                <img src="{{ asset('assets\logo\logo_ParkED_with_text.png') }}" alt="logo"
                    style="height: 50px; width: auto;">
                ParkED Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown" id="mobile-nav">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="dashboard.html"><i
                                        class="fas fa-home me-2"></i>Dashboard</a></li>
                            <li><a class="dropdown-item" href="usermanage.html"><i class="fas fa-users me-2"></i>User
                                    Management</a></li>
                            <li><a class="dropdown-item" href="historyform.html"><i
                                        class="fas fa-history me-2"></i>History Form</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ $user->photo ? Storage::url($user->photo) : asset($user->google_photo) }}"
                                alt="" width="40px" class="border rounded-circle"
                                style="margin-right: 5px">{{ $user['first_name'] }}
                            {{ $user['last_name'] }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/profileAdmin">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" onclick="confirmLogout(event)">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="p-3">
            <ul class="list-unstyled">
                <li>
                    <a class="sidebar-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                        <i class="fas fa-home me-2"></i>Dashboard</a>
                </li>
                <li>
                    <a class="sidebar-link {{ Request::is('UserManagement') ? 'active' : '' }}" href="/UserManagement">
                        <i class="fas fa-users me-2"></i>User Management</a>
                </li>
                <li><a class="sidebar-link {{ Request::is('historyform') ? 'active' : '' }}" href="/historyform">
                        <i class="fas fa-history me-2"></i>History Form</a>
                </li>
            </ul>
        </div>
    </nav>
