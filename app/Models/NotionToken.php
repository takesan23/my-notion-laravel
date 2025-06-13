<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotionToken extends Model
{
    // 保存可能なカラムを定義
    protected $fillable = [
        'access_token',
        'refresh_token',
        'expires_in',
        'fetched_at',
    ];

    // 日付型として扱いたいカラム
    protected $dates = ['fetched_at'];
}
