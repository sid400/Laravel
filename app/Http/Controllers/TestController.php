<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        /*$sql = "CREATE TABLE test(
            id int,
            content varchar(50)
        )";
        \DB::statement($sql);*/
        /*$sql ="INSERT INTO test (id , content)
        VALUES 
        (1, 'test 1'),
        (2, 'test 2'),
        (3, 'test 3'),
        (4, 'test 4')";
        \DB::insert($sql);*/
        $id = 3;
        $sql ="SELECT * FROM test WHERE id  =  :id";
        $sql ="SELECT * FROM test";
        $rows= \DB::select($sql/*,[':id'=>$id]*/);        
        var_dump($rows);
        return view('Test', ['rows' => $rows]);
    }
}