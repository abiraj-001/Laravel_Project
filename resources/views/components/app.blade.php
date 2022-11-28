<x-main>

   <section class="px-5">



            <main class="container-fluid mx-auto">
                <div class="row">
        
                    @if(auth()->check())
                    <div class="col-lg-2">
                        @include('tweety.sidebar_links')
                    </div>
                    @endif


                    <div class="col-lg-8">
                        {{ $slot }}
                    </div>




                    @if(auth()->check())
                   <div class="col-lg-2">
                        @include('tweety.friends_list')
                    </div>
                    @endif


                </div>


            </main>


        </section>










</x-main>   