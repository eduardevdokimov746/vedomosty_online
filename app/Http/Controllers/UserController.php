<?php

namespace App\Http\Controllers;


use App\Models\Role;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::on()
            ->select([
                'users.*',
                'roles.name as role'
            ])
            ->join(
                'roles',
                'users.role_id',
                '=',
                'roles.id'
            )
            ->paginate(15);

        return view('users/index', ['users' => $users]);
    }

    public function create()
    {
        return view('users/create');
    }

    public function show()
    {
        return view('users/create');
    }

    public function store()
    {

    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::get();

        return view('users/edit', ['user' => $user, 'roles' => $roles]);
    }

    public function destroy()
    {

    }
}
