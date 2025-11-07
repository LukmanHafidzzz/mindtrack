<aside class="p-3 vh-100">
    <div class="d-flex align-items-center ">
        <div class="">
            <div class="profile-pic">
                {{-- <i class="bi bi-person-fill fs-1"></i> --}}
                <img src="{{ asset("photoProfiles/sigma.png") }}" alt="" srcset="" class="w-100">
            </div>
        </div>
        <div class="ms-4">
            <div class="fw-semibold">Simon the GOAT</div>
            <div class="">Grade 9</div>
        </div>
    </div>
    <div class="side-devider my-2"></div>
    <ul class="list-unstyled">
        <li class="mb-1">
            <a href="{{ url('/home') }}" class="text-decoration-none text-white">
                <div class="d-flex align-items-center gap-2 py-2 px-3 menu-box {{ Request::is('home*') ? 'active' : '' }}">
                    <div class="icon-box">
                        <i class="bi bi-house"></i>
                    </div>
                    <div>
                        Home
                    </div>
                </div>
            </a>
        </li>

        <li class="mb-1">
            <a href="{{ url('/time-me') }}" class="text-decoration-none text-white">
                <div class="d-flex align-items-center gap-2 py-2 px-3 menu-box {{ Request::is('time-me*') ? 'active' : '' }}">
                    <div class="icon-box">
                        <i class="bi bi-stopwatch"></i>
                    </div>
                    <div>
                        Time Me
                    </div>
                </div>
            </a>
        </li>

        <li class="mb-1">
            <a href="{{ url('/achievements') }}" class="text-decoration-none text-white">
                <div class="d-flex align-items-center gap-2 py-2 px-3  menu-box {{ Request::is('achievements*') ? 'active' : '' }}">
                    <div class="icon-box">
                        <i class="bi bi-trophy"></i>
                    </div>
                    <div>
                        Achievements
                    </div>
                </div>
            </a>
        </li>

        <li>
            <a href="{{ url('/tasks') }}" class="text-decoration-none text-white">
                <div class="d-flex align-items-center gap-2 py-2 px-3 menu-box {{ Request::is('tasks*') ? 'active' : '' }}">
                    <div class="icon-box">
                        <i class="bi bi-clipboard"></i>
                    </div>
                    <div>
                        Tasks
                    </div>
                </div>
            </a>
        </li>
    </ul>
    <div class="side-devider my-2"></div>
    <ul class="list-unstyled">
        <li class="mb-1">
            <a href="{{ url('/mood') }}" class="text-decoration-none text-white">
                <div class="d-flex align-items-center gap-2 py-2 px-3 menu-box {{ Request::is('mood*') ? 'active' : '' }}">
                    <div class="icon-box">
                        <i class="bi bi-emoji-laughing"></i>
                    </div>
                    <div>
                        Mood
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="{{ url('/journals') }}" class="text-decoration-none text-white">
                <div class="d-flex align-items-center gap-2 py-2 px-3 menu-box {{ Request::is('journals*') ? 'active' : '' }}">
                    <div class="icon-box">
                        <i class="bi bi-journals"></i>
                    </div>
                    <div>
                        Journals
                    </div>
                </div>
            </a>
        </li>
    </ul>
    <div class="side-devider my-2"></div>
    <div class="dropdown">
        <div data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;">
            <div class="d-flex align-items-center justify-content-between py-2 px-3 menu-box {{ Request::is('settings*') ? 'active' : '' }}">
                <div class="d-flex align-items-center gap-2">
                    <div class="icon-box"><i class="bi bi-gear"></i></div>
                    <div>Settings</div>
                </div>
                <div>
                    <i class="bi bi-caret-down-fill"></i>
                </div>
            </div>
        </div>

        <ul class="dropdown-menu border-0 bg-transparent mx-4 w-75">
            <li>
                <a href="{{ url('/profile') }}" class="text-decoration-none text-white">
                    <div class="d-flex align-items-center gap-2 py-2 px-3 menu-box fs-7 {{ Request::is('profile*') ? 'active' : '' }}">
                        <div class="sub-icon-box"><i class="bi bi-person"></i></div>
                        <div>Profile</div>
                    </div>
                </a>
            </li>
            <li>
                <form action="" method="POST">
                    @csrf
                    <button type="submit" class="border-0 bg-transparent text-white w-100 text-start p-0">
                        <div class="d-flex align-items-center gap-2 py-2 px-3 menu-box fs-7">
                            <div class="sub-icon-box"><i class="bi bi-box-arrow-right"></i></div>
                            <div>Sign Out</div>
                        </div>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>
