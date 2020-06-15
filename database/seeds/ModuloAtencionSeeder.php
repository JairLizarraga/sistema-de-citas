<?php

use Illuminate\Database\Seeder;

class ModuloAtencionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('modulo_atencion')->truncate();

        DB::table('modulo_atencion')->insert(
            [
                'modulo_nombre' => 'Oficina Central Insurgentes',
                'modulo_direccion' => 'example address',
                'modulo_telefono' => '5512341234',
                'modulo_email' => 'example@example.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        
        DB::table('modulo_atencion')->insert(
            [
                'modulo_nombre' => 'Módulo Móvil 30',
                'modulo_direccion' => 'example address',
                'modulo_telefono' => '5512341234',
                'modulo_email' => 'example@example.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        
        DB::table('modulo_atencion')->insert(
            [
                'modulo_nombre' => 'Módulo Móvil 18',
                'modulo_direccion' => 'example address',
                'modulo_telefono' => '5512341234',
                'modulo_email' => 'example@example.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
