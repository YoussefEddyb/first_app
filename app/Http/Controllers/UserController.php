<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index',['users'=>User::cursor(),'lien'=>'user']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->input());
        $errors=$request->validate([
            'name'=>'required|min:2|max:40',
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        // $user=new User();


        // $user->name=$request->name;
        // //$user->name=$request->input('name');

        // $user->email=$request->email;
        // $user->password=bcrypt($request->password);

        // $user->save();





        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Session()->flash('status', 'User created');
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return View('users.show',['user'=>User::FindOrFail($user->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return View('users.edit',['user'=>User::FindOrFail($user->id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        
        $errors=$request->validate([
            'name'=>'required|min:3|max:40',
            'email'=>'required|email',
            'password'=>'required'
        ]);

  



        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);


        Session()->flash('status', 'User updated');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        // $user=User::findOrFail($user->id);

        // $user->delete();

        $user::destroy([3,4]);

        Session()->flash('status', 'User deleted');
        return redirect()->route('users.index');
    }
}
