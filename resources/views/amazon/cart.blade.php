{{-- @foreach ($showcart as $cart)

    {{ $cart->product_brand }}

@endforeach --}}


<x-master>

    <style>
        .checked {
            color: orange;
        }
    </style>
@auth
<div class="container">
    {{-- <h3>Resuls for <span class="ms-3 text-danger">{{ $products[0]->category_list }}</span></h3> --}}
    @if ($showcart->isNotEmpty())
    @foreach ($showcart as $categoryss)
        <a href="" style="text-decoration: none" class="text-dark">

            <div class="row border  p-3 mt-3 g-4">

                <div class="col-6 ">
                    {{-- <img src="http://abiraj_aprtrdev.test/assets/img/products/{{ $categoryss->product_images }}"
                        alt="..." height="300px" width="400px"> --}}
                    <img src="{{ asset('assets/img/products/' . $categoryss->product_images . '') }}" alt="..."
                        height="300px" width="400px">
                </div>

                <div class="col-6">
                    <div class="row mt-2">
                        <h1 class=" "><span class="text-danger ">Product-brand :
                            </span>{{ $categoryss->product_brand }}</h1>
                    </div>
                    <div class="row mt-2">
                        <p class="h6">{{ $categoryss->specification }}</p>
                    </div>


                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>

                    {{-- <div class="row mt-2">
                        <button class="btn btn-secondary p-2 w-50 rounded-5 "> <span class="h4">Limit to deal to sale</span> </button>
                    </div> --}}
                    <div class="row">
                        <h3 class="mt-3 "><span class="text-danger ">Product-Price : </span>₹
                            {{ $categoryss->product_price }}</h3>
                    </div>

                    <div class="d-flex justify-content-start mt-3 ">


            
                        @auth
                        <form action="{{ url('amazon/cart/buy/' . $categoryss->product_brand . '') }}" method="post">
                            @csrf
                            
                         <button class="btn btn-success rounded-5 ms-3 px-5"  name="buyaddcart"
                                    value="{{ $categoryss->id }}" type="submit"><span class="h3">Buy</span></button>

                        </form>
                  
                    @endauth



                        @auth
                            <form action="{{ url('/amazon/cart-delete/' . $categoryss->id. '') }}" method="get">
                                @csrf
                                <button class="btn btn-danger rounded-5 ms-3 px-5" name="cartremove" value="{{ $categoryss->id }}"
                                    type="submit" value=""><span class="h3"> Remove</span></button>

                            </form>
                        @endauth


                    </div>
         
    

                </div>
            </div>


        </a>
    @endforeach
    @else
    <div class="mt-3 border border-5 rounded-5">
        <h1 class="text-center ">No Cart Products</h1>
    </div>
           
            @endif

    <div class="mt-3 rounded-5">
        @if (Session::has('message'))
            <div class="alert alert-success text-center h3">
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

        
        @if (Session::has('remove_cart_message'))
            <div class="alert alert-danger text-center h3">
                {{ Session::get('remove_cart_message') }}
        @endif
    </div>
</div>
</div>
</div>


</div>



<div class="text-center mt-3">
    <a href='/amazon' class="btn btn-success rounded-5 p-2  mt-3"><span class="h3"> Back to Page</span> </a>
</div>

@endauth
@guest
<div class="mt-5 border rounded-5 container p-5 border-5">

<h1 class="text-center text-primary">You are a New Customer, Please login...!</h1>
</div>
@endguest
</x-master>
