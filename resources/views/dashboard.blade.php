<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        
              Hello  {{ Auth::user()->name }}
              
        </h2>
    </x-slot>

  
</x-app-layout>
