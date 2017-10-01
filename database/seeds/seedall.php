<?php

// To run seed: php artisan db:seed --class seed_class_table

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class seedall extends Seeder
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

        DB::table('category')->insert([
            ['name'=>('A Categorie')],
            ['name'=>('B Categorie')],
        ]);

        DB::table('typematch')->insert([
            ['name'=>('Competitiewedstrijd')],
            ['name'=>('Bekerwedstrijd')],
            ['name'=>('Oefenwedstrijd')],
            ['name'=>('Toernooi')],
            ['name'=>('Zaalwedstrijd')],
        ]);

        DB::table('typeteam')->insert([
            ['name'=>('Heren')],
            ['name'=>('Dames')],
            ['name'=>('G-voetbal')],
            ['name'=>('Jongens onder 20')],
            ['name'=>('Jongens onder 19')],
            ['name'=>('Jongens onder 18')],
            ['name'=>('Jongens onder 17')],
            ['name'=>('Jongens onder 16')],
            ['name'=>('Jongens onder 15')],
            ['name'=>('Jongens onder 14')],
            ['name'=>('Jongens onder 13')],
            ['name'=>('Jongens onder 12')],
            ['name'=>('Jongens onder 11')],
            ['name'=>('Jongens onder 10')],
            ['name'=>('Jongens onder 9')],
            ['name'=>('Jongens onder 8')],
            ['name'=>('Jongens onder 7')],
            ['name'=>('Jongens onder 6')],
            ['name'=>('Meisjes onder 19')],
            ['name'=>('Meisjes onder 17')],
            ['name'=>('Meisjes onder 15')],
            ['name'=>('Meisjes onder 13')],
        ]);
    }
}
