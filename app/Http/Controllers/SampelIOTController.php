<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampelIOTController extends Controller
{
    public function getall()
    {
        $alldata = DB::table('sampel__i_o_t_s')->get();
        return \response()->json(
            [
                "massage" => 'Data Di Dapatkan',
                "data" => $alldata
            ]
        );
    }
    public function getupdate()
    {
        $alldata = DB::table('sampel__i_o_t_s')->where('id','>',$_GET['id'])->get();
        return \response()->json(
            [
                "massage" => 'Data Di Dapatkan',
                "data" => $alldata
            ]
        );
    }
}
