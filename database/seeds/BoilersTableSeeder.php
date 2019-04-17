<?php

use Illuminate\Database\Seeder;
use App\Models\Boiler;

class BoilersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $boilers = factory(Boiler::class)->times(10)->make();
        Boiler::insert($boilers->toArray());
    }
}
