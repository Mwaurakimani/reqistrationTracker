<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function get_all()
    {

        //get all users
        $users = User::all();


        //send the message to the responding view
        return view('Administrators', [
            'heading' => "Administrators",
            'users' => $users
        ]);

    }

    public function show($id)
    {
        //get all user
        $user = User::find($id);

        //send the user data to the responding view
        return view('forms.AdminForm', [
            'heading' => "Administrators",
            'user' => $user
        ]);


    }

    public function store(Request $request, $id = null)
    {

        //validate the data
        $validated = $request->validate([
            'firstName' => 'required|max:255',
            'lastName' => 'required',
            'email' => 'required|email',
            'Role' => 'required',
            'hospital' => 'nullable'
        ]);

//        TODO:: test if this rout renders the right navigation




        if (!isset($id)) {
            $password = bcrypt("password");
            $validated["password"] = $password;
            $user = User::create($validated);

            return redirect()->action(
                [AdminController::class,'show'],
                ['id' => 1],
                ['heading' => "Administrator"]
            ) ;
        } else {
            $user = User::find($id);

//            TODO::check if you can simplify this in recurring sites

            $user->firstName = $request->input('firstName');
            $user->lastName = $request->input('lastName');
            $user->email = $request->input('email');
            $user->Role = $request->input('Role');

            $user->save();
        }


        session()->flash('success', 'Updated');

        return redirec()->action(
            [AdminController::class,'show'],
            ['id' => 1],
            ['heading' => "Administrator"]
        );

    }

}
