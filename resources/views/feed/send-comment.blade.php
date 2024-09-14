

<form action="{{route('idea.view.comment', ['id' => $idea->id])}}" method="get">
    @csrf
    <button class="ml-1 w-20 h-10  transition ease-in-out delay-150 bg-blue-500 text-white hover:bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
        <i class="bi bi-chat-left-text"></i>
    </button>
</form>


<form action="{{route('idea.send.comment', ['id' => $idea->id])}}" method="post" class="flex flex-1 w-54 justify-center items-center">
    @csrf
    <input type="text" name="user_comment" class=" w-full m-1 dark:bg-gray-800" placeholder="Comment">

    <button type="submit" class="p-1 w-20 h-10  transition ease-in-out delay-150 bg-blue-500 text-white hover:bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 ">
        <i class="bi bi-send"></i>
    </button>
</form>

