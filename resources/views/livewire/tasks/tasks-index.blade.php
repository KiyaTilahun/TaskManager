<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form method="POST" wire:submit="save">
                  @if (session()->has('message'))
                  <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
                    <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                        <span class="font-medium">Success alert!</span> {{session('message')}}
                    </div>
                </div>
                      
                  @endif
                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" wire:model="title" id="title"
                            value="" required>
                    </div>

                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Slug</label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" wire:model="slug" name="slug"
                            id="description" placeholder="(Optional)">
                    </div>
                    <div class="mb-4">
                        <label class="text-xl text-gray-600">Description</label></br>
                        <input type="text" class="border-2 border-gray-300 p-2 w-full" wire:model="description" name="description"
                            id="description" placeholder="(Optional)">
                    </div>
                    <div class="mb-4">
                        <label for="countries"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Status</label>
                        <select id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="status">
                            @foreach (\App\Enums\StatusType::cases() as $status)
                            <option value="{{$status->value}}">{{$status->name}}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="countries"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Priority</label>
                        <select id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model="priority">
                           @foreach (\App\Enums\PriorityType::cases() as $priority)
                           <option value="{{$priority->value}}">{{$priority->name}}</option>
                               
                           @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                      <label class="text-xl text-gray-600">Date</label></br>
                      <input type="date" class="border-2 border-gray-300 p-2 w-full" wire:model="deadline" name="description"
                          id="description" placeholder="(Optional)">
                  </div>
                    {{-- <div class="mb-8">
                      <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>
                      <textarea name="content" class="border-2 border-gray-500">
                          
                      </textarea>
                  </div> --}}

                    <div class="flex p-1">
                        <select class="border-2 border-gray-300 border-r p-2" name="action">
                            <option>Save and Publish</option>
                            <option>Save Draft</option>
                        </select>
                        <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400"
                            required>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
