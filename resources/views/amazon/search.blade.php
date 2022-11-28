<x-master>

    <style>
        .checked {
            color: orange;
        }
    </style>

    <div class="container">
        <h3 class="text-center mt-3 fw-bold">Resuls for <span class="ms-3 text-danger">{{ $products[0]->category_list }}</span></h3>
        @foreach ($SearchProducts as $categoryss)

            <a href="/amazon/product/{{ $categoryss->id }}" style="text-decoration: none" class="text-dark">
                
                <div class="row border  p-3 mt-3 g-4">

                    <div class="col-6 ">
                        {{-- <img src="http://abiraj_aprtrdev.test/assets/img/products/{{ $categoryss->product_images }}"
                            alt="..." height="300px" width="400px"> --}}
                            <img src="{{ asset('assets/img/products/' . $categoryss->product_images .'')}}"
                            alt="..." height="300px" width="400px">
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

                        <div class="row mt-2">
                            <button class="btn btn-info p-2 w-50 "> <span class="h5">Limit to deal</span> </button>
                        </div>
                        <div class="row">
                            <h3 class="mt-3 "><span class="text-danger ">Product-Price : </span>₹
                                {{ $categoryss->product_price }}</h3>
                        </div>

                    </div>
                </div>
            </a>
        @endforeach




    </div>
 



    <div class="text-center mt-3">
        <a href='/amazon' class="btn btn-success  p-2">Back to Page</a>
    </div>

</x-master>
