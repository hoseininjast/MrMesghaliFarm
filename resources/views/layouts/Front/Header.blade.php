<div class="navbar-area navbar-style-two">
    <div class="trifles-responsive-nav">
        <div class="container">
            <div class="trifles-responsive-menu">
                <div class="logo">
                    <a href="{{route('Front.index')}}">
                        <img width="60" src="{{asset('images/Logo.png')}}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="trifles-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('Front.index')}}">
                    <img width="100" class="p-2" style="border-radius: 50%" src="{{asset('images/Logo.png')}}" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">


                        <li class="nav-item">
                            <a href="{{route('Front.index')}}" class="nav-link">
                                خانه
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('Front.About')}}" class="nav-link">
                                فروشگاه
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('Front.Collaboration')}}" class="nav-link">
                                همکاری با ما
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('Front.About')}}" class="nav-link">
                                درباره ما
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('Front.Contact')}}" class="nav-link">
                                تماس با ما
                            </a>
                        </li>
                    </ul>

                    <div class="others-options">

                        @auth
                        <div class="cart-btn">
                            <a href="{{route('Front.Panel.index')}}">
                                <i class="fa fa-user text-darkyellow"></i>
                            </a>
                        </div>

                            <div class="cart-btn">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off text-darkyellow"></i>
                                </a>
                            </div>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @else
                            <div class="cart-btn">
                                <a href="{{route('Front.Panel.index')}}">
                                    <i class="fa-solid fa-arrow-right-to-bracket text-darkyellow"></i>
                                </a>
                            </div>

                        @endguest


                        <div class="cart-btn">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span>0</span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
