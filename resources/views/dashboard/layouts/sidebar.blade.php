<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/hotel*') ? 'active' : '' }}" href="/dashboard/hotel">
                <span data-feather="file-plus" class="align-text-bottom"></span>
                Hotel
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/wisata*') ? 'active' : '' }}" href="/dashboard/wisata">
                <span data-feather="file-plus" class="align-text-bottom"></span>
                Wisata
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/souvenir*') ? 'active' : '' }}" href="/dashboard/souvenir">
                <span data-feather="file-plus" class="align-text-bottom"></span>
                Souvenir
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/ibadah*') ? 'active' : '' }}" href="/dashboard/ibadah">
                <span data-feather="file-plus" class="align-text-bottom"></span>
                Tempat Ibadah
                </a>
            </li>
        </ul>
    </div>
</nav>