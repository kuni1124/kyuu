<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fukushoku;

class FukushokusController extends Controller
{
    public function index()
    {
        $fukushokus = Fukushoku::where('display', true)->orderBy('bunrui')->get();
        //$shushokus = Shushoku::where('display', true);

        // メッセージ一覧ビューでそれを表示
        return view('fukushokus.index', [
            'fukushokus' => $fukushokus,
        ]);
    }

    // getでmessages/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
         $fukushoku = new Fukushoku;
         return view('fukushokus.create', [
            'fukushoku' => $fukushoku,
        ]);
    }

    // postでmessages/にアクセスされた場合の「新規登録処理」
    public function store(Request $request)
    {
        $fukushoku = new Fukushoku;
        $fukushoku->bunrui = $request->bunrui;
        $fukushoku->kakaku = $request->kakaku;
        $fukushoku->name = $request->name;
        $fukushoku->genka = $request->genka;
        $fukushoku->display = true;
        $fukushoku->save();

        // $shushokus = Shushoku::all();
        // return view('shushokus.index', [
        //     'shushokus' => $shushokus,
        // ]);
       return redirect('/fukushoku-index')->with('flash_message', 'STORE!');
    }

    // getでmessages/（任意のid）にアクセスされた場合の「取得表示処理」
    public function show($id)
    {
        //
    }

    // getでmessages/（任意のid）/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        $fukushoku = Fukushoku::findOrFail($id);
        return view('fukushokus.edit', [
            'fukushoku' => $fukushoku,
        ]);
            //
    }

    // putまたはpatchでmessages/（任意のid）にアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        $fukushoku = Fukushoku::findOrFail($id);
        $fukushoku->bunrui = $request->bunrui;
        $fukushoku->kakaku = $request->kakaku;
        $fukushoku->genka = $request->genka;

        $fukushoku->save();
        return redirect('/fukushoku-index')->with('flash_message', 'PUT!');
    }

    // deleteでmessages/（任意のid）にアクセスされた場合の「削除処理」
    public function destroy($id)
    {
        $fukushoku = Fukushoku::findOrFail($id);
        $fukushoku->display = false;
         
        $fukushoku->save(); 
         return redirect('/fukushoku-index')->with('flash_message', 'DELETE!');
    }
}
