<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactcController extends Controller
{

    public function contact_system()
    {
        return view('contact_us.contact_system');
    }



    public function contact_developer(){


        return view('contact_us.contact_developer');


    }

}
