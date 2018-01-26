<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Http\Requests\RegistrationForm;


class RegistrationController extends Controller
{
public function create () {

    return view('registration.create');            

}

public function __construct(){
    $this->middleware('guest');
    }

public function store (RegistrationForm $form) {


   $form->persist();

   session()->flash('message','Thanks for signing up');
    

return redirect()->home();

}

    
}
