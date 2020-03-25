<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    function getActiveCategories()
    {
        $sql ="SELECT * FROM categories WHERE IsActive  =  1";
        $rows= \DB::select($sql);  
        return $rows;
    }
}
