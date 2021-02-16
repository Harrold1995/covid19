<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class biuController extends Controller
{
    public function postbiu(Request $request){
           $validator = Validator::make(Input::all(), biudata::$rules);
           if($validator -> passes()){
               $biudata = new biudata;
               $biudata->name = Input::get('name');
               $biudata->address = Input::get('address');
               $biudata->contact = Input::get('contact');
               $biudata->birthday = Input::get('birthday');
               $biudata->age = Input::get('age');
               $biudata->origin = Input::get('origin');
               $biudata->transpo = Input::get('transpo');
               $biudata->departure = Input::get('departure');
               $biudata->arrival = Input::get('arrival');
               $biudata->ticket = Input::get('ticket');
               $biudata->proof = Input::get('proof');
               $biudata->schedule = Input::get('schedule');
               $biudata->coor = Input::get('coor');
               $biudata->endorse = Input::get('endorse');
               $biudata->save();
               return Redirect::to('biu');
           } else {
               return Redirect::to('index');
           }
       }

       public function store()
       {
        dd($request->all());
       }
}






