<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualizacion de productos') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                <form action="{{ route('products.update',  $product)}}" enctype="multipart/form-data" method="POST">

                    @method('PUT')
                    @include('dashboard.products._form')
                    
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
