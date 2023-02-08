<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('profile', [
            'user' => Auth::user(),
        ]);
    }

    public function get_role(Request $request, $id)
    {
        return view('user_role', [
            'user' => User::findOrFail($id),
        ]);
    }

    public function update_role(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->role_id = $request->input('role_id');
        $user->save();
        return view('success');
    }

    protected function maintenance(Request $request)
    {
        $users = User::join('roles as r', 'users.role_id', '=', 'r.id')->get(['users.*', 'r.name as role']);
        return view('maintenance', [
            'users' => $users,
        ]);
    }

    public function delete(Request $request, $id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('maintenance');
    }

    protected function update(Request $request)
    {
        $user = User::findOrFail(Auth::id());
        $user->fill(array_filter($request->all()));
        if ($file = $request->file('avatar_link')) {
            $filename = time() . Auth::id() . "-avatar." . $file->getClientOriginalExtension();
            $upload_path = 'avatar/';
            $avatar_link = $upload_path . $filename;
            $file->move($upload_path, $filename);
            $user->avatar_link = $avatar_link;
        }
        if ($request->filled('password'))
            $user->password = Hash::make($user->password);

        $user->save();
        return view('success');
    }
}
