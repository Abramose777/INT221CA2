<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SumController extends Controller
{
    public function postSum(Request $request) {
        
        $first = $request->input('first');
        echo 'First Number: '.$first;
        echo '<br>';
        
       
        $second = $request->input('second');
        echo 'Second Number :'.$second;
        echo '<br>';
        
        echo 'Sum of two numbers is: '.$first + $second;
        echo '<br>';
        

     }
}
