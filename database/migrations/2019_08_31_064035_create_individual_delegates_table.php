<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualDelegatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_delegates', function (Blueprint $table) {
            $table->bigIncrements('individualDelegatesId'); //a
            $table->string('fullName', 200); //b
            $table->string('institution', 200); //c
            $table->string('contactNumber', 200)->nullable()->default(NULL);;  //d
            $table->string('lineId', 200)->nullable()->default(NULL);; //e
            $table->string('email', 200); //f
            $table->string('nationality', 200);  //g
            $table->string('idNumber', 200); //h 
            $table->string('gender', 200); //i
            $table->text('medicalConditions')->nullable()->default(NULL); //j
            $table->text('munExperiences')->nullable()->default(NULL); //k
            $table->string('firstCouncilPreference', 200)->nullable()->default(NULL); //i
            $table->string('firstCouncilCountryPreference', 200)->nullable()->default(NULL); //j
            $table->text('firstCouncilReason')->nullable()->default(NULL);//k
            $table->string('secondCouncilPreference', 200)->nullable()->default(NULL);//l
            $table->string('secondCouncilCountryPreference', 200)->nullable()->default(NULL);//m
            $table->text('secondCouncilReason')->nullable()->default(NULL);//n
            $table->string('thirdCouncilPreference', 200)->nullable()->default(NULL);//o
            $table->string('thirdCouncilCountryPreference', 200)->nullable()->default(NULL);//p
            $table->text('thirdCouncilReason')->nullable()->default(NULL);//q
            $table->text('foodRestrictions')->nullable()->default(NULL);//u
            $table->string('accommodation', 200);//v
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individual_delegates');
    }
}
