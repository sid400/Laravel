<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCatalog extends Model
{

    function getNewsById($id)
    {

        $sql ="SELECT t1.id,t1.id_category,t1.title ,t1.content,t1.IsActive,t1.created_at,t2.Name
        FROM newsCatalog AS t1 
        JOIN categories as t2 
        on t2.id=t1.id_category
        WHERE t1.id  =  :id AND t2.IsActive =1";
        $rows= \DB::select($sql,[':id'=>$id]);  
        return $rows;
    }
    function getNewsByIdCategory($id)
    {

        $sql ="SELECT t1.id,t1.id_category,t1.title ,t1.content,t1.IsActive,t1.created_at,t2.Name
        FROM newsCatalog AS t1 
        JOIN categories as t2 
        on t2.id=t1.id_category
        WHERE t1.id_category  =  :id
        AND t1.IsActive = 1 ";
        $rows= \DB::select($sql,[':id'=>$id]);  
        return $rows;
    }
    function getCountNewsByCategory()
    {

        $sql ="SELECT count(*) AS num,t2.id,t2.Name
        FROM newsCatalog AS t1 
        JOIN categories as t2 
        on t2.id=t1.id_category
        WHERE t1.IsActive = 1
        GROUP BY t2.id";
        $rows= \DB::select($sql);
        $categoryCount = [];
        foreach ($rows as $key => $value) {
            $categoryCount [$value->id] = $value->num;
        } 

        return $categoryCount;
    }
}