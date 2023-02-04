<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Productos;
use Illuminate\Http\Request;

class DashboardPanel extends Controller
{
    public function index(User $users)
    {
        return view('dashboard.userlist', [
            'users' => User::latest()->paginate()
        ]);
    }

    public function destroy(User $userlist)
    {
        $userlist->delete();

        return back();
    }
}
