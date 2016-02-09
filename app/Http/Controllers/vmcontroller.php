<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVmRequest;
use Illuminate\Http\Request;
use App\Vm;
use App\Users;
use App\User;
//use App\Http\Controllers\DB;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Vmcontroller extends Controller
{
    function home()
    {
//        $users = DB::table('vm')->get();
//        print_r($users);
//        die;

        $data=Vm::get();
        return $data;
    }

    function user()
    {
        $data=Vm::get();
        return view('home')->with('users',$data);
    }

    function show($id)
    {
        $data=Vm::find($id);
        // dd($data);
        return view('show')->with('users',$data);
    }
    function create()
    {
        return view('create');
    }

    public function store(CreateVmRequest $request)
    {
//       return "store";
        $input= $request->all();
        Vm::create($input);
//     print_r($input);
//     die;
        return redirect('/');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        $user=Vm::findOrFail($id);
//        print_r($user);
//        die;
        return view('user.edit')->with('users',$user);
    }

    public function update($id, CreateVmRequest $request)
    {
        $user=Vm::findOrFail($id);

        $user->update($request->all());
        return redirect('/');
    }

    function homepage()
    {
        return view('homepage');
    }

    function jpt()
    {
        return "jpt";
    }

}
