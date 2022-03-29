<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadCOntroller extends Controller
{
    //API
    function index(Request $request){

       $result= $request->file('file')->getClientOriginalName();
       $request->file('file')->storeAs('apidocs',$result);
        return ["result"=>$result];
    }
}
