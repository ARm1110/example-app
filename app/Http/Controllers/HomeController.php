<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function home()
    {
//        $items = ['item1', 'item2', 'item3'];
        $cards=
            [
                [
                    'title'=>'title1',
                    'source'=>'https://picsum.photos/id/237/200/300',
                    'body'=>'lorem1'
                ],
                [
                    'title'=>'title2',
                    'source'=>'https://picsum.photos/id/237/200/300',
                    'body'=>'lorem2'
                ],
                [
                    'title'=>'title3',
                    'source'=>'https://picsum.photos/id/237/200/300',
                    'body'=>'lorem3'
                ]

        ];
        return view('home', compact('cards'));
    }
}
