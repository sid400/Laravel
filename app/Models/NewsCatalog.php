<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class newsCatalog extends Model
{
    protected $table = 'newsCatalog';
    protected $fillable = ['id', 'id_category', 'title', 'content', 'IsActive', 'PublishDate'];
    const rules = [
        'title' => 'Required|max:100|min:10',
        'content' => 'Required|max:10000|min:100',
        'IsActive' => 'boolean',
        'id_category' => 'Required|exists:categories,id',
    ];
    public static function attributeNames()
    {
       return[
           'id_category' => 'Категория'
       ];
    }
}
