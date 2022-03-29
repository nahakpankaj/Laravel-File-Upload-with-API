<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function fileUploadindex(){
        return view('fileUpload');
    }

    function fileUploadPost(Request $request){

        $filename =time().".kp". $request->file('file')->getClientOriginalName();

        $request->file('file')->storeAs('uploads',$filename);
        return back()->with('success','You have successfully Upload the file.')->with('file',$filename);
        /*         echo "<pre>";
        print_r($request->all());
  */
  /*   $request->validate([
            'file'=> 'required| mimes:pdf, xlx, csv, jpeg, jpg:2048'
        ]);
        $fileupload = time().'.'.$request->file->extenion();
        $request->file->move(public_path('uploads'), $fileupload);
        return back()->with('success','you have successfully Upload the file.')->with('file',$fileupload); */
    }
}
