<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            'name' => 'Batman',
            'creation_year' => 1978,
            'designer_id' => 1,
            'comics' => 'Spawn - Batman',
        ]);
        
        DB::table('characters')->insert([
            'name' => 'Superman',
            'creation_year' => 1938,
            'designer_id' => 2,
            'comics' => 'Renaissance DC',
        ]);    
            
        DB::table('characters')->insert([
            'name' => 'Spiderman',
            'creation_year' => 1962,
            'designer_id' => 3,
            'comics' => 'Amazing Fantasy',
        ]);
            
    }
}
