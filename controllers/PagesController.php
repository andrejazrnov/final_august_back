<?php



namespace App\Controllers;
use App\Core\App;

class PagesController {
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        check_auth();
        return view('about');
    }

    public function contact()
    {

        return view('contact');
    }

    public function contactFormSubmit()
    {
        App::get('database')->insert('messages', [
            'subject' => $_POST['subject'],
            'message' => $_POST['message']
        ]);

        return redirect('/');

    }

}




