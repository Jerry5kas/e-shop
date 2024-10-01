@props([
    'id'=>null,
])
<td class="w-[15%] print:hidden ">
    <div class="flex justify-center items-center gap-4 self-center">
{{--       <x-button.edit wire:click="edit({{$id}})"/>--}}
{{--       <x-button.delete  wire:click="getDelete({{$id}})"/>--}}
        <x-button.show href="{{route('category.show')}}" />
        <x-button.edit  href="{{route('category.edit', )}}" />
        <x-button.delete href="{{route('category.destroy')}}" />
    </div>
</td>
