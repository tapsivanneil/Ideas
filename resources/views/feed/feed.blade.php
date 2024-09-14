

    <div class="shadow-md my-2 p-5 dark:border dark:border-white dark:border-solid dark:border-1" >
        <div class="flex justify-between p-0">
            <div class="font-medium dark:text-white">{{$idea->username}}</div>
            <div class="font-thin  dark:text-white">{{$idea->created_at}}</div>
        </div>
        <div class="my-4  dark:text-white">
            {{$idea->idea}}
        </div>
        <div class="flex w-full justify-between items-center">

                @if ($liked->contains('idea_id', $idea->id) )
                    <form action="{{route('idea.unlike', ['id' => $idea->id])}}" method="post">
                        @csrf
                        <div class="flex flex-1 w-16  justify-center items-center font-medium text-center  h-10 transition ease-in-out delay-150 bg-blue-500 text-white hover:bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
                            <button type="submit" name="like_post" class="flex flex-row justify-center items-center">
                                <i class="bi bi-star  dark:text-white"></i>
                                <p class="px-1  dark:text-white">{{$idea->likes}}</p>
                            </button>
                        </div>
                    </form>

                @else
                    <form action="{{route('idea.like', ['id' => $idea->id])}}" method="post">
                        @csrf
                        <div class=" border border-solid border-black dark:border-white flex flex-1 w-16 justify-center items-center font-medium text-center  h-10 transition ease-in-out  bg-white-200 text-black hover:bg-blue-500 hover:text-white hover:border-0">
                            <button type="submit" name="like_post" class="flex flex-row justify-center items-center">
                                <i class="bi bi-star  dark:text-white"></i>
                                <p class="px-1  dark:text-white">{{$idea->likes}}</p>
                            </button>
                        </div>
                    </form>
                @endif

                    @include('feed.send-comment')
        </div>


    </div>

