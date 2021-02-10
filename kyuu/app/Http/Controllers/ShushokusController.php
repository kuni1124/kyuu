<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shushoku;

class ShushokusController extends Controller
{
    public function index()
    {
        $shushokus = Shushoku::where('display', true)->orderBy('bunrui')->get();
        //$shushokus = Shushoku::where('display', true);

        // メッセージ一覧ビューでそれを表示
        return view('shushokus.index', [
            'shushokus' => $shushokus,
        ]);
    }

    // getでmessages/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
         $shushoku = new Shushoku;
         return view('shushokus.create', [
            'shushoku' => $shushoku,
        ]);
    }

    // postでmessages/にアクセスされた場合の「新規登録処理」
    public function store(Request $request)
    {
        $shushoku = new Shushoku;
        $shushoku->bunrui = $request->bunrui;
        $shushoku->kakaku = $request->kakaku;
        $shushoku->name = $request->name;
        $shushoku->genka = $request->genka;
        $shushoku->display = true;
        $shushoku->save();

        // $shushokus = Shushoku::all();
        // return view('shushokus.index', [
        //     'shushokus' => $shushokus,
        // ]);
       return redirect('/shushoku-index')->with('flash_message', 'STORE!');
    }

    // getでmessages/（任意のid）にアクセスされた場合の「取得表示処理」
    public function show($id)
    {
        //
    }

    // getでmessages/（任意のid）/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        $shushoku = Shushoku::findOrFail($id);
        return view('shushokus.edit', [
            'shushoku' => $shushoku,
        ]);
            //
    }

    // putまたはpatchでmessages/（任意のid）にアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        $shushoku = Shushoku::findOrFail($id);
        $shushoku->bunrui = $request->bunrui;
        $shushoku->kakaku = $request->kakaku;
        $shushoku->genka = $request->genka;

        $shushoku->save();
        return redirect('/shushoku-index')->with('flash_message', 'PUT!');
    }

    // deleteでmessages/（任意のid）にアクセスされた場合の「削除処理」
    public function destroy($id)
    {
        $shushoku = Shushoku::findOrFail($id);
        $shushoku->display = false;
         
        $shushoku->save(); 
         return redirect('/shushoku-index')->with('flash_message', 'DELETE!');
    }
}
