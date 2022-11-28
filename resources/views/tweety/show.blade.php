<x-app>
    {{-- <h3>profiles page for {{ $user->name }}</h3>
    <hr> --}}

    <header class="mt-2">
        <div class="position-relative position-relative-example">
            <img src="{{ asset('images/banner.jpg') }}" alt="" height="300" width="100%">


            <div class="position-absolute top-100 start-50 translate-middle"> <img src="{{ $user->avatar }}"
                    height="190px" width="190px" class="rounded-circle" alt=""></div>
        </div>

        <div class="d-flex justify-content-between container">
            <div class="m-3">
                <h2>{{ $user->name }}</h2>
                <p>Joined {{ $user->created_at->diffForHumans() }}</p> 
            </div>
            <div>
               @can('edit',$user)
                <a href="{{ $user->path('edit') }}" class="p-3 btn-danger text-white fw-bold pt-5  fs-5 rounded-pill">Edit Profile</a>
                @endcan
            <x-follow-button :user="$user">


            </x-follow-button>



            </div>

        </div>
        <h3 class="p-2 m-2">
           
        </h3>
    </header>
    @include('tweety.timeline',[
    'tweets'=>$tweets
    ])
</x-app>
