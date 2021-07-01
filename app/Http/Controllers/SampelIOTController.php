<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampelIOTController extends Controller
{
    public function getall()
    {
        $alldata = DB::table('sampel__i_o_t_s')->get();
        $set=$alldata;
        // foreach ($alldata as $key => $value) {
        //     $set=$value;
        // }
        // $alldata =array_reverse($alldata);

        return \response()->json([
                "massage" => 'Data Di Dapatkan',
                "data" => $set,
            ]
        );
    }
    public function getupdate()
    {
        $alldata = DB::table('sampel__i_o_t_s')->where('id', '>', $_GET['id'])->get();
        return \response()->json(
            [
                "massage" => 'Data Di Dapatkan',
                "data" => $alldata
            ]
        );
    }
    public function btnstatus()
    {
        $alldata = DB::table('GENERAL')->where('name', '=', 'btnstatus')->first();
        return \response()->json(
            [
                "status" => $alldata->value
            ]
        );
    }
    public function AIRROLE()
    {
        $alldata = DB::table('GENERAL')->where('name', '=', 'airrole')->first();
        return \response()->json(
            [
                "status" => $alldata->value
            ]
        );
    }

    //  public function AIRROLE()
    // {
    //     $alldata = DB::table('GENERAL')->where('name', '>', 'roleair')->firs();
    //     return \response()->json(
    //         [
    //             "status" => $alldata->value
    //         ]
    //     );
    // }

    public function getsave()
    {
        $alldata =
            DB::table('sampel__i_o_t_s')->insert([
                'data_soil' => $_GET['datapoin'],
                'created_at' => date("Y/m/d H:i:s"),
                'updated_at' => date("Y/m/d H:i:s"),
            ]);
        return \response()->json(
            [
                "massage" => 'Data Tersimpan',
            ]
        );
    }
}
