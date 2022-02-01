<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.users.index",[
            "users" => User::all()
        ]);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.users.create",[
            "users" => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            try {
                $uservalidasi = $request->validate([
                    'name' => 'required|max:255',
                    'username' => 'required|min:3|max:255|unique:users',
                    'email' => 'required|email:dns|unique:users',
                    'password' => 'required|min:5|max:255',
                    'is_admin' => 'required'
                ]);
                $uservalidasi['password'] = Hash::make($uservalidasi['password']);
                User::create($uservalidasi);
                return redirect('/dashboard/users')->with('success','New User has been added!');
               
            }
            catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
            }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view("dashboard.users.edit",[
            "users" => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|',
            'email' => 'required|email:dns|',
            'password' => 'required|min:5|max:255',
            'is_admin' => 'required'
        ];
       

        $validateData = $request->validate($rules);
        $validateData['password'] = Hash::make($validateData['password']);

        User::where('id',$user->id)
                ->update($validateData);

        return redirect('/dashboard/users')->with('success','User has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard/users')->with('success','User has been deleted!');
    }
}
