<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRloggerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rlogger', function (Blueprint $table) {
            $table->string('id');
            $table->string('user_id')->nullable();
            $table->text('message');
            $table->string('file', 800)->nullable();
            $table->integer('line')->nullable();
            $table->text('stacktrace')->nullable();
            $table->longText('trace_json')->nullable();
            $table->text('user_agent')->nullable();
            $table->text('url')->nullable();
            $table->integer('http_code')->nullable();
            $table->text('exception_type')->nullable();
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
        Schema::dropIfExists('rlogger');
    }
}
