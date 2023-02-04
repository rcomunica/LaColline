<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de usuarios') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Type User</th>
                        @if (Auth::user()->type_user == "administrator")
                        <th scope="col">Accions</th>
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td scope="row">{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ strtoupper($user->type_user) }}</td>
                            
                            @if (Auth::user()->type_user == "administrator")
                            <td><button type="button" class="btn bg-primary btn-primary"><i class="fa-solid fa-pencil"></i></button>
                               
                                <form action="{{ route('userlist.destroy', $user)}}" class="d-inline" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button 
                                        type="submit"
                                        class="btn bg-danger btn-danger"
                                        onclick="return confirm('¿Esta seguro de eliminar a {{$user->name}} del sistema?')">
                                </form><i class="fa-solid fa-trash"></i></button></td>
                            @endif
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
