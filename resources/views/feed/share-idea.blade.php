

<form action="{{route('idea.share')}}" class=" flex justify-center items-center" method="post">
    @csrf
    <input type="text" name="idea_content" class=" rounded-full w-full m-1" placeholder="What's on your mind?">
    <button type="submit" class=" w-10 h-10 rounded-full transition ease-in-out delay-150 bg-blue-500 text-white hover:scale-110 hover:bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 ">
        <i class="bi bi-send"></i>
    </button>
</form>
