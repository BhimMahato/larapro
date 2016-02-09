<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use App\Vm;
use App\User;
use Illuminate\Support\Facades\View;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Html\HtmlServiceProvider;
use Illuminate\Support\Facades\Input;
class Mycontroller extends Controller
{
     function contact() {
     // return "bhim";
     $data=User::get();
      print_r($data);
      die;
     return $data;
     // $article=DB::table('users')->first();
     // return view::make('home',['users'=>$article->username]);

        // $users = DB::table('users')->get();
        // // print_r($users);
        // // die;

        // return view::make('home', ['users' => $users]);
    

}
 
 function user()
   {
   		$data=User::get();
//       print_r($data);
//       die;
   		return view('user.home')->with('users',$data);
   }

   function show($id)
   {
   		$data=User::find($id);
//   		 dd($data);
   		return view('show')->with('users',$data);
   }
   function create()
   {
   		return view('create');
   }

   public function store(CreateUserRequest $request)
   {
//       return "store";
    $input= $request->all();
    User::create($input);
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
        $user=User::findOrFail($id);
//        print_r($user);
//        die;
         return view('user.edit')->with('users',$user);
    }

    public function update($id, CreateUserRequest $request)
    {
        $user=User::findOrFail($id);

        $user->update($request->all());
        return redirect('/');
    }
}