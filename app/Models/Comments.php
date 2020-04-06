<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'id',
        'id_news',
        'id_user',
        'content',
        'IsActive',
        'PublishDate',
        'IsBanned',
        'id_user_who_ban',
        'date_ban'
    ];
}
