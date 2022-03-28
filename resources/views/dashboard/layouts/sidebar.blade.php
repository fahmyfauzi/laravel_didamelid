<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : false }}" aria-current="page"
                    href="/dashboard">
                    <i class="fa-solid fa-house"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/job*') ? 'active' : false }}" href="/dashboard/job">
                    <span class="fa-solid fa-briefcase"></span>
                    Job
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/category*') ? 'active' : false }}"
                    href="/dashboard/category">
                    <span class="fa-solid fa-align-justify"></span>
                    Job Category
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/company/*') ? 'active' : false }} 
                {{ Request::is('dashboard/company') ? 'active' : false }} " href="/dashboard/company">
                    <span class="fa-solid fa-building"></span>
                    Company
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/companycategory*') ? 'active' : false }}"
                    href="/dashboard/companycategory">
                    <span class="fa-solid fa-align-justify"></span>
                    Company Category
                </a>
            </li>
        </ul>
    </div>
</nav>