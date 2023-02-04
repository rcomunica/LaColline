@if (session('SucessRegister'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Hola {{Auth::user()->name}} </strong>Se ha registrado correctamente a nuestros sistemas
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hi {{Auth::user()->name}}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
