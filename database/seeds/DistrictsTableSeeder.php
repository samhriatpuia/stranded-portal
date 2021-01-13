<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([

            'name'=>'Aizawl ',

    ]);

    DB::table('districts')->insert([

        'name'=>'Lunglei',

]);

DB::table('districts')->insert([

    'name'=>'Mamit',

]);
DB::table('districts')->insert([

    'name'=>'Kolasib',

]);
DB::table('districts')->insert([

    'name'=>'Champhai',

]);
DB::table('districts')->insert([

    'name'=>'Serchhip',

]);
DB::table('districts')->insert([

    'name'=>'Siaha',

]);
DB::table('districts')->insert([

    'name'=>'Lawngtlai',

]);
DB::table('districts')->insert([

    'name'=>'Saitual',

]);
DB::table('districts')->insert([

    'name'=>'Hnahthial',

]);


DB::table('districts')->insert([

    'name'=>'Khawzawl',

]);


    }
}
