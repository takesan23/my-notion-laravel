<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NotionController extends Controller
{
    // 🕰 旧API: 学習用に一時残している古いルート
    public function addRecord(Request $request)
    {
        // プロキシサーバーにPOSTリクエストを送る
        $response = Http::post('http://localhost:3000/add-record', [
            'day' => $request->input('day'),
            'summary' => $request->input('summary'),
            'learned' => $request->input('learned'),
        ]);

        return $response->json();
    }
}

