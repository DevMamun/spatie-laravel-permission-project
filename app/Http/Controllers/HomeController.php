<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Role::create(['name' => 'writer']);
        // $permission = Permission::create(['name' => 'write post']);

        // $permission = Permission::findById(1);
        // $role = Role::findById(2);
        // $permission = Permission::findById(1);

        // $role->givePermissionTo($permission);

        // $permission->removeRole($role);

        // $role->revokePermissionTo($permission);

        // Role::create(['name' => 'writer']);
        // Permission::create(['name' => 'write post']);

        // auth()->user()->givePermissionTo('edit post');

        // auth()->user()->assignRole('writer');

        // return User::permission('write post')->get();

        // return auth()->user()->removeRole('writer');


        return view('home');
    }
}
