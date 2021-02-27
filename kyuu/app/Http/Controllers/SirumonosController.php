<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sirumono;
class SirumonosController extends Controller
{
    public function index()
    {
        $sirumonos = Sirumono::where('display', true)->orderBy('bunrui')->get();
       
        //$shushokus = Shushoku::where('display', true);

        // メッセージ一覧ビューでそれを表示
        return view('sirumonos.index', [
            'sirumonos' => $sirumonos,
        ]);
    }

    // getでmessages/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
         $sirumono = new Sirumono;
         return view('sirumonos.create', [
            'sirumono' => $sirumono,
        ]);
    }

    // postでmessages/にアクセスされた場合の「新規登録処理」
    public function store(Request $request)
    {
        
        $sirumono = new Sirumono;
        $sirumono->bunrui = $request->bunrui;
        $sirumono->kakaku = $request->kakaku;
        $sirumono->name = $request->name;
        $sirumono->genka = $request->genka;
        
        $sirumono->display = true;
        $sirumono->save();
        
        // $shushokus = Shushoku::all();
        // return view('shushokus.index', [
        //     'shushokus' => $shushokus,
        // ]);
       return redirect('/sirumono-index')->with('flash_message', 'STORE!');
    }

    // getでmessages/（任意のid）にアクセスされた場合の「取得表示処理」
    public function show($id)
    {
        //
    }

    // getでmessages/（任意のid）/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        $sirumono = Sirumono::findOrFail($id);
        return view('sirumonos.edit', [
            'sirumono' => $sirumono,
        ]);
            //
    }

    // putまたはpatchでmessages/（任意のid）にアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        $sirumono = Sirumono::findOrFail($id);
        $sirumono->bunrui = $request->bunrui;
        $sirumono->kakaku = $request->kakaku;
        $sirumono->genka = $request->genka;

        $sirumono->save();
        return redirect('/sirumono-index')->with('flash_message', 'PUT!');
    }

    // deleteでmessages/（任意のid）にアクセスされた場合の「削除処理」
    public function destroy($id)
    {
        $sirumono = Sirumono::findOrFail($id);
        $sirumono->display = false;
         
        $sirumono->save(); 
         return redirect('/sirumono-index')->with('flash_message', 'DELETE!');
    }
}
