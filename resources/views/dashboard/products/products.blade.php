
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between ">
            {{ __('Lista de productos') }}
            <a href="{{route('products.create')}}" class="rounded text-sm text-white bg-green-600 px-2 py-1">Agregar</a></button>
        </h2>

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4 ">
                
                <table stu class="table">
                    <thead>
                      <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Imagen</th>
                        @if (Auth::user()->type_user == "administrator")
                        <th scope="col">Acciones</th>
                        @endif
                      </tr>
                    </thead> 
                    <tbody>
                        @foreach ($products as $producto)
                        <tr>
                            <td scope="row">{{ $producto->name }}</td>
                            <td>{{ $producto->details }}</td>
                            <td>${{ $producto->price }}</td>
                            <td><img src="{{asset('upload/shop/'.$producto->image)}}" alt="{{$producto->name}}" width="80px"></td>
                            
                            @if (Auth::user()->type_user == "administrator")
                            <td>
                                <a href="{{route('products.edit', $producto)}}"><button class="btn bg-primary btn-primary"><i class="fa-solid fa-user-pen"></button></i></a>
                                <form action="{{ route('products.destroy', $producto)}}" class="inline" method="POST">
                                    @csrf
                                    @method('DELETE')

                                <button type="submit" class="btn bg-danger btn-danger" 
                                        onclick="return confirm('¿Esta seguro de eliminar {{$producto->name}}?.. \nEsto sera permanentemente')">
                                    <i class="fa-solid fa-trash"></i></button> 
                                </form>
                            </td>
                            @endif
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
