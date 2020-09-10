<?php

namespace App\Controllers;
use App\Core\App;

class ApiMessagesController {

    public function index()
    {
//        $user = api_check_auth();
        $messages = App::get('database')->getAll('messages');

        echo json_encode($messages);
    }


    public function store()
    {

        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('messages', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function show()
    {
        $message = App::get('database')->getOne('messages', $_GET['id']);

        echo json_encode($message);
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('messages', $_POST);
        return [
            'status' => 'ok'
        ];
    }

    public function destroy()
    {
        App::get('database')->delete('messages', $_GET['id']);

        return [
            'status' => 'ok'
        ];

    }

}