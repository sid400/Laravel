<?php

use Illuminate\Database\Seeder;

class commentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')
            ->insert($this->generateData());
    }
    protected function generateData()
    {
        $facker = Faker\Factory::create('ru_RU');
        $data = [];
        for ($i=0; $i <  1000; $i++) {
            $data[] = [
                'id_news' => rand(1,50),
                'id_user' => rand(1,10),
                'PublishDate' => $facker->date('Y-m-d'),
                'content' => $facker->realText(rand(100,600)),
                'created_at' => $facker->date('Y-m-d'),
                'updated_at' => $facker->date('Y-m-d')

            ];
        }
        return $data;


    }
}
