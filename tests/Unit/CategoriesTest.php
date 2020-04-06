<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Categories;

class CategoriesTest extends TestCase
{
    /**
     * My test
     *
     * @return void
     */
    public function test()
    {
        $cat =  Categories::all();
        $this->assertIsObject($cat);
        foreach ($cat as $key => $value) {
            $this->assertisObject($value);
        //    $this->assertIsInt($key);
        //    $this->assertIsString($value);
        //    $this->assertNotEmpty($value);
        }
    }
}
