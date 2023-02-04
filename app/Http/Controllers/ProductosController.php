<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function ProductList(Productos $productos)
    {
        $productos = Productos::all();
        return view('dashboard.productlist', ['productos' => $productos]);
    }

    public function destroy(Productos $productos)
    {
        $productos->delete();

        return back()->with('succesDelete', '$productos->name se ha eliminado');
    }
}
