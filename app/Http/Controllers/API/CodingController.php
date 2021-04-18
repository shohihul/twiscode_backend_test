<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CodingController extends Controller
{
    public function decbin($decimal)
    {
        $binary = '';
        do
        {
            $binary = bcmod($decimal,'2') . $binary;
            $decimal = bcdiv($decimal,'2');
        } while (bccomp($decimal,'0'));

        return($binary);
    }

    public function bindec($binary)
    {
        $binary = str_split($binary);
        $binary = array_reverse($binary);

        $i = 0;
        $decimal = 0;
        foreach($binary as $values) {
            $ans = $values * pow(2, $i);
            $decimal += $ans;
            $i++;
        }

        return $decimal;
    }
}
