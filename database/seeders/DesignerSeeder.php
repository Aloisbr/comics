<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designers')->insert([
            'name' => 'Bob Kane',
            'birth_year' => 1478,
            'nationality' => 'fr',
        ]);
        
        DB::table('designers')->insert([
            'name' => 'San',
            'birth_year' => 1538,
            'nationality' => 'en',
        ]);    
            
        DB::table('designers')->insert([
            'name' => 'Sman',
            'birth_year' => 1662,
            'nationality' => 'es',
        ]);
    }
}
