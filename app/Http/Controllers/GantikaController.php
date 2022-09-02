<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GantikaController extends Controller
{
    public function soal_a()
    {
        $data = array(12, 9, 30, "A", "M", 99, 82, "J", "N", "B");
        sort($data);
        dd($data);
    }

    public function soal_b()
    {
    }

    public function soal_c_a()
    {
        $inputanA = "Hello World";
        // $a = count_chars($inputanA, 1);
        $a = count_chars($inputanA, 1);
        dd($a);
    }

    public function soal_c_b($str, $x = false)
    {
        $str = "Bismillah";
        $tmp = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
        foreach ($tmp as $c) {
            $chr[$c] = isset($chr[$c]) ? $chr[$c] + 1 : 1;
        }
        return is_bool($x) ? ($x ? $chr : count($chr)) : $chr[$x];

        dd($x, true);
    }

    public function soal_c_c()
    {
        $inputanA = "MasyaAllah";
        $a = count_chars($inputanA, 1);
        dd($a);
    }
}
