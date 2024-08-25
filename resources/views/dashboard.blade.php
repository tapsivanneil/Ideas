<x-app-layout>
    <div class="flex-row items-center max-w-md" style="width: 80%;">
            @include('feed.share-idea')
        @foreach ($ideas as $idea )
            @include('feed.feed')
        @endforeach
    </div>
</x-app-layout>
