<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use App\Dai;
use App\Tyuu;
use App\Shou;
use Illuminate\Http\Request;
use Response;
class CsvsController extends Controller
{  public function index(Request $request)
    {
       
        $header = ['品目名', '原価'];
        
        $dais = Dai::all();
        $tyuus = Tyuu::all();
        $shous = Shou::all();
        $csv_data = [];
        foreach ($dais as $dai) {
            $csv_data[] = [
                $dai->name,
                $dai->genka,
            ];
        }
        foreach ($tyuus as $tyuu) {
            $csv_data[] = [
                $tyuu->name,
                $tyuu->genka,
            ];
        }
        foreach ($shous as $shou) {
            $csv_data[] = [
                $shou->name,
                $shou->genka,
            ];
        }

        // レスポンスストリームにcsv用のデータを書き込み
        $stream = fopen('php://temp', 'r+b');
        fputcsv($stream, $header);
        foreach ($csv_data as $row) {
            fputcsv($stream, $row);
        }
        rewind($stream);
        $csv = str_replace(PHP_EOL, "\r\n", stream_get_contents($stream));
        $csv = mb_convert_encoding($csv, 'SJIS-win', 'UTF-8');
        $headers = array(
            'Content-Type'        => 'text/csv',
            'Content-Disposition' => "attachment; filename=randam.csv", // ファイル名
        );

        return Response::make($csv, 200, $headers);
    }
    
}