<?php

use Illuminate\Database\Seeder;
use App\Models\Logo;

class LogoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Logo::create([
            'imagen' => 'logos/ypoP92HpLucEusZY683KDqrC9ADXIVASIFIObrPN.jpeg',
            'nombre' => 'unsa',
            'orden' => '0',
            'activo' => true,
            ]);
        Logo::create([
            'imagen' => 'logos/mKj8rw6z0lch8O0AnFMAPm6qA3MyDv9vjGipAECU.png',
            'nombre' => 'uni',
            'orden' => '0',
            'activo' => true,
            ]);

    }
}
