

    <div class="shadow-md my-2 p-5">
        <div class="flex justify-between p-0">
            <div class="font-medium">{{$idea->username}}</div>
            <div class="font-thin">{{$idea->created_at}}</div>
        </div>
        <div class="my-4">
            {{$idea->idea}}
        </div>
        <div class="flex w-full justify-between items-center">

                @if ($liked->contains('idea_id', $idea->id) )
                    <form action="{{route('idea.unlike', ['id' => $idea->id])}}" method="post">
                        @csrf
                        <div class="flex flex-1 w-16  justify-center items-center font-medium text-center  h-10 transition ease-in-out delay-150 bg-blue-500 text-white hover:bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
                            <button type="submit" name="like_post" class="flex flex-row justify-center items-center">
                                <i class="bi bi-star"></i>
                                <p class="px-1">{{$idea->likes}}</p>
                            </button>
                        </div>
                    </form>

                @else
                    <form action="{{route('idea.like', ['id' => $idea->id])}}" method="post">
                        @csrf
                        <div class=" border border-solid border-black flex flex-1 w-16 justify-center items-center font-medium text-center  h-10 transition ease-in-out  bg-white-200 text-black hover:bg-blue-500 hover:text-white hover:border-0">
                            <button type="submit" name="like_post" class="flex flex-row justify-center items-center">
                                <i class="bi bi-star"></i>
                                <p class="px-1">{{$idea->likes}}</p>
                            </button>
                        </div>
                    </form>
                @endif

                    @include('feed.send-comment')
        </div>


    </div>

