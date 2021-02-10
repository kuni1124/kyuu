<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shushoku;

class KakuninsController extends Controller
{
    public function index()
    {
       
        return view('kakunins.index');
    }

    // getでmessages/createにアクセスされた場合の「新規登録画面表示処理」
  
}
