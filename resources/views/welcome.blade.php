<x-base-layout>
        @if (Route::has('login'))
            <nav class="flex flex-col justify-center items-center">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Dashboard
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
