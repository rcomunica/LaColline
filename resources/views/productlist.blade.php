<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de productos') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Valor</th>
                        @if (Auth::user()->type_user == "administrator")
                        <th scope="col">Acciones</th>
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <td scope="row">{{ $producto->name }}</td>
                            <td>{{ $producto->email }}</td>
                            <td>{{ strtoupper($producto->type_user) }}</td>
                            
                            @if (Auth::user()->type_user == "administrator")
                            <td><button type="button" class="btn btn-primary"><i class="fa-solid fa-user-pen"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                            @endif
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
