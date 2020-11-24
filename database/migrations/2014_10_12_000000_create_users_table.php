<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();//int auto_incremet
            $table->string('name');//varchar
            // $table->text('') mas de 255 caracteres
            $table->string('email')->unique();//unico
            $table->timestamp('email_verified_at')->nullable();//quedara vacio si no se setea
            $table->string('password');
            $table->rememberToken();//varhcar(100)
            //cada ves que el usuario inicie sesion y ponga mantener le sesion
            $table->timestamps();//created at cuando se creo el usuario y el updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');//Borrar la tabla
    }
}
