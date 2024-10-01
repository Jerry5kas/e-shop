{{-- logout--}}
<li {{ $attributes->class(['bottom-0 left-0 bg-white cursor-pointer
']) }}>

    {{--    <form method="POST" action="{{ route('logout') }}">--}}
    {{--        @csrf--}}
    <a href="/"

       class="relative flex flex-row items-center h-16 focus:outline-none hover:bg-violet text-gray-500
           hover:text-gray-200 hover:border-red-500 px-4 space-x-2 group">
                                <span class="inline-flex justify-center items-center  text-gray-800 group-hover:text-white">
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
  <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
</svg>

                                </span>
        <span class=" font-semibold text-sm tracking-wide truncate font-sans text-black group-hover:text-white">Home
            </span>
    </a>
    {{--    </form>--}}
</li>
