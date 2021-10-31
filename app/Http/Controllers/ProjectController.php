<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function getData(Request $request){
        $date= date('Y-m-d');
        // $date="2021-08-01";
        //$response = Http::get("https://api.soccersapi.com/v2.2/fixtures/?user=farzanaeva040&token=2121c25044766d9b6930a3d71a2b8b6b&t=schedule&d=.$date.&league_id=1609");
        $response = Http::get("https://api.soccersapi.com/v2.2/livescores/?user=farzanaeva040&token=2121c25044766d9b6930a3d71a2b8b6b&t=today");
        return view('index',['response'=>$response]);

    }

    public function about(Request $request){
        return view('about');
    }
}


