<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->char('firstName')->nullable(false);
            $table->char("lastName")->nullable(false);
            $table->char('identityCode', 10)->nullable(false)->unique();
            $table->char('phoneNumber',15)->nullable(false);
            $table->date('birthDate')->nullable(false);
            $table->text('address');
            $table->rememberToken();
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
        Schema::dropIfExists('clients');
    }
}
