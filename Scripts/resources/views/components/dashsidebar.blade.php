{{-- All Products task:
    1- add (add products button)
    2- change style
     --}}

<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ url('/admin/pindingorders') }}">
            <span class="align-middle">Dash Board</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item @yield('pinding')">
                <a class="sidebar-link" href="{{ url('/admin/pindingorders') }}">
                    <i class="fas fa-truck"></i> <span class="align-middle">Pinding Orders</span>
                </a>
            </li>

            <li class="sidebar-item @yield('allorders')">
                <a class="sidebar-link" href="{{ url('/admin/allorders') }}">
                    {{-- <i class="fas fa-truck-moving"></i> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                    </svg>
                    <span class="align-middle">All Orders</span>
                </a>
            </li>

            <li class="sidebar-item @yield('return')">
                <a class="sidebar-link" href="{{ url('/admin/returnrequest') }}">
                    {{-- <i class="fas fa-undo"></i> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                        <path
                            d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                    </svg>
                    <span class="align-middle">Return Requests</span>
                </a>
            </li>

            @if ($user->role == 'admin' || $user->role == 'super_admin')
                <li class="sidebar-item @yield('addproduct')">
                    <a class="sidebar-link" href="{{ url('/admin/addproduct') }}">
                        {{-- <i class="far fa-plus-square"></i>  --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                        </svg>
                        <span class="align-middle">Add product</span>
                    </a>
                </li>
                <li class="sidebar-item @yield('allproducts')">
                    <a class="sidebar-link" href="{{ url('/admin/filterproducts?keyword=&brand=All&cat=All') }}">
                        <i class="fas fa-desktop"></i> <span class="align-middle">All products</span>
                    </a>
                    {{-- fix the route to allproducts problem id 
                        <a class="sidebar-link" href="{{ url('/admin/allproducts') }}">
                        <i class="fas fa-desktop"></i> <span class="align-middle">All products</span>
                    </a> --}}
                </li>

                <li class="sidebar-item @yield('cat')">
                    <a class="sidebar-link" href="{{ url('/admin/cats') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z" />
                        </svg>
                        {{-- <i class="fas fa-memory"></i> --}}
                        <span class="align-middle">Categorys</span>
                    </a>
                </li>

                <li class="sidebar-item @yield('brand')">
                    <a class="sidebar-link" href="{{ url('/admin/brands') }}">
                        {{-- <i class="fas fa-microchip"></i> --}}

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-tags-fill" viewBox="0 0 16 16">
                            <path
                                d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                            <path
                                d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z" />
                        </svg>
                        <span class="align-middle">Brands</span>
                    </a>
                </li>
            @endif

            @if ($user->role == 'super_admin')
                <li class="sidebar-item @yield('user')">
                    <a class="sidebar-link" href="{{ url('/admin/users') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        {{-- <i class="align-middle" data-feather="user"></i> --}}
                        <span class="align-middle">Users</span>
                    </a>
                </li>
            @endif



    </div>
</nav>
