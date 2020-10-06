<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PersonController;
use App\Models\Person;

class HelloController extends Controller
{
    public function index()
    {
        $sample_msg = env('SAMPLE_MESSAGE');
        $sample_data = env('SAMPLE_DATA');
        $data = [
            'msg'=>$sample_msg,
            'data'=>explode(',', $sample_data)
        ];
        return view('hello.index', $data);
    }

    public function other(Request $request)
    {
        return redirect()->route('sample');
    }

    function __construct()
    {
        config(['sample.message'=>'新しいメッセージ']);
        
    }
}