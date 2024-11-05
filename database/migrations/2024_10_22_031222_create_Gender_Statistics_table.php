<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenderStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Gender_Statistics', function (Blueprint $table) {
            $table->id();
            $table->integer('year')->comment('年'); // 年
            $table->string('item')->comment('項目'); // 項目
            $table->integer('total_count')->nullable()->comment('總數');
            $table->double('male_count')->nullable()->comment('男性人數');
            $table->double('female_count')->nullable()->comment('女性人數');
            $table->timestamps(); // created_at 和 updated_at 欄位
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Gender_Statistics');
    }
}
