<?php

namespace App\Http\Controllers;
use App\Rules\Uppercase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    //
    public function store(Request $request){
      
        // Storage::disk('local')->put('avatary',$request->file('avatar'));
        Storage::disk('public')->put('avatarz',$request->file('avatar'));//

 
        echo "helloe";   
    }
    public function index(Request $request){
        
    }
}
