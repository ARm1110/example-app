<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showForm()
    {
//        $items = ['item1', 'item2', 'item3'];

        $labels= ['label','label2','label3'];
        $signIn='signIn';
        return view('/login',compact('labels','signIn'));
    }
}
