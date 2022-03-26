<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UploadController extends Controller
{

    public function uploadForm()
    {
        return view('upload');
    }
    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:5048'
            ]);
        $request->file->store('public/uploads');

        $name = $request->input('name');
        echo 'Name: '.$name;
        echo '<br>';
         
        $reg = $request->input('reg');
        echo 'Register Number: '.$reg;
        echo '<br>';
        
         
        $cgpa = $request->input('cgpa');
        echo 'CGPA: '.$cgpa;
        echo '<br>';
        
         
        $spe = $request->input('specialization');
        echo 'Specialization: '.$spe;
        echo '<br>';
        
        return "Resume has been uploaded";
    }
}

