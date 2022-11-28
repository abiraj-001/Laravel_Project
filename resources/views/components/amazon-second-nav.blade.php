<nav class="navbar navbar-expand-lg navbar-light" style="background: #2a3342">
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
                    <a class="nav-link active btn text-white px-4" aria-current="page" href="#">Mobile</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link active btn text-white px-4" aria-current="page" href="#">Service</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link active btn text-white px-4" aria-current="page" href="#">Deal's</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link active btn text-white px-4" aria-current="page" href="#">Fashion</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link active btn text-white px-4" aria-current="page" href="#">Electronics</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link active btn text-white px-4" aria-current="page" href="#">Books</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link active btn text-white px-4" aria-current="page" href="#">Prime</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link active btn text-white px-4" aria-current="page" href="#">Coupens</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link active btn text-white px-4" aria-current="page" href="#">Kitchen</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link active btn text-white px-4" aria-current="page" href="#">Games</a>
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