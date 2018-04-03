<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     * 
     * подсказка для себя:
     * php artisan migrate:reset
     * php artisan migrate
     */
    public function up() {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index();
            $table->text('description');
            $table->string('image');
            $table->string('slug')->unique();
        });
        
        /**
         * ВНИМАНИЕ!
         * Для этой таблицы создан seed с набором начальных данных
         * 
         * class ServicesTableSeeder
         * вызов: php artisan db:seed --class=ServicesTableSeeder
         */
        
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('services');
    }

}
