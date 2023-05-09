<header data-bs-theme="dark">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="/home"><i class="fa-solid fa-shop mx-2"></i>Tokoku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mb-2 mb-md-0 me-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            {{-- <span class="navbar-toggler-icon"></span> --}}
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                              <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Dropdown
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                              </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                {{-- Check User Authentication / check user yang sedang login--}}
                @auth
                    {{-- User telah login / ter-autentifikasi --}}
                    <ul class="navbar-nav mb-2 mb-md-0">
                        @include('templates.partials.userNavbar')
                    </ul>
                @else
                    <ul class="navbar-nav mb-2 mb-md-0">
                        <a href="/login" class="btn btn-outline-primary btn-sm me-2 px-3">Login</a>   
                        <a href="/register" class="btn btn-outline-success btn-sm">Register</a>   
                    </ul>
                @endauth
            </div>
        </div>
    </nav>
</header>