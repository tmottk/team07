<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderStatisticsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 10){
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomName() {
        $first_name = $this->generateRandomString(rand(2, 15));
        $first_name = strtolower($first_name);
        $first_name = ucfirst($first_name);
        return $first_name;;
    }

    public function generateMaleFemaleCount($total_count) {
        $male_count = rand(0, $total_count);
        $female_count = $total_count - $male_count;
    
        return [
            'male_count' => $male_count,
            'female_count' => $female_count
        ];
    }
    
    public function run()
    {

        for ($i=0; $i<500; $i++)
        {
            $name=$this->generateRandomName();
            $total_count = rand(100, 1000);
            $gender_counts = $this->generateMaleFemaleCount($total_count);
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            $male_count = $gender_counts['male_count'];
            $female_count = $gender_counts['female_count'];
            \DB::table("gender_statistics")->insert([
                'year'=>rand(98,111),
                'item'=>$name,
                'total_count' => $total_count,
                'male_count' => $male_count, 
                'female_count' => $female_count,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
      }
    }
}
