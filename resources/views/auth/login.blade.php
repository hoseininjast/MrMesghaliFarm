@extends('layouts.Front.Master')

@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2 class="text-darkyellow">ورود</h2>
                        <ul>
                            <li><a href="{{route('Front.index')}}">خانه</a></li>
                            <li>ورود</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->


    <!-- Start Login Area -->
    <div class="login-section ptb-100">
        <div class="container">
            <div class="login-form">
                <div class="login-title">
                    <h3>خوش آمدید!</h3>
                    <p>وارد حساب کاربری خود شوید</p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="ایمیل خود را وارد کنید">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="رمز عبور خود را وارد کنید">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">مرا بخاطر بسپار</label>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="send-btn">

                                <button type="submit" class="default-btn">
                                    ورود
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Login Area -->

@endsection
