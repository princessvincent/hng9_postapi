<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function arithemetic(Request $request)
    {
        //  $x = 20;
        //  $y = 30;
        // $x;
        // $y;
        // $operation_type;
        // $operation_types = ["addition", "substraction", "multiplication"];
        // if ($operation_types = null) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => "Invalid operation type provided.",
        //     ]);
        // }
        // $result = "";
        // switch ($operation_types) {
        //     case "addition":
        //         $result = $x + $y;
        //         break;
        //     case "substraction":
        //         $result = $x - $y;
        //         break;
        //     case "multiplication":
        //         $result = $x * $y;
        //         break;
        //     default:
        //         break;
        // }

        // return response()->json([
        //     'status' => 'success',
        //     'SlackName' => "PriscaEbuka",
        //     'operation_types' => $operation_types,
        //     'Result' => $result,
        // ]);

        // if (!$result) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => "Can't complete this method of request",
        //     ]);
        // }

$first_number = $request->input('x');
$second_number = $request->input('y');
$operator = $request->input('operation_type');
$result = '';
if (is_numeric($first_number) && is_numeric($second_number)) {
    switch ($operator) {
        case "addition":
           $result = $first_number + $second_number;
            break;
        case "subtraction":
           $result = $first_number - $second_number;
            break;
        case "multiplication":
            $result = $first_number * $second_number;
            break;
        case "division":
            $result = $first_number / $second_number;
    }
    return response()->json([
            // 'status' => 'success',
            'operation_type' => $operator,
            'result' => $result,
            'slackUsername' => "PriscaEbuka",
            
        ]);
}

    }
}
