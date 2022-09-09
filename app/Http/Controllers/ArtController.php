<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtController extends Controller
{
    public function imageupload(Request $request){
        
        return $request->all();
    }
}
