<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class essai extends Controller
{
    //
    public function sauvegarde(Request $request){
        Storage::disk('local')->put('avatar',$request->file('avatar'));
    }
}
