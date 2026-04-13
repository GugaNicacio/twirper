<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwirperController extends Controller
{
    public function index()
    {
        $twirpe = [
            [
                'author' => 'Nicacio',
                'message' => 'testando umas paradas',
                'time' => '6 minutes agos'
            ],
            [
                'author' => 'Goat',
                'message' => 'Mario',
                'time' => '64 minutes agos'
            ]
        ];
        return view('home', ['twirpe' => $twirpe]);
    }
}
