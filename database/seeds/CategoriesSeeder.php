<?php

use Illuminate\Database\Seeder;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')
        ->insert($this->generateData());
    }
    protected $categories = [
        'IT',
        'Politic',
        'Social',
        'Economy',
        'Heathy',
        'Country',
        'Money',
        'Food',
        'Ecology',
        'War'

    ];

    protected function generateData()
    {
        $facker = Faker\Factory::create('ru_RU');
        $data = [];
        for ($i=0; $i <  10; $i++) { 
            $data[] = [
                'Name' => $this->categories[$i],
                'Desc' => $facker->realText(rand(10,150)),
                'IsActive' => $facker->boolean(80),
                'created_at' => $facker->date('Y-m-d'),
                'updated_at' => $facker->date('Y-m-d')

            ];
        }
        return $data;


    }
}
