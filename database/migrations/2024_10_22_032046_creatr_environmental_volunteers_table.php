<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatrEnvironmentalVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Scheam::create('environmental_volunteers',function (Blueprint $table) {
            $table->id(); // 自動遞增的主鍵 ID
            $table->unsignedInteger('total_volunteers'); // 總人數
            $table->unsignedInteger('male_volunteers'); // 男性人數
            $table->unsignedInteger('female_volunteers'); // 女性人數
            $table->timestamps(); // 生成 created_at 和 updated_at 欄位
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
