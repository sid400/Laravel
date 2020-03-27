<?php

use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')
            ->insert($this->generateData());
    }
    protected function generateData()
    {
        $facker = Faker\Factory::create('ru_RU');
        $data = [];
        for ($i=0; $i <  10; $i++) {
            $data[] = [
                'name' => $facker->firstName(),
                'surname' => $facker->lastName(),
                'email' => $facker->email(),
                'password' => $facker->password(),
                'created_at' => $facker->date('Y-m-d'),
                'updated_at' => $facker->date('Y-m-d')

            ];
        }
        return $data;


    }
}
