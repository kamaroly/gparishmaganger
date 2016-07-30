<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->string('photo')->nullable();
            $table->timestamp('dat_of_birth')->nullable();
            $table->string('nationality')->nullable();
            $table->string('sex')->nullable();
            $table->json('children')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('phone')->nullable();
            $table->string('province')->nullable();
            $table->string('district')->nullable();
            $table->string('sector')->nullable();
            $table->string('POBOX')->nullable();
            $table->string('prayer_family')->nullable();
            $table->string('section')->nullable();
            $table->string('address')->nullable();

            $table->string('baptism_in_water')->nullable();
            $table->string('baptism_in_water_date')->nullable();
            $table->string('baptism_in_spirit')->nullable();
            $table->string('commission_ministry')->nullable();
            $table->string('principal_occupation')->nullable();

            $table->string('trainings_attendend')->nullable();
            $table->string('four_principal_words')->nullable();

            $table->string('affermissement')->nullable();
            $table->string('spiritual_laws')->nullable();
            $table->string('other_trainings')->nullable();

            $table->string('languages')->nullable();
            $table->string('primary_school')->nullable();
            $table->string('secondary_school')->nullable();
            $table->string('university')->nullable();
            $table->string('unable_to_read_and_write')->nullable();

            $table->string('signature')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){

            $columns = ['photo',
                        'dat_of_birth',
                        'nationality',
                        'sex',
                        'children',
                        'civil_status',
                        'phone',
                        'province',
                        'district',
                        'sector',
                        'POBOX',
                        'prayer_family',
                        'section',
                        'address',
                        'baptism_in_water',
                        'baptism_in_water_date',
                        'baptism_in_spirit',
                        'commission_ministry',
                        'principal_occupation',
                        'trainings_attendend',
                        'four_principal_words',
                        'affermissement',
                        'spiritual_laws',
                        'other_trainings',
                        'languages',
                        'primary_school',
                        'secondary_school',
                        'university',
                        'unable_to_read_and_write',
                        'signature',
                        ];
            $table->dropColumn($columns);
        });
    }
}
