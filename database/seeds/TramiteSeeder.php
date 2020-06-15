<?php

use Illuminate\Database\Seeder;

class TramiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('tramite')->truncate();

        DB::table('tramite')->insert(
            [
                'tramite_nombre' => 'Reposición de tarjeta de circulación',
                'tramite_requisitos' => 'Requisitos ejemplo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        
        DB::table('tramite')->insert(
            [
                'tramite_nombre' => 'Renovación de tarjeta de circulación',
                'tramite_requisitos' => 'Requisitos ejemplo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
