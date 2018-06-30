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
use App\User;
use Illuminate\Http\Request as Request;

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

    public function store(Request $request)
    {
        $data = \Input::all();

        $user = new User;
//        $user->id = $request->input('id');
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->save();

        return redirect('/tripsOverview');
        //return \Redirect::route('/users');

//        $users = \DB::table('users')->get();
//
//        $data = ['user' => $users];

//        return view('add_user');
//        return $this->show()->with('message', 'User added');
//        return $this->show();
    }


}