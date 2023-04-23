<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Franco',
            'email' => 'franco@franco.com',
            'password' => Hash::make('123456789'),
            'img' => "img/avatar.jpg",
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Pablo',
            'email' => 'pablo@pablo.com',
            'password' => Hash::make('123456789'),
            'img' => "img/boss.png",
            'is_revisor' => 1,
        ]);

        $categories = [
            ['Elettronica', 'Electronic', 'Electrónica'], 
            ['Abbigliamento', 'Clothing', 'Ropa'], 
            ['Motori', 'Motors', 'Motores'], 
            ['Telefonia', 'Phones', 'Telefonìa'], 
            ['Arredamento', 'Home', 'Muebles'], 
            ['Pet', 'Pet', 'Animales'], 
            ['Libri', 'Books', 'Libros'], 
            ['Infanzia', 'Children', 'Infancias'], 
            ['Sport', 'Sport', 'Sport'], 
            ['Collezionismo', 'Collecting', 'Coleccionar']];
        foreach($categories as $category){
            Category::create([
                'name'=>$category[0],
                'en'=>$category[1],
                'es'=>$category[2],
            ]);
        }
    }
}
