<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $categories =[
        1 => 'Politic',
        2 => 'Economy',
        3 => 'IT',
        4 => 'Healthy',
    ];
    function getCategories()
    {
       return $this->categories;
    }
}
