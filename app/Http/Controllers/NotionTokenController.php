<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NotionToken;

class NotionTokenController extends Controller
{
    public function saveToken(Request $request)
    {
        // 最新のトークン情報を全て置き換え保存する
        NotionToken::truncate(); // 今回は1レコードだけ管理する想定

        NotionToken::create([
            'access_token' => $request->input('access_token'),
            'refresh_token' => $request->input('refresh_token'),
            'expires_in' => $request->input('expires_in'),
            'fetched_at' => $request->input('fetched_at'),
        ]);

        return response()->json(['success' => true]);
    }

    public function getToken()
    {
        $token = NotionToken::latest()->first();

        return response()->json([
            'access_token' => $token->access_token,
            'refresh_token' => $token->refresh_token,
            'expires_in' => $token->expires_in,
            'fetched_at' => $token->fetched_at,
        ]);
    }
}
