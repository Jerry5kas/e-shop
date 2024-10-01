<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Categories') }}
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

        <form action="{{ url('category') }}" method="POST"
              class="w-8/12 h-auto mx-auto py-10 bg-white px-5 flex-col flex justify-center items-center gap-y-5
              border-b border-gray-300 rounded-b-md shadow-md shadow-gray-400">
            @csrf
            <div class="w-full flex flex-col gap-y-5">

                <div class="w-1/2 mx-auto flex-col ">
                    <x-input.floating name="name" label="Category Name"/>
                    <div class="h-3">
                        @error('name')
                        <span class="text-red-400 text-xs font-semibold">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="w-1/2 mx-auto flex-col ">
                    <x-input.textarea name="description" label="Description"/>
                    <div class="h-3">
                        @error('description')
                        <span class="text-red-400 text-xs font-semibold">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class=" w-1/2 mx-auto flex items-center justify-between">
                <div class="flex justify-start items-center gap-x-2 text-sm font-semibold text-gray-400">
                    <input name="status" type="checkbox" class="w-5 h-5 rounded-sm text-violet-600 border border-violet-600 focus:border
                    focus:border-violet-600 focus:ring-2 focus:ring-violet-600 transition-all ease-out duration-500 "
                           checked>
                    <label for="" class="text-gray-500 font-semibold text-sm ">Status</label>
                    <span class="px-5">Checked = Active, Unchecked = Inactive</span>
                </div>
                <x-button.save-x type="submit"/>
            </div>
        </form>
    </div>
</x-app-layout>
