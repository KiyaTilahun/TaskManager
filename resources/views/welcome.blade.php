<x-guest-layout>
    @if (Route::has('login'))
    @livewire('welcome.navigation')
        
    @endif

</x-guest-layout>