<div class="inset-0 z-10 overflow-hidden inline-flex items-center">
<div
class="relative transform overflow-hidden rounded-lg text-left shadow-xl transition-all  sm:w-full sm:max-w-lg">
<div  class=" px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
   
        <input wire:model.live.throttle.500ms="search" type="text" id="searchInput"
            class="block w-full flex-1 py-2 px-3 mt-2 outline-none border-none rounded-md bg-slate-100"
            placeholder="Start Typing..." @keydown.slash.window="searchPosts" />
        <div class="mt-2 w-full overflow-hidden rounded-md bg-white">

            @foreach ($results as $result)
                <div class="cursor-pointer py-2 px-3 hover:bg-slate-100">
                    <p class="text-sm font-medium text-gray-600">{{ $result->title }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
</div>
