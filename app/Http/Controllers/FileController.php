<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileController extends Controller
{
    //
    public function store(request $request)
    {
       
        $fileName= $request->file('cour')->getClientOriginalName();
        $path=$request->file('cour')->store('public/uploadFile');
        $request->file('cour')->storeAs('public/uploadFile',$fileName);
         $fileSize= $request->file('cour')->getClientSize();
        $file=new File;
        $file->name=$fileName;
       $file->size=$fileSize;
       $file->path=$path;
       $file->save();
       return "done";

       // echo $path;
    }

}