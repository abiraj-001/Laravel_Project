<div class="border border-gray-300 rounded-lg">
    @forelse ($tweets as $tweet)
        @include('tweety.tweet')
    @empty
        <h1 class="p-4">No tweets yet.</h1>
    @endforelse

    {{ $tweets->links() }}
</div>
