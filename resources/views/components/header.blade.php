<header id="header">
    <nav class="navbar navbar-inverse" >
        <form id="logout-form" style="display: hidden;" action="{{ url('/logout') }}" method="post">
            @csrf
        </form>
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"href="{{ url('/index') }}">PCHardWare</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/contactus') }}">Contact us</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Categorys <span class="caret"></span></a>
                        <ul class="dropdown-menu ">
                            @foreach ($cats as $cat)
                                <li><a href="{{ url("/cat/$cat->id") }}">{{ $cat->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>

                {{-- Search  --}}

                <form action="{{ url('/search') }}" method="get" class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" name="keyword">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

                {{-- End Search  --}}

                <ul class="nav navbar-nav navbar-right">
                    @auth
                        @if ($user->role != 'customer')
                            <li><a href="{{ url('/admin/pindingorders') }}"><i class="fas fa-tools"></i> Dash Board
                                </a></li>
                        @endif

                        @if ($cart != null)
                            <li><a href="{{ url('/cart/' . $cart->id) }}"><i class="fa fa-shopping-cart"></i> Cart
                                    @if (count($cart->products) > 0)
                                        <span class="badge badge-light">{{ count($cart->products) }}</span>
                                    @endif
                                </a></li>
                        @endif
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">{{ $cart->user->name }} <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu">


                                <li><a href="{{ url('/profile') }}">
                                        <h6>profile</h6>
                                    </a></li>
                                <li><a id="logout-link" href="#">
                                        <h6>Logout</h6>
                                    </a></li>
                            </ul>
                        </li>
                    @endauth
                    @guest
                        <li><a href="{{ url('/login') }}"><i class="fa fa-lock"></i> Login</a></li>
                        <li><a href="{{ url('/register') }}"><i class="fa fa-lock"></i> Register</a></li>
                    @endguest
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
