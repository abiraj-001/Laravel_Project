<x-master>
    <style>
        .checked {
            color: orange;
        }
    </style>
    <div class="">
        <a href='{{ URL::previous() }}' class="btn btn-primary  p-2">Back to Page</a>
    </div>
    {{-- <x-amazon-first-nav>
</x-amazon-first-nav> --}}


    {{-- Angular dropdown category --}}
    {{-- <ul class="dropdown-menu ">

              <li class="oversides"><button class="dropdown-item"
                      ng-repeat="data in category.categoryList"
                      class="dropdown-item btn text-dark overside"
                      ng-click="category.addFunc(this)">@{{ data.category_list }}</button></li>

    </ul> --}}

    {{-- Laravel dropdown catagory --}}



    <div class="container">



        <div class="row g-4  border-info p-3 ">



            <div class="col-6 ">
                {{-- <img src="http://abiraj_aprtrdev.test/assets/img/products/{{ $category_products->product_images }}"
                alt="..." height="300px" width="400px"> --}}

                <img src="{{ asset('assets/img/products/' . $category_products->product_images . '') }}" alt="..."
                    height="300px" width="400px">
            </div>

            <div class="col-6  ">
                <div class="row  d-inline-block ">
                    <h1 class=" "><span class="text-danger ">Product-brand :
                        </span>{{ $category_products->product_brand }}</h1>
                </div>
                <div class="row ">
                    <p class="h6">{{ $category_products->specification }}</p>
                </div>

                <div class="d-flex align-items-center p-2 ">
                    <b><i class="fa-solid fa-check text-warning"></i></b>
                    <h6 class="text-info ms-2 mt-1">Prime</h6>
                    <h6 class=" text-dark mt-1 ms-2"> Get it by <b> Today, July 19</b> </h6>
                </div>
                <h6 class=" text-dark"> FREE Delivery by Amazon</h6>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>

                <div class="row mt-2">
                    <button class="btn btn-info p-2 w-50 rounded-3"> <span class="h5">Limit to deal</span> </button>
                </div>
                <div class="row">
                    <h3 class="mt-3 "><span class="text-danger ">Product-Price : </span>₹
                        {{ $category_products->product_price }}</h3>
                </div>

                <div class=" d-flex justify-content-start">
                    @auth
                        <form action="{{ url('amazon/cart/' . $category_products->product_brand . '') }}" method="post">
                            @csrf
                            <div class=" mt-3 p-2 ">
                                <button class="btn btn-warning " name="addcart" value="{{ $category_products->id }}"
                                    type="submit"><span class="h3">Add to Cart</span></button>

                            </div>
                        </form>
                    @endauth    




                    @auth
                        <form action="{{ url('amazon/buy/' . $category_products->product_brand . '') }}" method="post">
                            @csrf
                            <div class=" mt-3 p-2 ms-4">

                                <button class="btn btn-success  px-5 " name="buy" value="{{ $category_products->id }}"
                                    type="submit"><span class="h3">Buy</span></button>

                            </div>
                        </form>
                    @endauth




                    @auth
                        <form action="{{ url('amazon/favorite/' . $category_products->product_brand . '') }}"
                            method="post">
                            @csrf
                            <div class=" mt-3 p-2 ms-4">

                                <button class="btn btn-primary " name="favorite" value="{{ $category_products->id }}"
                                    type="submit"><span class="h3">Favorite</span></button>
                            </div>
                        </form>
                    @endauth


                </div>

                @guest
                    <div class=" mt-3 p-2">
                        <a class="btn btn-success rounded-5" href="/login">Add to Cart</a>
                        <a class="btn btn-danger px-5 ms-5 rounded-5" href="/login">Buy</a>
                        <a class="btn btn-primary px-5 ms-5 rounded-5" href="/login">Favorite</a>
                    </div>
                @endguest


                <div class="mt-3 rounded-5">
                    @if (Session::has('message'))
                        <div class="alert alert-warning text-center h3">
                            {{ Session::get('message') }}
                    @endif


                    @if (Session::has('buy_message'))
                        <div class="alert alert-success text-center h3">
                            {{ Session::get('buy_message') }}
                    @endif


                    @if (Session::has('fav_message'))
                        <div class="alert alert-primary text-center h3">
                            {{ Session::get('fav_message') }}
                    @endif

                </div>
            </div>
        </div>
    </div>

    </a>
    </div>

</x-master>
