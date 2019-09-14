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
            $table->string('contactNumber', 200);  //d
            $table->string('lineId', 200)->nullable()->default(NULL); //e
            $table->string('email', 200); //f
            $table->string('nationality', 200);  //g
            $table->string('idNumber', 200); //h 
            $table->string('gender', 200); //i
            $table->text('medicalConditions')->nullable()->default(NULL); //j
            $table->text('munExperiences')->nullable()->default(NULL); //k
            $table->string('firstCouncilPreference', 200);
            $table->string('firstCouncilCountryPreference', 200);
            $table->text('firstCouncilReason');
            $table->string('secondCouncilPreference', 200);
            $table->string('secondCouncilCountryPreference', 200);
            $table->text('secondCouncilReason');
            $table->string('thirdCouncilPreference', 200);
            $table->string('thirdCouncilCountryPreference', 200);
            $table->text('thirdCouncilReason');
            $table->text('foodRestrictions');
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
