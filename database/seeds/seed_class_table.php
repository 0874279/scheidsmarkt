<?php

// To run seed: php artisan db:seed --class seed_class_table

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class seed_class_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class')->insert([
            ['name'=>('Reserve 4e klasse')],
            ['name'=>('Reserve 5e klasse')],
            ['name'=>('Reserve 6e klasse')],
            ['name'=>('Reserve 7e klasse')],
            ['name'=>('Reserve 8e klasse')],
        ]);
    }
}
