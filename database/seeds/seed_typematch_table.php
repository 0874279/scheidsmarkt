<?php

// To run seed: php artisan db:seed --class seed_typematch_table

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class seed_typematch_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typematch')->insert([
            ['name'=>('Competitiewedstrijd')],
            ['name'=>('Bekerwedstrijd')],
            ['name'=>('Oefenwedstrijd')],
            ['name'=>('Toernooi')],
            ['name'=>('Zaalwedstrijd')],
        ]);
    }
}
