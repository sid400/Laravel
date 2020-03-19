<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
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
