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

class UsersController extends Controller
{
    public function show()
    {

        $users = \DB::table('users')->get();

        return view('users', ['users' => $users]);


//        return 'Hello World';
        return view('users');
    }

}