<?php

namespace App\Controllers;
use App\Core\App;

class MessagesController
{

    public function index()
    {
        $messages = App::get('database')->getAll('messages');

        return view('messages-index', compact('messages'));
    }

    public function create()
    {
        return view('messages-create');
    }

    public function store()
    {
        $messageData = json_decode(file_get_contents('php://input'), ARRAY_FILTER_USE_KEY);
        //uraditi prethodno sanitizaciju i validaciju !
        App::get('database')->insert('messages', $messageData['messageData']);

        return redirect('/messages');
    }

    public function show()
    {
        $message = App::get('database')->getOne('messages', $_GET['id']);

        return view('messages-show', compact('message'));
    }

    public function edit()
    {
        $message= App::get('database')->getOne('messages', $_GET['id']);

        return view('messages-edit', compact('message'));
    }

    public function update()
    {
        //uraditi validaciju
        App::get('database')->update('messages', $_POST);

        return redirect('/messages');
    }

    public function destroy()
    {
        App::get('database')->delete('messages', $_GET['id']);

        return redirect('/messages');

    }

}
