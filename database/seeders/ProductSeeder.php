<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'nome' => 'Cabo Flex 2,5mm',
            'quantidade' => 100,
            'preco' => 120.50,
            'descricao' => 'Cabo de cobre flexível 2,5mm - ideal para instalações residenciais.'
        ]);

        Product::create([
            'nome' => 'Disjuntor 2x20A',
            'quantidade' => 50,
            'preco' => 35.90,
            'descricao' => 'Disjuntor unipolar 20A - proteção contra sobrecargas.'
        ]);

        Product::create([
            'nome' => 'Lâmpada LED 9W',
            'quantidade' => 200,
            'preco' => 12.90,
            'descricao' => 'Lâmpada LED 9W bivolt - baixo consumo de energia.'
        ]);
    }
}
