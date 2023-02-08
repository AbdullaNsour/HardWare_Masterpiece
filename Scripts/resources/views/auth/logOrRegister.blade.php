@extends('layout')
@section('title')
    @if (Request::url() === route('register'))
        Register
    @else
        Login
    @endif
@endsection

<style>
    img{
        margin: 15px 30px 3px 0 ;
        width: 90%;
        min-width: 350px;
    }
</style>


@section('body')
    <div class="container">

            <div class="col-sm-4">
                <section id="form">
                    <!--form-->
                    @include('errorrs')
                    @if (Request::url() === route('register'))
                        <div>
                            <div class="signup-form">
                                <!--sign up form-->
                                <h2>New User Signup!</h2>
                                <form method="POST" action="{{ url('/register') }}">
                                    @csrf
                                    <input type="text" placeholder="Name" name="name" />
                                    <input type="email" placeholder="Email Address" name="email" />
                                    <input type="text" placeholder="Phone number" name="phone" />
                                    <input type="password" placeholder="Password" name="password" />
                                    <input type="password" placeholder="Confirm Password" name="password_confirmation" />
                                    <button type="submit" class="btn btn-default">Signup</button>
                                </form>
                            </div>
                            <!--/sign up form-->
                        </div>
                    @else
                        <div>
                            <div class="login-form">
                                <!--login form-->
                                <h2>Login to your account</h2>
                                <form method="POST" action="{{ url('/login') }}">
                                    @csrf
                                    <input type="email" placeholder="Email Address" name="email" />
                                    <input type="password" placeholder="Password" name="password" />
                                    <span>
                                        <input type="checkbox" class="checkbox" name="remember">
                                        Keep me signed in
                                    </span>
                                    <button type="submit" class="btn btn-default">Login</button>
                                </form>
                            </div>
                            <!--/login form-->

                        </div>
                    @endif
                </section>
            </div>
            <div class="col-sm-4">
                <img  src="{{ asset('images/home/login.png') }}" alt="">
            </div>
    </div>
    </div>

    <!--/form-->
@endsection
