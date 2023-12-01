<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbEmpleados', function (Blueprint $table) {
            $table->id('empId');
            $table->unsignedBigInteger('useId');
            $table->string('empDireccion');
            $table->string('empTrabajo');
            $table->decimal('empSalarioBasico',20, 4);
            $table->date('empFechaAdmision');
            $table->timestamps();
            $table->foreign('useId')->references('useId')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbEmpleados');
    }
};
