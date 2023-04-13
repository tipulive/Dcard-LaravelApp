<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateAdmninRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admnin_records', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->index('uid')->unique();//Admin id
            $table->string('balance')->default('0')->index("balance");//balance Withdraw
            $table->string('bonus')->default('0')->index("bonus");//Bonus withDraw
            $table->string('addBalance')->default('0')->index("addBalance");//When we add Balance
            $table->string('subscriber')->default('none')->index("subscriber");//companyName
            $table->string('currentAction')->default('none');//companyName
            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->index("updated_at");
            // $table->timestamps('updated_at')->index("updated_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admnin_records');
    }
}
