<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="bg-gray-50 min-h-screen rounded-sm p-5 space-y-5">
        <div
            class="w-8/12 mx-auto py-4 bg-white px-5 flex-row flex items-center gap-y-5 border-b border-gray-300 rounded-b-md shadow">
            <div class="w-full flex flex-row justify-between gap-x-5 text-lg font-semibold">
                Category List
            </div>
            <div class=" w-full flex justify-end">
                <a type="submit" href="{{ url('category/create') }}"
                   class="tab-button px-6 py-[7px]   relative rounded group overflow-hidden font-medium bg-green-500 inline-block text-center">
                <span
                    class="absolute top-0 left-0 flex h-full w-0 mr-0 transition-all
                    duration-500 ease-out transform translate-x-0 group-hover:w-full opacity-90
                    bg-green-600 "></span>
                    <span class="relative group-hover:hidden text-white sm:text-lg text-sm">
               New
            </span>
                    <span
                        class="relative hidden group-hover:block group-hover:text-white sm:px-[7px] px-[3px] sm:py-[2px] py-[0]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="size-6">
                    <path fill-rule="evenodd"
                          d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z"
                          clip-rule="evenodd"/>
                    </svg>
            </span>
                </a>
            </div>
        </div>
        <div class="w-8/12 mx-auto py-8 bg-white px-5 space-y-5 rounded-b-md shadow-md shadow-gray-400">
            <x-table.caption :caption="'Category Records'">
                10
            </x-table.caption>

            <!-- Table Header --------------------------------------------------------------------------------------------->
            <x-table.form>
                <x-slot:table_header name="table_header" class="bg-green-100">

                    <x-table.header-serial width="20%"/>

                    <x-table.header-text sortIcon="none">Category Name
                    </x-table.header-text>

                    <x-table.header-text sortIcon="none">Description
                    </x-table.header-text>
                    <x-table.header-text sortIcon="none" width="8%">
                        Status
                    </x-table.header-text>

                    <x-table.header-action/>

                </x-slot:table_header>

                <!-- Table Body ------------------------------------------------------------------------------------------->

                <x-slot:table_body name="table_body">

                    @forelse($categories as $index=>$row)
                        <x-table.row>
                            <x-table.cell-text>{{$index + 1}}</x-table.cell-text>
                            <x-table.cell-text>{{ $row->name }}</x-table.cell-text>
                            <x-table.cell-text>{{$row->description}}</x-table.cell-text>
                            <x-table.cell-text>
                                @if($row->status == 1)
                                    <span
                                        class="bg-green-50 px-2 py-1 inline-flex items-center rounded-md gap-x-2 text-green-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                             class="size-5">
                                          <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                          <path fill-rule="evenodd"
                                                d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                                                clip-rule="evenodd"/>
                                        </svg>
                                    </span>

                                @else
                                    <span
                                        class="bg-red-50 px-2 py-1 inline-flex items-center rounded-md gap-x-2 text-red-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                             class="size-5">
                                              <path
                                                  d="M3.53 2.47a.75.75 0 0 0-1.06 1.06l18 18a.75.75 0 1 0 1.06-1.06l-18-18ZM22.676 12.553a11.249 11.249 0 0 1-2.631 4.31l-3.099-3.099a5.25 5.25 0 0 0-6.71-6.71L7.759 4.577a11.217 11.217 0 0 1 4.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113Z"/>
                                              <path
                                                  d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0 1 15.75 12ZM12.53 15.713l-4.243-4.244a3.75 3.75 0 0 0 4.244 4.243Z"/>
                                              <path
                                                  d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 0 0-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 0 1 6.75 12Z"/>
                                            </svg>
                                            </span>
                                @endif
                            </x-table.cell-text>
                            <x-table.cell-text class="w-[10%]">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <x-button.show href="{{ route('category.show' , $row->id)  }}"/>
                                    </div>
                                    <div>
                                        <x-button.edit href="{{ route('category.edit' , $row->id)  }}"/>
                                    </div>
                                    <div>
                                        <x-button.delete href=""/>
                                    </div>
                                </div>
                            </x-table.cell-text>

                            {{--                           <x-table.cell-action id="{{$row->id}}"/>--}}
                            {{--                            <x-table.cell-action/>--}}
                        </x-table.row>
                    @empty
                        <x-table.cell-empty/>
                    @endforelse
                </x-slot:table_body>
            </x-table.form>
        </div>
    </div>
</x-app-layout>
