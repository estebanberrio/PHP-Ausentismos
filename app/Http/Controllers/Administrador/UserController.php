<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use app\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        //dd($users);
        return view('administrador.users.index', compact('users'));
    }

    public function create()
    {
        return view('administrador.users.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
