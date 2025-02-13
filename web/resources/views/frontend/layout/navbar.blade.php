<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{ asset('assets\logo\logo_ParkED_with_text.png') }}"
                alt="" width="70px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center text-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'actives' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('resources') ? 'actives' : '' }}" href="/resources">Sumber
                        Daya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('information') ? 'actives' : '' }}"
                        href="/information">Informasi</a>
                </li>
                @auth
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="/profile">Profil</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="/history">Riwayat</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="/logout">Keluar</a>
                    </li>
                @endauth
                @guest
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="/login">Masuk</a>
                    </li>
                @endguest
            </ul>
        </div>
        @guest
            <a href="/login" class="btn bg-warning text-white d-none d-lg-block" type="button">Masuk</a>
        @endguest

        @auth
            <div class="dropdown d-none d-lg-block">
                <button class="btn btn-user-dropdown" type="button" id="userDropdown" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="{{ $user->photo ? Storage::url($user->photo) : asset($user->google_photo) }}"
                        alt="Profile picture" class="border">
                </button>
                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="/profile">Profil</a></li>
                    <li><a class="dropdown-item" href="/history">Riwayat</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="#" onclick="confirmLogout(event)">Keluar</a>
                    </li>
                </ul>
            </div>
        @endauth
    </div>
</nav>
