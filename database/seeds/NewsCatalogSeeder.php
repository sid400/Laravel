<?php

use Illuminate\Database\Seeder;

class NewsCatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('newsCatalog')
        ->insert($this->generateData());
    }
    protected function generateData()
    {
        $facker = Faker\Factory::create('ru_RU');
        $data = [];
        for ($i=0; $i <  10; $i++) { 
            $data[] = [
                'id_category' => rand(1,10),
                'title' => $facker->realText(rand(10,20)),
                'content' => $facker->realText(rand(100,600)),
                'IsActive' => $facker->boolean(80),
                'created_at' => $facker->date('Y-m-d'),
                'updated_at' => $facker->date('Y-m-d')

            ];
        }
        return $data;


    }
}
