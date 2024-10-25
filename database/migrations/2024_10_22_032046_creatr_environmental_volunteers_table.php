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
        Schema::create('environmental_volunteers',function (Blueprint $table) {
            $table->id(); // 自動遞增的主鍵 ID
            $table->integer('year')->comment('年');//年
            $table->string('project')->comment('項目');//項目
            $table->integer('total_volunteers')->comment('總人數'); // 總人數
            $table->double('male_volunteers')->comment('男性人數'); // 男性人數
            $table->double('female_volunteers')->comment('女性人數'); // 女性人數
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
        Schema::dropIfExists('environmental_volunteers');
    }
}
