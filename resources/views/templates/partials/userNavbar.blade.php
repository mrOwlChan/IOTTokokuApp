<li class="nav-item dropdown">
    <a href="" class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ asset('assets/img/icons/user.PNG')}}" class="rounded-circle me-1" style="height:30px; width:30px" alt="User Image" style="border-radius: 50%">
        <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>    
    </a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        {{--  --}}
        @if (!(Request::is('home*')))
            {{-- jika selain URL '/home*' --}}
            <li><a class="dropdown-item" href="/home"><i class="fa-solid fa-house me-2"></i>Home</a></li>
        @else
            <li><a class="dropdown-item" href="/dashboard"><i class="fa-solid fa-user-tie me-3"></i>Admin</a></li>
        @endif{{--  --}}

        <li><hr class="dropdown-divider" /></li>
        <li><a class="dropdown-item" href="#!"><i class="fa-solid fa-gears me-2"></i>Settings</a></li>
        <li><a class="dropdown-item" href="#!"><i class="fa-solid fa-clipboard-list me-3"></i>Activity Log</a></li>
        <li><hr class="dropdown-divider" /></li>
        <li>
            <form action="/logout" method="post">
                @csrf
                <button class="dropdown-item" type="submit"><i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Logout</button>
            </form>
        </li>
    </ul>
</li>