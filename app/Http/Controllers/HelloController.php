<?php

namespace App\Http\Controllers;

use App\MyClasses\MyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    function __construct(MyService $myservice)
    {
        $myservice = app('App\MyClasses\MyService');
    }

    public function index(Myservice $myservice, int $id = -1)
    {
        $myservice->setId($id);
        $data = [
            'msg'=> $myservice->say($id),
            'data'=> $myservice->alldata()
        ];
        return view('hello.index', $data);
    }
    // private $fname;
    // public function __construct()
    // {
    //     $this->fname = 'hello.txt';
    // }
    // public function index(Request $request, Response $response)
    // {
    //     $name = $request->query('name');
    //     $mail = $request->query('mail');
    //     $tel = $request->query('tel');
    //     $msg = $request->query('msg');
    //     $keys = ['名前','メール','電話'];
    //     $values = [$name, $mail, $tel];
    //     $data = [
    //       'msg'=> $msg,
    //       'keys'=> $keys,
    //       'values'=> $values,
    //     ];
    //     $request->flash();
    //     return view('hello.index', $data);
    // }

    // public function other(Request $request)
    // {
    //     $data = [
    //         'name' => 'Taro',
    //         'mail' => 'taro@yamada',
    //         'tel' => '090-9999-9999',
    //     ];
    //     $query_str = http_build_query($data);
    //     $data['msg'] = $query_str;
    //     return redirect()->route('hello', $data);
    // }
}