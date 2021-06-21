<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactController extends Controller
{
    public function index(Request $request) {
        //$user = contact::all();
        return view('index');
    }
    public function post(Request $request) {
        $this->validate($request, contact::$rules);
        $user = new contact;
        $form = $request->all();
        unset($form['_token_']);
        $user->fill($form)->save();
        return redirect('thanks');
    }
}
