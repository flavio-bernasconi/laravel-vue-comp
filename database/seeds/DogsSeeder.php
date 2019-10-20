<?php

use Illuminate\Database\Seeder;
use App\Dog;

class DogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Dog::class, 20) -> create();
    }
}
