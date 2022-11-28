<style>
    /* .sideBar li{
        border-radius: 20px;
        color: rgb(14, 2, 2);
        text-shadow: 1px 1px 1px rgb(254, 0, 0);

    }
    .sideBar a{
        color: black;
    } */
    /* .sideBar li:hover{
        background: rgb(239, 151, 124);
        cursor: pointer;
        border-radius: 20px;
    } */
    .atag{
    color: rgb(18, 18, 18);
    text-decoration: none;
    border-radius: 10px;
}

.active{
    background-color: rgb(158, 233, 237);
}




</style>

<ul  style="list-style-type:none;" class="sideBar p-3 px-3 text-center ">
    <li class=" py-3 atag @if(Request::path()=='tweets') active @endif">
        <i class="fa-solid fa-house-chimney-window fs-3"></i>
        <a href="{{ route('home') }}" class="fw-bold h3 ms-2 atag @if(Request::path()=='home') active @endif" style="text-decoration:none;">Home </a>
    </li>
    <li class=" py-3 atag @if(Request::path()=='explore') active @endif">
        <i class="fa-solid fa-hashtag fs-3 "></i>
        <a href="{{ url('explore') }}" class="fw-bold h3 ms-2    " style="text-decoration:none;">Explore</a>
    </li>

    <li class="py-3 atag @if( Request::path() == 'profiles/'.auth()->user()->username ) active @endif">
        <i class="fa-solid fa-user fs-3"></i>
        <a href="{{ route('profile', ['user' => auth()->user()]) }}" class="fw-bold h3 ms-2" style="text-decoration:none;">Profile</a>
    </li>


    
    {{-- <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link   fs-3  text-dark   fw-bold  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>
      
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
           
        </div>
    </li> --}}
</ul>
