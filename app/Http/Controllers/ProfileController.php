<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(User $ids)
    {
        return view('user.profile');
    }



    public function storeAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|max:10000|dimensions:min_width=600,min_height=600|mimes:jpeg,jpg,png',
        ]);
    
        $user = auth()->user();
        $filename = $user->id . '-' . uniqid() . '.jpg';
        
        $request->file('avatar')->move('public/avatar', $filename);

        // $request->file('avatar')->storeAs('public/avatars', $filename);
    
        $user->avatar = $filename;
        $user->save();
    
        // $request->session()->flash('success', 'New Avatar is Uploaded.');
    
        return redirect()->back()->with('status', 'Image Upload Success');
    }

    public function storeAvatars(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|max:10000|dimensions:min_width=600,min_height=600|mimes:jpeg,jpg,png',
        ]);
        $user = User::findOrFail($userId);
    
     
        $filename = $user->id . '-' . uniqid() . '.jpg';
        
        $request->file('avatar')->move('public/avatar', $filename);

        // $request->file('avatar')->storeAs('public/avatars', $filename);
    
        $user->avatar = $filename;
        $user->save();
    
        // $request->session()->flash('success', 'New Avatar is Uploaded.');
    
        return redirect()->back()->with('status', 'Image Upload Success');
    }

}
