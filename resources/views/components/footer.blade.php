{{-- <footer id="footer">
    <!--Footer-->
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-widget">
                        <h2>Fast shopping by category</h2>
                        <ul class="nav nav-pills nav-stacked">
                            @foreach ($cats as $cat)
                                <li><a href="{{ url("/cat/$cat->id") }}">{{ $cat->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="single-widget">
                        <h2>Shortuts</h2>
                        <ul class="nav nav-pills nav-stacked">
                            @guest
                                <li><a href="{{ url('/login') }}">Registe/Login</a></li>
                            @endguest
                            @auth
                                <li><a href="{{ url('/profile') }}">Profile</a></li>
                                <li><a href="{{ url('/cart/' . $user->cart->id) }}">Cart</a></li>
                                <li><a href="{{ url('/showorders') }}">View my orders</a></li>
                                <li><a href="{{ url('/editinfo') }}">Edit account informations</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2023 Nsour-Hardware. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href=#>Abdulla Nsour</a></span></p>
            </div>

            <ul class="social-icons pull-right ">


                <li><a href="https://www.facebook.com/lrdwalid/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://github.com/WalidAymen"><i class="fab fa-github"></i></a></li>
                <li><a href="https://www.linkedin.com/in/walid-elweshahy-63a53b196/"><i class="fa fa-linkedin"></i></a>
                </li>
            </ul>
        </div>
    </div>

</footer> --}}

    {{-- new --}}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="">
        <section style="height:80px;"></section>
        <div class="row" >
        </div>
        <!----------- Footer ------------>
        <footer class="footer-bs nsourfooter">
            <div class="row">
                <div class="col-md-3 footer-brand animated fadeInLeft">
                    <h2>PCHardWare</h2>
                    <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies.
                        Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque
                        ex mi ut sem.</p>
                    <p>Copyright © 2023 PCHardWare. All rights reserved</p>
                </div>
                <div class="col-md-4 footer-nav animated fadeInUp">
                    <h4>Menu —</h4>
                    <div class="col-md-6">
                        <ul class="pages">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Nature</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 footer-social animated fadeInDown">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-ns animated fadeInRight">
                    <h4>Search</h4>
                    <p>Search on what you need in PCHardWare</p>
                    <p>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><span
                                    class="glyphicon glyphicon-envelope"></span></button>
                        </span>
                    </div><!-- /input-group -->
                    </p>
                </div>
            </div>
        </footer>
    </div>


<!--/Footer-->
