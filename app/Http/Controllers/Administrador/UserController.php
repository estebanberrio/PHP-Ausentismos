<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use app\Models\User;
use Exception;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

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
        try
        {
            User::create($request->all());
            //dd($request);
            Alert::success('Éxito', 'Usuario Guardado!');
            return Redirect()->route('administrador.users.index');
        }
        catch(Exception $e)
        {
            //dd($request);
            return "Upss algo ha salido muy mal T_T";

        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        dd($id);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request, $id)
    {
        dd($id);
    }
}
