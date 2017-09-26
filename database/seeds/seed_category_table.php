<?php

// To run seed: php artisan db:seed --class seed_category_table

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class seed_category_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            ['name'=>('A Categorie')],
            ['name'=>('B Categorie')],
        ]);
    }
}
