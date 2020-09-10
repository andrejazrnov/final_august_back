<?php

namespace App\Controllers;
use App\Core\App;

class ApiFormsController {

    public function index()
    {
        $user = api_check_auth();
        $forms = App::get('database')->getOneByField('forms', ['user_id' => $user->id]);

        echo json_encode($forms);
    }


    public function store()
    {

        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('forms', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function show()
    {
        $form = App::get('database')->getOne('forms', $_GET['id']);

        echo json_encode($form);
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('forms', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function destroy()
    {
        App::get('database')->delete('forms', $_GET['id']);

        return [
            'status' => 'ok'
        ];

    }

}