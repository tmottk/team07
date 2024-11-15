<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class environmental_volunteersTableSeeder extends Seeder
{
    /**
     * 產生隨機字串.
     *
     * @return string
     */
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * 產生隨機名稱.
     *
     * @return string
     */
    public function generateRandomName() {
        $first_name = $this->generateRandomString(rand(2, 15));
        $first_name = strtolower($first_name);
        return ucfirst($first_name);
    }

    /**
     * 隨機分配男性和女性人數.
     *
     * @return array
     */
    public function generateMaleFemaleCount($total_count) {
        $male_count = rand(0, $total_count);
        $female_count = $total_count - $male_count;
    
        return [
            'male_count' => $male_count,
            'female_count' => $female_count
        ];
    }
    
    /**
     * 執行 Seeder.
     *
     * @return void
     */
    public function run() {
        for ($i = 0; $i < 500; $i++) {
            $name = $this->generateRandomName();
            $total_count = rand(100, 1000);
            $gender_counts = $this->generateMaleFemaleCount($total_count);
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            $male_count = $gender_counts['male_count'];
            $female_count = $gender_counts['female_count'];

            // 插入資料至 environmental_volunteers 表
            DB::table("environmental_volunteers")->insert([
                'year' => rand(98, 111),
                'project' => $name,
                'total_volunteers' => $total_count,
                'male_volunteers' => $male_count,
                'female_volunteers' => $female_count,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
