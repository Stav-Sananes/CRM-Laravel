<?php

namespace Database\Seeders;

use App\Models\Upcoming;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class UpcomingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=0;$i<5;$i++){
            Upcoming::create([
                'completed' => false,
                'title' => $faker->sentence($nbWords=4,$variablewords = false),
                'approved' => false,
                'waiting' => true,
                'task_id' => Str::random(10)
            ]);
        }
    }
}