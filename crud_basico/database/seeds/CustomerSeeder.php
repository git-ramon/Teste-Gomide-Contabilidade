<?php

use App\Produto;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        factory(App\Produto::class, 100)->create();
    }
}
