<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Productos;
use Illuminate\Http\Request;

class DashboardPanel extends Controller
{
    public function UserList(User $users)
    {
        $users = User::all();
        return view('userlist', ['users' => $users]);
    }

    public function ProductList(Productos $productos)
    {
        $productos = Productos::all();
        return view('productlist', ['productos' => $productos]);
    }
}
