<x-app-layout class="flex-col">
    <div class="flex-row items-center max-w-md">
            @include('feed.share-idea')

            @if ($errors->has('user_comment'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    alert('{{ $errors->first('user_comment') }}');
                });
            </script>
            @endif

        @foreach ($ideas as $idea )
            @include('feed.feed')
        @endforeach
    </div>
</x-app-layout>
