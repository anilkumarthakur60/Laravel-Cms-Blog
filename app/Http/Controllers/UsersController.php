<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UpdateProfileRequest;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name', 'asc')->paginate();
        return view('users.index', compact('users'));
        //
    }



    public function edit()
    {
        return view('users.edit')->with('user', auth()->user());
        //
    }


    public function update(UpdateProfileRequest $request)
    {
        $user = auth()->user();
        $user->update([
            'name' => $request->name,
            'about' => $request->about
        ]);

        session()->flash('success', 'User Profile updated successfully');
        return redirect()->back();
        //
    }

    public function destroy($id)
    {
        //
    }

    public function makeAdmin(User $user)
    {
        $user->role = 'admin';
        $user->save();
        session()->flash('success', 'User has been made Admin successfully');
        return redirect(route('users.index'));
        # code...
    }
}
