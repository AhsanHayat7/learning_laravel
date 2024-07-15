<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{

    public function index(){
        return view("calculator");
    }

    public function calculate(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operation = $request->input('operation');
        $result = '';

        if(is_numeric($num1) && is_numeric($num2)) {
            if ($operation === 'Add') {
                    $result = $num1 + $num2;
            }
            elseif ($operation === 'Subtract') {

                    $result = $num1 - $num2;}

            elseif ($operation === 'Multiply') {
                    $result = $num1 * $num2;
            }
            elseif ($operation === 'Divide') {
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Division by zero error!";
                    }
                }
            else{
                    $result = "Invalid operation";

            }
        } else {
            $result = "Please enter valid numbers";
        }

        return redirect()->route('cal')->with('result' , $result);
    }
}
