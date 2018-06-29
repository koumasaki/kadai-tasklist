<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', [
            'user' => $user,
        ]);
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/');
    }
}
