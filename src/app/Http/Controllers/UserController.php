<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {
    $Users = User::all();
    return view('register', ['users' => $users]);
    }

    public function register(UserRequest $request)
    {
        $contact = $request->only(['name', 'email', 'password']);
        return view('register', ['user' => $user]);
    }

    public function create(UserRequest $request)
    {
        $form = $request->all();
        Author::create($form);
        return redirect('/login');
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'password']);
        User::create($user);

        return view('login');
}


}