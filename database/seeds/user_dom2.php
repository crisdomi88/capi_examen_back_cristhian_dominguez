<?php

use Illuminate\Database\Seeder;
use App\usuario_domicilio;
use App\usuario_domicilio2;
class user_dom2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(usuario_domicilio::class)->times(100)->create();
        factory(usuario_domicilio2::class)->times(100)->create();
    }
}
