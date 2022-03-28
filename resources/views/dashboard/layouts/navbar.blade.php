<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow  " style="background-color:#020381 ">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/" style="background-color:#020381 ">
        <h3>DIDAMEL.ID</h3>
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            {{-- <a class="" href="#">Sign out</a> --}}
            <a class="nav-link px-3 font-semibold" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                <span class=" fa-solid fa-arrow-right-from-bracket"></span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</header>