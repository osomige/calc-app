<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{

    public function show($num1,$operator,$num2)
    {
    switch ($operator) {
    case 'addition':
        $answer = $num1 + $num2;
        break;
    case 'subtraction':
        $answer = $num1 - $num2;
        break;
    case 'multiplication':
        $answer = $num1 * $num2;
        break;
    case 'division':
        $answer = $num1 / $num2;
        break;
    default:
        $answer = '演算子を入れましょう';
    }
        
        return view('calcs.show',['answer' => $answer]);
    }
}
