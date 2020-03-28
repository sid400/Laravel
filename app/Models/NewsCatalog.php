<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class newsCatalog extends Model
{
    protected $table = 'newsCatalog';
    protected $fillable = ['id','id_category','title','content','IsActive','PublishDate'];

}
