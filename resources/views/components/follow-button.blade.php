@unless(auth()->user()->is($user))

<form method="Post" action="{{ route('follow',$user->username) }}">
    @csrf
<button type="submit" href="" class="p-3  btn-info text-white fw-bold h3 m-3 fs-5 rounded-pill ">
   {{auth()->user()->following($user)? 'Unfollow me' : 'Follow me'}}
</button>
<form>
 @endunless