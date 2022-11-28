                        <!DOCTYPE html>
                        <html lang="en">

                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <meta http-equiv="X-UA-Compatible" content="ie=edge">
                            <title>Amazon</title>

                            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
                            <script src="{{ asset('js/app.js') }}"></script>
                            <link rel="stylesheet" href="{{ asset('css/style.css') }}">


                            <link rel="stylesheet" href="{{ asset('sass/app.css') }}">
                            <link rel="shortcut icon" href="{{ asset('assets/img/amazon.webp') }}" type="image/x-icon">
                            <script src="{{ asset('js/amazon/angular.js') }}"></script>

                        </head>



                        <body>

                            <div>


                                <nav class="navbar navbar-expand-lg bg-dark fixed-top ">


                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/ama.png') }}"
                                                class="img-fluid" height="100px" width="100px" alt=""></a>

                                        <p class="fw-bold text-white ms-2 mt-2"><i
                                                class="fa-solid fa-location-dot p-2"></i>Select your address
                                        </p>

                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#navbarText" aria-controls="navbarText"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse text-white " id="navbarText">
                                            <div>
                                                <form action="{{ url('/amazon/search/') }}" method="get">
                                                    {{-- @csrf --}}
                                                    <div class="input-group  ms-3">

                                                        {{-- <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">All Categories</button> 
                            
                                                <ul class="dropdown-menu ">
                                                    @foreach ($category as $categorys)
                                                    <li ><a class="dropdown-item btn " href="{{ url('product') }}"
                                                        class="dropdown-item btn text-dark overside"
                                                        ng-click="category.addFunc(this)">{{ $categorys->category_list }}</a>
                                                        </li>
                                                        @endforeach
                                                        </ul> --}}


                                                        <select class="" name="selectedCategory">
                                                            <option>ALL</option>
                                                            @foreach ($category as $categorys)
                                                            <option>{{ $categorys->category_list }}</option>
                                                            @endforeach
                                                        </select>


                                                        <input type="text" class="form-control"
                                                            style="padding-right: 700px" name="searchproduct">
                                                        <input id="nav-search-submit-button" type="submit"
                                                            class="nav-input nav-progressive-attribute bg-warning px-3"
                                                            value="Go" tabindex="0">
                                                    </div>
                                                </form>
                                            </div>

                                            <p class="px-2 text-white px-4">
                                                <!-- Example single danger button -->
                                                <div class="btn-group">
                                                    <button type="button" class="btn  dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img src="{{ asset('assets/img/flag.webp') }}" class="img-fluid"
                                                            height="50px" width="50px" alt="">

                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="flexRadioDefault" id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        English - EN
                                                                    </label>
                                                                </div>
                                                            </a></li>

                                                        <li><a class="dropdown-item" href="#">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="flexRadioDefault" id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        हिन्दी - Hi
                                                                    </label>
                                                                </div>
                                                            </a></li>
                                                        <li><a class="dropdown-item" href="#">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="flexRadioDefault" id="flexRadioDefault1">
                                                                    <label class="form-check-label"
                                                                        for="flexRadioDefault1">
                                                                        தமிழ் - TA
                                                                    </label>
                                                                </div>
                                                            </a></li>

                                                        <li>
                                                            <hr class="dropdown-divider">
                                                        </li>

                                                    </ul>
                                                </div>
                                            </p>



                                            <div class="dropdown text-white">
                                                @guest
                                                <button class="btn dropdown-toggle text-white" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Sign in
                                                </button>
                                                @endguest

                                                @auth
                                                <button class="btn  dropdown-toggle text-white" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    @if (auth()->user()->admin == '2' )
                                                    PRIME {{ Auth::user()->name }}

                                                    @elseif(auth()->user()->admin == '0')
                                                    WELCOME {{ Auth::user()->name }}

                                                    @elseif(auth()->user()->admin == '1')
                                                    Signin
                                                    @endif


                                                </button>
                                                @endauth

                                                <ul class="dropdown-menu">
                                                    <li class="ms-3 ps-3"><a class="dropdown-item" href="#">

                                                            @if (Route::has('login'))

                                                            @auth
                                                            <a href="{{ url('/amazon') }}"
                                                                class="h4 btn btn-success btn-outline-danger rounded p-3"><span
                                                                    class="h4">Home</span></a>


                                                            <form id="logout-form" action="{{ route('logout') }}"
                                                                method="POST">
                                                                @csrf
                                                                <button type="submit"
                                                                    class=" h4 btn btn-success btn-outline-danger rounded p-3 w-100"><span
                                                                        class="h4">Logout </span></button>
                                                            </form>
                                                            @else
                                                            <a href="{{ route('login') }}"
                                                                class="h4 btn btn-danger btn-outline-success  rounded "><span
                                                                    class="h4">Sign
                                                                    in</span></a>

                                                            @if (Route::has('register'))
                                                            <a href="{{ route('register') }}"
                                                                class="h4 btn btn-success btn-outline-danger  rounded "><span
                                                                    class="h4">Register</span></a>
                                                            @endif
                                                            @endauth

                                                            @endif

                                                        </a></li>


                                                </ul>
                                            </div>

                                           <div class="btn-group ms-3">
                                                    <button type="button" class="btn  dropdown-toggle text-white"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Category
                                                    </button>
                                                    <ul class="dropdown-menu text-center">
                                                        <li><a class="dropdown-item btn" href="/amazon/admin/category/add">
                                                     Add
                                                            </a></li>

                                                        <li><a class="dropdown-item btn" href="/amazon/admin/category/remove">
                                                           Remove
                                                            </a></li>
                                                        <li><a class="dropdown-item btn" href="/amazon/admin/category/update">
                                                                Update
                                                            </a></li>


                                                    </ul>
                                                </div>


                                                             <div class="btn-group ms-5">
                                                    <button type="button" class="btn  dropdown-toggle text-white"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Products
                                                    </button>
                                                    <ul class="dropdown-menu text-center">
                                                        <li><a class="dropdown-item btn" href="/amazon/admin/product/add">
                                                     Add
                                                            </a></li>

                                                        <li><a class="dropdown-item btn" href="/amazon/admin/product/remove">
                                                           Remove
                                                            </a></li>
                                                        <li><a class="dropdown-item btn" href="/amazon/admin/product/update">
                                                                Update
                                                            </a></li>


                                                    </ul>
                                                </div>

                                    
                                            @auth
                                            <a class=" ps-1 btn text-white px-4 ms-5 " href="/amazon/user-account">
                                                <i class="fa-solid fa-cart-arrow-down d-inline"></i>User Account
                                            </a>
                                            @endauth

                                            @guest
                                            <a class=" ps-1 btn text-white px-4 ms-5" href="/login">
                                                <i class="fa-solid fa-cart-arrow-down d-inline"></i>User Account
                                            </a>
                                            @endguest

                                          



                                        </div>
                                    </div>
                                </nav>

                                <nav class="navbar navbar-expand-lg navbar-light mb-5"
                                    style="background: #2a3342;margin-top:90px">
                                    <div class="container-fluid">
                                        <a class="navbar-brand text-white px-2 btn" href="#"><i
                                                class="fa-solid fa-sliders px-2" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasWithBothOptions"
                                                aria-controls="offcanvasWithBothOptions"></i>All</a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#navbarSupportedContent"
                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                            aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav me-auto  mb-lg-0 px-4">
                                                @foreach ($category as $categorys)
                                                <li class="nav-item px-2">
                                                    <a class="nav-link active btn text-white px-4" type="button"
                                                        aria-current="page" href="#">{{$categorys->category_list }}</a>
                                                </li>
                                                @endforeach
                
                                            </ul>



                                            <a href="">
                                                <img src="{{ asset('assets/img/lion.jpg') }}" alt="">

                                            </a>

                                        </div>
                                    </div>
                                </nav>

                                {{-- Model --}}



                                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
                                    id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                    <div class="offcanvas-header">
                                        <div class=" overside">
                                            <p class=" p-3 text-white" style="background: #2a3342">
                                                <i class="fa-solid fa-user ms-5 "></i><span
                                                    class="ms-3 fw-bold">Hello</span>

                                                @auth
                                                <span class="ps-3">{{ Auth::user()->name }}</span>
                                                @endauth
                                                @guest
                                                <span class="ps-3">Sign in</span>
                                                @endguest


                                            </p>
                                            <div class="p-3">
                                                <h3>Trending</h1>
                                                    <p>Best sellers</p>
                                                    <p>New movie relaese</p>
                                                    <p>Movers and sakers </p>
                                            </div>
                                            <hr>
                                            <div class="p-3">
                                                <h3>Digital Content And Devices</h1>
                                                    <p>Amazon Prime vedio</p>
                                                    <p>Amazon Prime Music</p>
                                                    <p>Fire Tv</p>
                                                    <p>LED Tv</p>
                                            </div>
                                            <hr>
                                            <div class="p-3">
                                                <h3>Shop By Department</h1>
                                                    <p>Best sellers</p>
                                                    <p>New movie relaese</p>
                                                    <p>Movers and sakers </p>
                                            </div>
                                            <hr>
                                            <div class="p-3">
                                                <h3>Trending</h1>
                                                    <p>Best sellers</p>
                                                    <p>New movie relaese</p>
                                                    <p>Movers and sakers </p>
                                            </div>
                                            <hr>
                                            <div class="p-3">
                                                <h3>Trending</h1>
                                                    <p>Best sellers</p>
                                                    <p>New movie relaese</p>
                                                    <p>Movers and sakers </p>
                                            </div>
                                            <hr>


                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="container">
                                        @if (Session::has('prime_message'))
                                        <div class="alert alert-primary text-darke h3">
                                            {{ Session::get('prime_message') }}
                                            @endif
                                        </div>
                                    </div>

                                    <div class="container">
                                        @if (Session::has('prime_not_message'))
                                        <div class="alert alert-primary text-darke h3">
                                            {{ Session::get('prime_not_message') }}
                                            @endif
                                        </div>
                                    </div>


                                    {{ $slot }}
                                </div>



                                <script src="{{ asset('assets/js/main.js') }}"></script>
                                <script src="{{ asset('js/amazon/amazon.js') }}"></script>
                        </body>

                        </html>
