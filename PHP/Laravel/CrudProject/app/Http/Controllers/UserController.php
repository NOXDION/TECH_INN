<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users'=>$users]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     ''=>''
        // ]);
        User::create($request->all());
        return redirect()->route('user.index')->with('success','Usuario creado exitosamente!');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('user.show',['user'=>$user]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('user.index')->with('success','Rol actualizado exitosamente!');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('success','Usuario eliminado!');
    }
}
