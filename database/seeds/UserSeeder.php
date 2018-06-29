<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miro
 * Date: 29-Jun-18
 * Time: 17:25
 */


use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(){

        $user3 = new User;
        $user3->id = '3';
        $user3->name = 'rado';
        $user3->email = 'rado@admin.com';
        $user3->password = '123456';
        $user3->save();

        $user2 = new User;
        $user2->id = '4';
        $user2->name = 'Adam';
        $user2->email = 'admin@admin.com';
        $user2->password = '123456';
        $user2->save();

        $user1 = new User;
        $user1->id = '5';
        $user1->name = 'ondro';
        $user1->email = 'ondro@admin.com';
        $user1->password = '123456';
        $user1->save();


    }



}