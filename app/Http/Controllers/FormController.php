<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formLogin()
    {
        
        $inputs = [
            'input1',
            'input2',
            'input3'
        ];
        $button = 'signup';

        return view('login', compact('inputs', 'button'));
    }
}
