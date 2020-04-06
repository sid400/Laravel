<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateNewsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->assertSee('Add News')
                ->assertSee('Заголовок')
                ->assertSee('Содержание')
                ->press('Создать')
                ->assertSee('Поле Заголовок обязательно для заполнения')
                ->assertSee('Поле Содержание обязательно для заполнения')
                ->type('title', 'min:10')
                ->type('content', 'min:100')
                ->press('Создать')
                ->assertSee('Количество символов в поле Заголовок должно быть не менее 10')
                ->assertSee('Количество символов в поле Содержание должно быть не менее 100');

        });
    }
}
