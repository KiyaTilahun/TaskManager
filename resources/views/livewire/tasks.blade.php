<div class="text-white m-12">
    <input  type="text" wire:model="task" wire:keydown.enter="add" class="text-black" >
 
    <button wire:click="add" class="bg-blue-400 text-white p-1">Add Todo</button>
   @foreach ($todos as $item)
       
   <div>{{$item}}</div>
   @endforeach
</div>
