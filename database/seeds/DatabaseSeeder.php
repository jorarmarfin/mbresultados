<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CatalogoTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        $this->call(LogoTableSeeder::class);

        Model::reguard();
    }
}
