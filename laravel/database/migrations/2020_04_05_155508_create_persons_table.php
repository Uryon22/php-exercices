<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \Illuminate\Support\Facades\DB;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('name', 32);
            $table->string('nickname', 32);
            $table->date('birthDate');
            $table->integer('numberLike');
        });

        DB::table('persons')->insert([
            [
                'name' => 'Lorem',
                'nickname' => 'Ipsum',
                'birthDate' => '2000-01-11 00:00:00',
                'numberLike' => 1
            ],
            [
                'name' => 'Dolor',
                'nickname' => 'Sit',
                'birthDate' => '2000-01-12 00:00:00',
                'numberLike' => 2
            ],
            [
                'name' => 'Amet',
                'nickname' => 'Consectetur',
                'birthDate' => '2000-01-13 00:00:00',
                'numberLike' => 3
            ],
            [
                'name' => 'Adipiscing',
                'nickname' => 'Elit',
                'birthDate' => '2004-01-14 00:00:00',
                'numberLike' => 4
            ],
            [
                'name' => 'Etiam',
                'nickname' => 'Orci',
                'birthDate' => '1996-01-15 00:00:00',
                'numberLike' => 5
            ],
            [
                'name' => 'Fringilla',
                'nickname' => 'Molestie',
                'birthDate' => '1985-01-16 00:00:00',
                'numberLike' => 6
            ],
            [
                'name' => 'Turpis',
                'nickname' => 'Sollicitudin',
                'birthDate' => '1999-01-17 00:00:00',
                'numberLike' => 7
            ],
            [
                'name' => 'Cras',
                'nickname' => 'Vitae',
                'birthDate' => '2007-01-18 00:00:00',
                'numberLike' => 8
            ],
            [
                'name' => 'Lobortis',
                'nickname' => 'Nunc',
                'birthDate' => '1979-01-19 00:00:00',
                'numberLike' => 9
            ],
            [
                'name' => 'Lectus',
                'nickname' => 'Rhoncus',
                'birthDate' => '2003-01-20 00:00:00',
                'numberLike' => 10
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}
