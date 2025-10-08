<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">

            <img src="{{asset('images/Logo.png')}}" alt="user-img" title="admin"
                 class="rounded-circle img-thumbnail avatar-md">
            <div class="dropdown">
                <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    {{\Illuminate\Support\Facades\Auth::user()->email}}
                </a>

            </div>

        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li>
                    <a href="{{route('Dashboard.index')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboard </span>
                    </a>
                </li>






                @if(Auth::user()->Role == 'Owner')


                    <li>
                        <a href="#Contracts" data-bs-toggle="collapse">
                            <i class="mdi mdi-list-status"></i>
                            <span>  Contracts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="Contracts">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{route('Dashboard.Contracts.index')}}">All</a>
                                </li>
                                <li>
                                    <a href="{{route('Dashboard.Contracts.Add')}}">Add</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li>
                        <a href="{{route('Dashboard.BulkPurchase.index')}}">
                            <i class="mdi mdi-package"></i>
                            <span>   Bulk Purchase  </span>
                        </a>
                    </li>


                    <li>
                        <a href="{{route('Dashboard.BulkPurchase.UploadPriceList')}}">
                            <i class="mdi mdi-upload"></i>
                            <span>   Upload Price List  </span>
                        </a>
                    </li>


                    <li>
                        <a href="#Users" data-bs-toggle="collapse">
                            <i class="mdi mdi-account-multiple"></i>
                            <span>  Users </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="Users">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{route('Dashboard.Users.index')}}">All</a>
                                </li>
                                <li>
                                    <a href="{{route('Dashboard.Users.Add')}}">Add</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li>
                        <a href="#Settings" data-bs-toggle="collapse">
                            <i class="mdi mdi-cog-sync"></i>
                            <span> Settings </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="Settings">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="#">Site Setting</a>
                                </li>
                                <li>
                                    <a href="#">User Setting</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @else
                    <li>
                        <a href="#">
                            <i class="mdi mdi-cog-sync"></i>
                            <span> Settings </span>
                        </a>
                    </li>
                    @endif

                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="mdi mdi-logout-variant"></i>
                        <span> Logout </span>
                    </a>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>



            </ul>
        </div>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

