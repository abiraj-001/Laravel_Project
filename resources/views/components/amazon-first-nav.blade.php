<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amazon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('js/amazon/angular.js') }}"></script>
    <script src="https://kit.fontawesome.com/20e02a2b9a.js" crossorigin="anonymous"></script>
</head>
<style>
    /* body {
        overflow: hidden;
    } */
    .mask1 {
        -webkit-mask-image: linear-gradient(black, transparent);
        mask-image: linear-gradient(black, transparent);
    }

    .over {
        overflow-y: scroll;
        height: 300px;
    }

    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: rgb(241, 101, 31);
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #0bf3bd;
    }

    .overside {
        overflow-y: scroll;
        height: 100vh;
        width: 100%;
    }

    .oversides {
        overflow-y: scroll;
        height: 160px;

    }

    .checked {
        color: orange;
    }

    .dropbtns {
        background-color: #04AA6D;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    .dropdowns {
        position: relative;
        display: inline-block;
    }

    .dropdown-contents {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-contents a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-contents a:hover {
        background-color: #ddd;
    }

    .dropdowns:hover .dropdown-contents {
        display: block;
    }

    .dropdowns:hover .dropbtns {
        background-color: #3e8e41;
    }

    .triangleDrop {
        width: 20px;
        height: 20px;
        transform: rotate(45deg);
        background: rgb(245, 243, 243);
        position: absolute;
        top: -10px;
        left: 41%;
    }
   

    /* .dropdown-contents a:nth-child(1) {
        background: rgb(241, 158, 85); b
    } */
</style>


<body >

    


    <div>


        <nav class="navbar navbar-expand-lg bg-dark fixed-top ">


            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/ama.png') }}" class="img-fluid"
                        height="100px" width="100px" alt=""></a>

                <p class="fw-bold text-white ms-2 mt-2"><i class="fa-solid fa-location-dot p-2"></i>Select your address
                </p>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-white " id="navbarText">

                    <form action="" method="get">
                     @csrf
                    <div class="input-group ms-3">


                    <select class="form-select form-select-lg mb-3"  name="selectedCategory">
                        <option >ALL</option>
                        @foreach ($category as $categorys)
                        <option >{{ $categorys->category_list }}</option>
                        @endforeach
                    </select>
           
                
                        <input type="text" class="form-control"   aria-label="Text input with dropdown button">
                        <input id="nav-search-submit-button" type="submit"
                            class="nav-input nav-progressive-attribute bg-warning px-3" value="Gooo" tabindex="0">
                    </div>
                </form>



                    <p class="px-2 text-white px-4">
                        <!-- Example single danger button -->
                    <div class="btn-group">
                        <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="{{ asset('assets/img/flag.webp') }}" class="img-fluid" height="50px"
                                width="50px" alt="">

                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            English - EN
                                        </label>
                                    </div>
                                </a></li>

                            <li><a class="dropdown-item" href="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            हिन्दी - Hi
                                        </label>
                                    </div>
                                </a></li>
                            <li><a class="dropdown-item" href="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
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
                    <div class="dropdowns">
                        <a class=" btn text-white " href=''>
                            Sign in Account <i class="fa-solid fa-caret-down"></i>
                            <div class="dropdown-contents ">

                                @if (Route::has('login'))

                                    @auth
                                        <a href="{{ url('/amazon') }}"
                                            class="h4 btn btn-success btn-outline-danger rounded p-3"><span
                                                class="h4">Home</span></a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
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
                            </div>
                        </a>

                    </div>

                    <p class=" btn text-white px-4">
                        Returns &orders
                    </p>
                    <p class=" ps-1 btn text-white px-4">
                        <i class="fa-solid    fa-cart-arrow-down d-inline"></i>Cart
                    </p>


                </div>



            </div>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-light " style="background: #2a3342;margin-top:90px">
            <div class="container-fluid">
                <a class="navbar-brand text-white px-2 btn" href="#"><i class="fa-solid fa-sliders px-2"
                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                        aria-controls="offcanvasWithBothOptions"></i>All</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-4">
                        <li class="nav-item px-2">
                            <a class="nav-link active btn text-white px-4" type="button" aria-current="page"
                                href="#">Sellers</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link active btn text-white px-4" aria-current="page"
                                href="#">Mobile</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link active btn text-white px-4" aria-current="page"
                                href="#">Service</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link active btn text-white px-4" aria-current="page"
                                href="#">Deal's</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link active btn text-white px-4" aria-current="page"
                                href="#">Fashion</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link active btn text-white px-4" aria-current="page"
                                href="#">Electronics</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link active btn text-white px-4" aria-current="page"
                                href="#">Books</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link active btn text-white px-4" aria-current="page"
                                href="#">Prime</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link active btn text-white px-4" aria-current="page"
                                href="#">Coupens</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link active btn text-white px-4" aria-current="page"
                                href="#">Kitchen</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link active btn text-white px-4" aria-current="page"
                                href="#">Games</a>
                        </li>




                    </ul>


                    <img src="{{ asset('assets/img/lion.jpg') }}" alt="">

                </div>
            </div>
        </nav>

        {{-- Model --}}



        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
            aria-labelledby="offcanvasWithBothOptionsLabel">
            <div class="offcanvas-header">
                <div class=" overside">
                    <p class=" p-3 text-white" style="background: #2a3342">
                        <i class="fa-solid fa-user ms-5 "></i><span class="ms-3 fw-bold">Hello</span>

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

      


    <script src="{{ asset('js/amazon/amazon.js') }}"></script>
    

    <script>
        // Initiate zoom effect:
        imageZoom("myimage", "myresult");
        </script>
</body>

</html>
