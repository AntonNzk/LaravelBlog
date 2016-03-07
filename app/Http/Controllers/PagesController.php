<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        #process variable data or params
        #talk to the model
        #recieve from the model
        #compile or process data from the model
        #pass that data to the correct view
        return view('pages.welcome');
    }

    public function getAbout(){
        $first = 'Anton';
        $last = 'Nazarenko';

        $fullname = $first . "" . $last;
        $email = 'antnzk@gmail.com';
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;
        return view('pages.about')-> withData($data);
    }

    public function getContact(){
        return view ('pages.contact');
    }
}