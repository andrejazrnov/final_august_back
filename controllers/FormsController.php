<?php

namespace App\Controllers;
use App\Core\App;

class FormsController
{

    public function index()
    {
        $forms = App::get('database')->getAll('forms');

        return view('forms-index', compact('forms'));

    }

    public function create()
    {
        return view('forms-create');

    }

    public function store()
    {
        $formData = json_decode(file_get_contents('php://input'), ARRAY_FILTER_USE_KEY);
        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('forms', $formData['formData']);

        return redirect('/forms');

    }

    public function show()
    {
        $form = App::get('database')->getOne('forms', $_GET['id']);


        return view('forms-show', compact('form'));

    }

    public function edit()
    {

        $form = App::get('database')->getOne('forms', $_GET['id']);

        return view('forms-edit', compact('form'));

    }



    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('forms', $_POST);

        return redirect('/forms');

    }

    public function destroy()
    {
        App::get('database')->delete('forms', $_GET['id']);

        return redirect('/forms');

    }

}
