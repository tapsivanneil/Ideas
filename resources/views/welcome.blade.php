<x-base-layout>
        @if (Route::has('login'))
            <nav class="flex flex-col justify-center items-center">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="w-full mx-8 text-center my-1 max-w-64 bg-white py-2 px-5 text-gray font-semibold rounded-full shadow-md hover:bg-pink-200 focus:outline-none focus:ring focus:ring-violet-400 focus:ring-opacity-75"
                    >
                        Explore Ideas
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="w-full mx-8 text-center my-1 max-w-64 bg-white py-2 px-5 text-gray font-semibold rounded-full shadow-md hover:bg-pink-200 focus:outline-none focus:ring focus:ring-violet-400 focus:ring-opacity-75"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="w-full mx-8 text-center my-1 max-w-64  bg-white py-2 px-5 text-gray font-semibold rounded-full shadow-md hover:bg-pink-200 focus:outline-none focus:ring focus:ring-violet-400 focus:ring-opacity-75"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
</x-base-layout>
