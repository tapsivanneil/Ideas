<x-app-layout>
    @foreach ($comments as $comment )
        <div class="flex justify-between p-0">
            <div class="font-medium">{{$comment->username}}</div>
            <div class="font-thin">{{$comment->created_at}}</div>
        </div>

        <div class="my-4">
            {{$comment->comment}}
        </div>
    @endforeach
</x-app-layout>
