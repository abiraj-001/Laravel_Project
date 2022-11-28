<x-master>
<div class="container text-center" style="margin-left: 800px;margin-top:150px">
      <div class="card" style="width: 18rem;">
        <h2 class="text-center mt-2 fw-bold">User Profile Details</h2>
          <img src="{{ auth()->user()->avatar }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-text mt-2"><span class="fw-bold">Name :</span> {{  $user_lists[0]->name }}</h5>
            <h5 class="card-text mt-2"><span class="fw-bold">UserName :</span> {{  $user_lists[0]->username }}</h5>
            <h5 class="card-text mt-2"><span class="fw-bold">Email : </span>{{  $user_lists[0]->email }}</h5>
          </div>
        </div>
  </div>
</div>
</x-master>


