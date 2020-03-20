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
        $model = new Categories();
        $cat =  $model->getCategories();
        $this->assertTrue(is_array($cat));
        foreach ($cat as $key => $value) {
           $this->assertIsInt($key);
           $this->assertIsString($value);
           $this->assertNotEmpty($value);
        }
    }
}