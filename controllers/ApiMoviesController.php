<?php

namespace App\Controllers;
use App\Core\App;

class ApiMoviesController {

    public function index()
    {
//        $user = api_check_auth();
        $movies = App::get('database')->getAll('movies');

        echo json_encode($movies);
    }


    public function store()
    {

        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('movies', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function show()
    {
        $movie = App::get('database')->getOne('movies', $_GET['id']);

        echo json_encode($movie);
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('movies', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function destroy()
    {
        App::get('database')->delete('movies', $_GET['id']);

        return [
            'status' => 'ok'
        ];

    }

}