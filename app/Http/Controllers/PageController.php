<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public static array $services = [
        [ //id numero univico e intero
            'id' => 1,
            'title' => 'Siti Web',
            'description' => 'Realizzo siti web',
        ],
        [
            'id' => 2,
            'title' => 'App Web',
            'description' => 'Realizzo App web'
        ],
        [
            'id' => 3,
            'title' => 'Marketing',
            'description' => 'Realizzo Marketing'
        ],
        [
            'id' => 4,
            'title' => 'Esempio',
            'description' => 'Realizzo Marketing'
        ],
    ];


    //metodo
    public function homepage()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about', ['services' => self::$services]);
    }

    public function detail($id)
    {

        foreach (self::$services as $service) {
            if ($id == $service['id']) {
                return view(
                    'detail',
                    ['service' => $service]
                );
            }
        }

        abort(404);
    }

    public function send(Request $request)
    {

        $request->validate(
            [
                'firstname' => ['required', 'max:20'],
                'lastname' => 'required',
                'email' => ['required', 'email'],
                'body' => ['sometimes', 'min:10'],
            ]
        );
        dd($request->all());
    }
}
