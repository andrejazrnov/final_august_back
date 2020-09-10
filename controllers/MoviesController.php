<?php

namespace App\Controllers;
use App\Core\App;

class MoviesController
{

    public function index()
    {
        $movies = App::get('database')->getAll('movies');

        return view('movies-index', compact('movies'));
    }

    public function create()
    {
        return view('movies-create');
    }

    public function store()
    {
        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('movies', $_POST);

        return redirect('/movies');
    }

    public function show()
    {
        $movie = App::get('database')->getOne('movies', $_GET['id']);

        return view('movies-show', compact('movie'));
    }

    public function edit()
    {
        $movie = App::get('database')->getOne('movies', $_GET['id']);

        return view('movies-edit', compact('movie'));
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('movies', $_POST);

        return redirect('/movies');
    }

    public function destroy()
    {
        App::get('database')->delete('movies', $_GET['id']);

        return redirect('/movies');

    }

}
