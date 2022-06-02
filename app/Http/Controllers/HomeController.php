<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {

        $cards = [
            [
                'title' => 'title1',
                'body' => 'body1'
            ],
            [
                'title' => 'title2',
                'body' => 'body2'
            ],
            [
                'title' => 'title3',
                'body' => 'body3'
            ],
            [
                'title' => 'title4',
                'body' => 'body4'
            ]
        ];

        return view('home', compact('cards'));
    }
}
