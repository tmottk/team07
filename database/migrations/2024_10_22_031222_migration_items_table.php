<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigrationItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marine_mammals_observatison', function (Blueprint $table) {
            $table->id();
            $table->integer('year')->comment('年');; // 年
            $table->string('item')->comment('項目'); // 項目
            $table->integer('total_count')->comment('總數');
            $table->integer('male_count')->comment('男性人數');
            $table->integer('female_count')->comment('女性人數');
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
        Schema::dropIfExists('marine_mammals_observatison');
    }
}
