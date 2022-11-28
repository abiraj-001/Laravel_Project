<x-app>
    <style>
        .im{
        width: 50px;
        height: 50px;
        border-radius: 50%;
        }
        /* .ex{
            border: 2px solid rgb(0, 195, 255);
        } */
    </style>
    <div class=" p-3 rounded-5 text-dark  border border-info border-5">
        <h1 class="text-center bg-info p-3 rounded-5 text-dark  border border-dark border-5"> Explore Users</h1>
        <hr>
        @foreach($users as  $user)
        <div class="d-flex justify-content-start mt-5 border border-5 rounded-5 p-3 ">
            <div>
                <a href="{{ $user->path() }}" class='d-flex justify-content-between'>
                    <img src="{{ $user->avatar }}" class="im"
                    alt="{{ $user->username }}'s avatar"
                    width="60" height="80"
                    >
                </a>
            </div>
         <div class="ms-4">
    
            <a href="{{ $user->path() }}" style="text-decoration: none">
                <h2 class="font-bold text-dark">{{'Name'. ':' .' '.$user->name }}</h2>
            </a>
            <a href="{{ $user->path() }}" style="text-decoration: none">
                <h4 class="font-bold text-dark">{{ 'Username'.''.':'. ' '.'@' . $user->username }}</h4>
            </a>
    
    </div> 
    
         <div class="mt-3 ms-4">
      
            
    </div> 
        </div>
        @endforeach
    
        {{-- @foreach($tweety as  $tweet)
        <a href="{{ $user->path() }}" style="text-decoration: none">
            <h4 class="font-bold">{{  $tweet->body }}</h4>
        </a>
        @endforeach --}}
        {{ $users->links(); }}
        {{-- {{ $tweety->links(); }} --}}
    </div>
    
    </x-app>    