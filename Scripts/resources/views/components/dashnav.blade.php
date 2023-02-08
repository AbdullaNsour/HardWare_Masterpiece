<nav class="navbar navbar-expand navbar-light navbar-bg">
    <form id="logout-dash-form" style="display: hidden;" action="{{ url('/logout') }}" method="post">
        @csrf
    </form>
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                    <div class="position-relative">
                        {{-- <i class="align-middle" data-feather="message-square"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                        </svg>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                    <div class="dropdown-menu-header">
                        <div class="position-relative">
                            Latest Messages
                        </div>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <div class="row g-0 align-items-center">
                                @foreach ($messages as $message)
                                    <div class="col-10 ps-2 my-2 border p-3 w-100 rounded">
                                        <div class=" text-center"><span
                                                class="text-info h3">{{ $message->user->name }}</span> <span
                                                class="small text-muted">({{ $message->user->email }})</span> </div>
                                        <div class="text-center text-success medium mt-1 text-uppercase">
                                            {{ $message->tittle }}</div>
                                        <div class="text-muted small mt-1">{{ $message->body }}</div>
                                    </div>
                                @endforeach

                            </div>
                        </a>
                    </div>
                    <div class="dropdown-menu-footer">
                        <a href="{{ url('/admin/allmessages') }}" class="text-muted">Show all messages</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-icon" href="{{ url('/index') }}">
                    <div class="position-relative">
                        {{-- <i class="fas fa-home"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-house-door" viewBox="0 0 16 16">
                            <path
                                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z" />
                        </svg>
                        <i class="bi bi-house-door"></i>
                    </div>
                </a>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>

                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <span class="text-dark">{{ $user->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ url('/profile') }}"><i class="align-middle me-1"
                            data-feather="user"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <input id="logout-dash" class="dropdown-item" value="Log out" type="submit"
                        form="logout-dash-form" />
                </div>
            </li>
        </ul>
    </div>

</nav>
