<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoilersTable extends Migration
{
    public function up()
    {
        Schema::create('boilers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number')->default(0)->comment('号码');
            $table->integer('timeOfCheck')->default(1)->comment('检查时间段');
            $table->string('waterOfFlow')->default(0)->comment('给水流量');
            $table->string('coalOfFlow')->default(0)->comment('给煤积数');
            $table->string('pressureOfSteam')->default(0)->comment('蒸汽压力');
            $table->string('temperatureOfSteam')->default(0)->comment('蒸汽温度');
            $table->string('waterLevelOfSteam')->default(0)->comment('气泡水位');
            $table->string('windOfElectricity')->default(0)->comment('鼓风电流');
            $table->string('driveWindOfElectricity')->default(0)->comment(' 引风电流');
            $table->string('pumpOfElectricity')->default(0)->comment('软水泵电流');
            $table->string('pressureOfWind')->default(0)->comment(' 烟风压力');
            $table->string('temperatureOfWind')->default(0)->comment('烟风温度');
            $table->string('oxygenOfLevel')->default(0)->comment('除氧器液位');
            $table->string('oxygenOfPressure')->default(0)->comment('除氧器压力');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('boilers');
    }
}
