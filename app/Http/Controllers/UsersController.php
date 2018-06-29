<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miro
 * Date: 29-Jun-18
 * Time: 13:24
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Input;

class UsersController extends Controller
{
    public function show()
    {

        $users = \DB::table('users')->get();

        $data = ['user' => $users];

        return view('users', $data);
    }

    public function add()
    {

//        $users = \DB::table('users')->get();
//
//        $data = ['user' => $users];

        return view('add_user');
    }

//    public function store()
//    {
//        $data = Input::all();
//
//        $data->id;
//
//        $user = new User;
//        $user->id = $data->id;
//        $user->name = $data->name;
//        $user->email = $data->email;
//        $user->password = $data->password;
//        $user->save();
//
//
//
//
////        $users = \DB::table('users')->get();
////
////        $data = ['user' => $users];
//
////        return view('add_user');
////        return $this->show()->with('message', 'User added');
////        return $this->show();
//    }


}