<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CausesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('causes')->truncate();
        $causes = [];
        $faker = Factory::create();

        for ($i =1; $i <= 15; $i++){
            $image = "cause-grid-img" . rand(1,9) . ".jpg";
            $causes[] = [
              'title' => $faker->sentence(rand(8,12)),
              'excerpt' => $faker->text(rand(250,300)),
                'body' => $faker->paragraph(rand(20,30)),
              'image' =>   $image,
              'goal' => $faker->numberBetween(4000,5000) ,
                'initial'=> $faker->numberBetween(600,3000),
                'orange' => $faker->phoneNumber,
                'africell' => $faker->phoneNumber,
                'account' => $faker->bankAccountNumber,
            ];
        }

        DB::table('causes')->insert($causes);
    }
}
