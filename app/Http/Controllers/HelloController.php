<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{

    public function index(Request $request) {

      $data = [
          ['name' => '山田たろう', 'mail' => 'taro@yamada'],
          ['name' => '田中はなこ', 'mail' => 'taro@flower'],
          ['name' => '鈴木さちこ', 'mail' => 'taro@happy']
      ];
      return view('hello.index', ['data' => $data]);
    }

    public function post(Request $request){

      return view('hello.index', ['msg' => $request->msg]);
    }
}
