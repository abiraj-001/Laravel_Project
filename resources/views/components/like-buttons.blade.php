<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<style>
    .design:hover {
        background-color: var(--i);

    }

    .fa {
        font-size: 30px;
        cursor: pointer;
        user-select: none;
    }

    .fa:hover {
        color: rgb(99, 220, 238);
    }
    
</style>
<div class="d-flex justify-content-start">

    <div class="p-2">
        <form method="POST" action="/tweets/{{ $tweet->id }}/like">
            @csrf

            <div class="">
                <button type="submit" class="btn fs-3 design" style="--i:skyblue"><i class="fa-solid fa-thumbs-up "></i>
                </button>
                <span class="fs-3 text-dark ">
                    {{ $tweet->likes ?: 0 }}
                </span>
            </div>
        </form>
    </div>

    <div class="p-2 ">
        <form method="POST" action="/tweets/{{ $tweet->id }}/like">
            @csrf
            @method('DELETE')

            <div>


                <button type="submit" class="btn fs-3 design" style="--i:violet">
                    <i class="fa-solid fa-thumbs-down  text-dark"></i>
                </button>
                <span class="fs-2 text-dark ms-2 ">
                    {{ $tweet->dislikes ?: 0}}
                </span>

            </div>
        </form>

    </div>

    <div class="p-2 ">
        <i onclick="myFunction(this)" class="fa fa-thumbs-up textdark"></i>

    </div>
 
<div>

</div>


</div>
<script>
var lClicks = 0;
var dClicks = 0;
    function myFunction(x) {
        x.classList.toggle("fa-thumbs-down");
    };




</script>
