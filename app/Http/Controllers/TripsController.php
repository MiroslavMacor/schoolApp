<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miro
 * Date: 29-Jun-18
 * Time: 11:38
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TripsController extends Controller{

    public function show()
    {
//        return 'Hello World';
        return view('trips');
    }



}