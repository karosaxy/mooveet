<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }

   //To upload user Avatar

   public function uploadAvatar(Request $request)
   {

    if ($request->hasFile('image')){
       $filename = $request->image->getClientOriginalName();

        //check if user has an old avatar stored and delete/replace it....
        if (auth()->user()->avatar){

            Storage::delete('/public/images/'.auth()->user()->avatar);
        }

       $request ->image->storeAs('images', $filename, 'public');
      auth()->user()->update(['avatar' => $filename]);
    }

 
    return redirect()->back()->with('message', 'Profile Picture Uploaded successfully') ;
   }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
       $roles = Role::all();

       return view('admin.users.edit')->with([
           'user' => $user,
           'roles' => $roles,
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}