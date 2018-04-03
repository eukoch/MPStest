<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        /* php artisan db:seed --class=ServicesTableSeeder 
         *
         */

        DB::table('services')->insert([[
                'name' => 'Регистрация бизнеса',
                'description' => 'Регистрация бизнеса описание. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => '1',
                'slug' => 'registratsiya_biznesa',
            ], [
                'name' => 'Налоговый консалтинг',
                'description' => 'Налоговый консалтинг описание. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => '2',
                'slug' => 'nalogovy_consulting',
            ], [
                'name' => 'Таможенное право и ВЭД',
                'description' => 'Таможенное право и ВЭД описание. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => '3',
                'slug' => 'tamozhennoye_pravo_i_ved',
            ], [
                'name' => 'Трудовое право',
                'description' => 'Трудовое право описание. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => '4',
                'slug' => 'trudovoye_pravo',
            ], [
                'name' => 'Интеллектуальая собственность',
                'description' => 'Интеллектуальая собственность описание. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => '5',
                'slug' => 'intellektualnaya_sobstvennost',
            ], [
                'name' => 'Корпоративное право',
                'description' => 'Корпоративное право описание. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => '6',
                'slug' => 'korporativnoe_pravo',
            ], [
                'name' => 'Банкротство и ликвидация',
                'description' => 'Банкротство и ликвидация описание. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => '7',
                'slug' => 'bankrotstvo_i_likvidatsiya',
            ], [
                'name' => 'Коммерческое право',
                'description' => 'Коммерческое право описание. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => '8',
                'slug' => 'kommercheskoe_pravo',
            ], [
                'name' => 'Лицензирование',
                'description' => 'Лицензирование описание. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => '9',
                'slug' => 'litsenzirovanie',
            ], [
                'name' => 'Уголовное право',
                'description' => 'Уголовное право описание. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => '10',
                'slug' => 'ugolovnoe_pravo',
            ], [
                'name' => 'Юридический аутсорсинг',
                'description' => 'Юридический аутсорсинг описание. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => '11',
                'slug' => 'yuridicheskiy_autsorsing',
            ], [
                'name' => 'Судебные споры',
                'description' => 'Судебные споры описание. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image' => '12',
                'slug' => 'sudebnye_spory',
        ]]);
    }

}
