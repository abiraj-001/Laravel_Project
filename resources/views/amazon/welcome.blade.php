<x-master>

    {{-- body-content --}}
    <div class="mt-1 " ng-show="category.selected">


        <div class=" position-relative" style="margin-left: 200px;margin-right: 200px">
            {{-- carosel --}}

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner mask1">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/img/car1.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/car2.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/car3.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/car4.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/car5.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>




        {{-- div images --}}
        <div class="container-fluid position-absolute top-100 start-50 translate-middle mt-5 ">
            <div class="row row-cols-1 row-cols-md-3 g-5 mt-5" style="margin-left: 180px;margin-right:180px;">
                @foreach ($category as $categorys)
                    <div class="col">
                        <div class="card h-100 mt-3 p-3 border border-5 border-dark">
                            <h5
                                class="card-title h3 text-center bg-primary  py-4 text-white  border border-5 border-secondary">
                                {{ $categorys->category_list }}</h5>
                            <div class="mt-4">
                                <div class="">
                                    <img src="{{ asset('assets/img/products/' . $categorys->category_images . '') }}"
                                        height="200px " width="100%" class="img-fluid  border border-5 border-white">
                                    <h5 class="mt-3 text-center">{{ $categorys->slug_name }}</h5>
                                </div>
                            </div>
                            <div class="card-body text-center ">
                                @if ($categorys->category_list == 'Mobiles')
                                    <a class="card-title h5 text-white btn btn-success text-center"
                                        href="amazon/search?selectedCategory=ALL&searchproduct=Mobiles">Click & Show
                                        More</a>
                                @elseif($categorys->category_list == 'Laptops')
                                    <a class="card-title h5 text-white btn btn-success"
                                        href="amazon/search?selectedCategory=ALL&searchproduct=Laptops">Click & Show
                                        More</a>
                                @elseif($categorys->category_list == 'Headphones')
                                    <a class="card-title h5 text-white btn btn-success"
                                        href="amazon/search?selectedCategory=headphones&searchproduct=headphones">Click
                                        & Show More</a>
                                @elseif($categorys->category_list == 'Shoes')
                                    <a class="card-title h5 text-white btn btn-success"
                                        href="amazon/search?selectedCategory=Shoes&searchproduct=Shoes">Click & Show
                                        More</a>
                                @elseif($categorys->category_list == 'Watch')
                                    <a class="card-title h5 text-white btn btn-success"
                                        href=" amazon/search?selectedCategory=watch&searchproduct=watch">Click & Show
                                        More</a>
                                @elseif($categorys->category_list == 'Books')
                                    <a class="card-title h5 text-white btn btn-success"
                                        href="amazon/search?selectedCategory=Books&searchproduct=Books">Click & Show
                                        More</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <div>
    </div>
    </div>
    </div>



{{-- Trending default card --}}


<div class="container " style="margin-top: 1000px"> 
    <h1 class="text-center">Trending Products</h1>
    <div id="carouselExampleControlss" class="carousel slide mt-5" data-bs-ride="carousel">
      <div class="carousel-inner mask1">
          <div class="carousel-item active">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col d-block w-25">
                <div class="card h-100">
                  <img src="{{ asset('assets/img/products/Axus.jpg') }}" height="200px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Mobiles</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col d-block w-25">
                <div class="card h-100">
                  <img src="{{ asset('assets/img/products/head1.jpg') }}" height="200px" class="card-img-top" alt="..." >
                  <div class="card-body">
                    <h5 class="card-title">HeadPhone</h5>
                    <p class="card-text">This is a short card.</p>
                  </div>
                </div>
              </div>
              <div class="col d-block w-25">
                <div class="card h-100">
                  <img src="{{ asset('assets/img/products/shoo1.jpg') }}" height="200px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Shoo</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
              </div>
              <div class="col d-block w-25">
                <div class="card h-100">
                  <img src="{{ asset('assets/img/products/vivo_lap.jpg') }}"   height="200px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Laptop</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col d-block w-25">
                <div class="card h-100">
                  <img src="{{ asset('assets/img/car2.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col d-block w-25">
                <div class="card h-100">
                  <img src="{{ asset('assets/img/car2.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a short card.</p>
                  </div>
                </div>
              </div>
              <div class="col d-block w-25">
                <div class="card h-100">
                  <img src="{{ asset('assets/img/car2.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
              </div>
              <div class="col d-block w-25">
                <div class="card h-100">
                  <img src="{{ asset('assets/img/car2.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col d-block w-25">
                <div class="card h-100">
                  <img src="{{ asset('assets/img/car2.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col d-block w-25">
                <div class="card h-100">
                  <img src="{{ asset('assets/img/car2.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a short card.</p>
                  </div>
                </div>
              </div>
              <div class="col d-block w-25">
                <div class="card h-100">
                  <img src="{{ asset('assets/img/car2.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
              </div>
              <div class="col d-block w-25">
                <div class="card h-100">
                  <img src="{{ asset('assets/img/car2.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
   
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlss"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlss"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
  </div>  
  </div>



    <script src="{{ asset('js/amazon/amazon.js') }}"></script>


    <script>
        // Initiate zoom effect:
        imageZoom("myimage", "myresult");
    </script>

</x-master>
