
<div class="border border-5 border-info  rounded-5 ">
    <h3 class="text-center fw-bold">Followers</h3>


    <ul  style="list-style-type:none;" class='m-4 '>
        @forelse(auth()->user()->follows as $user)
    <li class="py-3">
        <a href="{{ route('profile',$user) }}" style="text-decoration:none;" class="text-dark"   >
        <h3><img src="{{ $user->avatar }}" height="50px" width="50px" class="rounded-circle" alt=""> {{$user->name}}
    </h3></a>

</li>
@empty

<h1>No Followers Yet...</h1>
    @endforelse

    </ul>
</div>

