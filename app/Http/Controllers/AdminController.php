<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function get_all(){

        //get all users
        $users = User::all();


        //send the message to the responding view
        return view('Administrators',[
            'heading' => "Administrators",
            'users' => $users
        ]);

    }

    public function show($id){
        //get all user
        $user = User::find($id);

        //send the user data to the responding view
        return view('forms.AdminForm',[
            'heading' => "Administrators",
            'user' => $user
        ]);


    }

    public function store(Request $request,$id){
        //get the user to update
        $user = User::find($id);


        //validate the data
        $validated = $request->validate([
            'firstName' => 'required|max:255',
            'lastName' => 'required',
            'email' => 'required|email',
            'Role' => 'required',
            'hospital' => 'nullable'
        ]);

        $user->firstName =$request->input('firstName');
        $user->firstName =$request->input('firstName');
        $user->firstName =$request->input('firstName');
        $user->firstName =$request->input('firstName');
        $user->firstName =$request->input('firstName');
        $user->save();

        session()->flash('success','Updated');

        return redirect('/Administrators/'.$id);

    }

}
