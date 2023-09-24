<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{Request::is('profil') ? 'active' : ''}}" aria-current="page" href="/profil">
                    <span data-feather="user"></span>
                    Profil
                </a>
                <a class="nav-link {{Request::is('kampus') ? 'active' : ''}}" aria-current="page" href="/kampus">
                    <span data-feather="home"></span>
                    Kampus
                </a>
            </li>
        </ul>
    </div>
</nav>