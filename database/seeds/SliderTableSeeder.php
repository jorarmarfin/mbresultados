<?php

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'imagen' => 'slides/UVhtXdJLE0oHV5MmfTjHXiEBtuODeqoGsaFIOW7j.jpeg',
            'titulo1' => 'Implementación y auditorias',
            'titulo2' => 'de Normas Internacionales ',
            'link' => '#m',
            'orden' => '0',
            'activo' => true,
            ]);
        Slider::create([
            'imagen' => 'slides/rPIUystvjt1mlSqNEUnJDRHpVP67pysBhWxXwYXt.jpeg',
            'titulo1' => 'Acompañamiento en',
            'titulo2' => 'Auditorias de Certificación',
            'link' => '#m',
            'orden' => '0',
            'activo' => true,
            ]);

    }
}
