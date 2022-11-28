<style>
        .shadow{
        border-radius: 20px;
        color: rgb(255, 1, 1);
        /* text-shadow: 1px 1px 1px rgb(252, 250, 250); */
    }

</style>


<div class="container ">
    <form action="{{ url('/tweets') }}"  method="post">
        @csrf
        <div class=" container border border-info rounded-5 border-5 p-3 shodow">
            <textarea class="form-control fs-5" placeholder="Leave a comment here" name="body"
                style="height:200px; width:100%"></textarea>


            <hr>
            <div class="d-flex justify-content-between container">
                <div> <img src="{{ auth()->user()->avatar }}" height="50px" width="50px" class="rounded-circle"
                        alt=""></div>
                        <div class="mb-3">
                                  {{-- <input class="form-control" type="file" name='img' id="formFile"> --}}
                          </div>
                <div><button class=" btn-primary rounded-pill fs-4" type="submit">Publish</button></div>
            </div>

        </div>
        <div>
            @error('body')
    <p class="text-danger fs-3">{{ $message }}</p>
            @enderror
        </div>
    </form>

</div>
