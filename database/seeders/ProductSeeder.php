<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Ternera',
                'description' => 'La mejor carne de primera',
                'price' => 7.8,
                'category_id' => 2,
                'image_key' => "products-image/Ternera.jpg",
                'measurement' => "Kg"
            ],
            [
                'name' => 'Salmón',
                'description' => 'Filete de salmón fresco',
                'price' => 10.5,
                'category_id' => 2,
                'image_key' => "products-image/Salmon.jpg",
                'measurement' => "Kg"
            ],
            [
                'name' => 'Lechuga',
                'description' => 'Lechuga fresca y crujiente',
                'price' => 1.75,
                'category_id' => 1,
                'image_key' => "products-image/Lechuga.jpg",
                'measurement' => "Kg"
            ],
            [
                'name' => 'Sandía',
                'description' => 'Sandía jugosa y refrescante',
                'price' => 3.99,
                'category_id' => 1,
                'image_key' => "products-image/Sandia.webp",
                'measurement' => "Kg"
            ],

            [
                'name' => 'Manzanas',
                'description' => 'Manzanas frescas y jugosas',
                'price' => 1.99,
                'category_id' => 1,
                'image_key' => "products-image/Manzanas.jpg",
                'measurement' => "Kg"
            ],
            [
                'name' => 'Plátanos',
                'description' => 'Plátanos maduros y dulces',
                'price' => 1.25,
                'category_id' => 1,
                'image_key' => "products-image/Platanos.webp",
                'measurement' => "Kg"
            ],
            [
                'name' => 'Tomates',
                'description' => 'Tomates rojos y sabrosos',
                'price' => 2.49,
                'category_id' => 1,
                'image_key' => "products-image/Tomates.jpg",
                'measurement' => "Kg"
            ],
            [
                'name' => 'Cerveza lager',
                'description' => 'Cerveza lager de 330 ml',
                'price' => 2.89,
                'category_id' => 4,
                'image_key' => "products-image/Cerveza-lager.jpg",
                'measurement' => "L"
            ],
            [
                'name' => 'Zanahorias',
                'description' => 'Zanahorias orgánicas',
                'price' => 1.89,
                'category_id' => 1,
                'image_key' => "products-image/Zanahorias.jpg",
                'measurement' => "Kg"
            ],

            [
                'name' => 'Frijoles enlatados',
                'description' => 'Frijoles cocidos y enlatados al natural',
                'price' => 0.99,
                'category_id' => 3,
                'image_key' => "products-image/Frijoles-enlatados.jpg",
                'measurement' => "unit"
            ],
            [
                'name' => 'Tomates enlatados',
                'description' => 'Tomates pelados y enlatados',
                'price' => 1.25,
                'category_id' => 3,
                'image_key' => "products-image/Tomates-enlatados.jpg",
                'measurement' => "unit"
            ],
            [
                'name' => 'Pollo entero',
                'description' => 'Pollo fresco entero',
                'price' => 5.9,
                'category_id' => 2,
                'image_key' => "products-image/Pollo-entero.jpg",
                'measurement' => "Kg"
            ],
            [
                'name' => 'Pescado blanco',
                'description' => 'Filetes de pescado blanco',
                'price' => 8.2,
                'category_id' => 2,
                'image_key' => "products-image/Pescado-blanco.jpg",
                'measurement' => "Kg"
            ],
            [
                'name' => 'Chuletas de cerdo',
                'description' => 'Chuletas de cerdo de calidad',
                'price' => 6.5,
                'category_id' => 2,
                'image_key' => "products-image/Chuletas-de-cerdo.jpg",
                'measurement' => "Kg"
            ],
            [
                'name' => 'Atún enlatado',
                'description' => 'Atún enlatado en agua',
                'price' => 2.49,
                'category_id' => 3,
                'image_key' => "products-image/Atun-enlatado.webp",
                'measurement' => "unit"
            ],
            [
                'name' => 'Puré de patatas enlatado',
                'description' => 'Puré de patatas instantáneo enlatado',
                'price' => 1.75,
                'category_id' => 3,
                'image_key' => "products-image/Pure-de-patatas-enlatado.jpg",
                'measurement' => "unit"
            ],
            [
                'name' => 'Maíz enlatado',
                'description' => 'Maíz dulce enlatado',
                'price' => 1.89,
                'category_id' => 3,
                'image_key' => "products-image/Maiz-enlatado.jpg",
                'measurement' => "unit"
            ],
            [
                'name' => 'Pimientos enlatados',
                'description' => 'Pimientos rojos asados y enlatados',
                'price' => 3.99,
                'category_id' => 3,
                'image_key' => "products-image/Pimientos-enlatados.jpg",
                'measurement' => "unit"
            ],
            [
                'name' => 'Café molido',
                'description' => 'Café molido de tueste medio',
                'price' => 4.99,
                'category_id' => 4,
                'image_key' => "products-image/Cafe-molido.jpg",
                'measurement' => "Kg"
            ],
            [
                'name' => 'Agua mineral',
                'description' => 'Agua embotellada natural',
                'price' => 0.75,
                'category_id' => 4,
                'image_key' => "products-image/Agua-mineral.jpg",
                'measurement' => "unit"
            ],
            [
                'name' => 'Jugo de naranja',
                'description' => 'Jugo de naranja 100% natural',
                'price' => 2.49,
                'category_id' => 4,
                'image_key' => "products-image/Jugo-de-naranja.jpg",
                'measurement' => "L"
            ],
            [
                'name' => 'Refresco de cola',
                'description' => 'Refresco de cola carbonatado',
                'price' => 1.25,
                'category_id' => 4,
                'image_key' => "products-image/Refresco-de-cola.jpg",
                'measurement' => "unit"
            ],
            [
                'name' => 'Té verde',
                'description' => 'Té verde orgánico',
                'price' => 1.75,
                'category_id' => 4,
                'image_key' => "products-image/Te-verde.webp",
                'measurement' => "unit"
            ],

            [
                'name' => 'Agua de coco',
                'description' => 'Agua de coco natural',
                'price' => 3.25,
                'category_id' => 4,
                'image_key' => "products-image/Agua-de-coco.jpg",
                'measurement' => "L"
            ],
            [
                'name' => 'Jugo de piña',
                'description' => 'Jugo de piña 100% natural',
                'price' => 1.99,
                'category_id' => 4,
                'image_key' => "products-image/Jugo-de-piña.jpg",
                'measurement' => "L"
            ],
            [
                'name' => 'Refresco de limón',
                'description' => 'Refresco de limón con gas',
                'price' => 1.49,
                'category_id' => 4,
                'image_key' => "products-image/Refresco-de-limon.jpg",
                'measurement' => "unit"
            ],
            [
                'name' => 'Café instantáneo',
                'description' => 'Café instantáneo soluble',
                'price' => 3.49,
                'category_id' => 4,
                'image_key' => "products-image/Cafe-instantaneo.jpg",
                'measurement' => "unit"
            ],
            [
                'name' => 'Detergente líquido',
                'description' => 'Detergente líquido para ropa',
                'price' => 4.99,
                'category_id' => 5,
                'image_key' => "products-image/Detergente-liquido.jpg",
                'measurement' => "L"
            ],
            [
                'name' => 'Jabón en barra',
                'description' => 'Jabón en barra multiusos',
                'price' => 1.25,
                'category_id' => 5,
                'image_key' => "products-image/Jabon-en-barra.webp",
                'measurement' => "unit"
            ],
            [
                'name' => 'Limpiavidrios',
                'description' => 'Limpiavidrios en aerosol',
                'price' => 2.49,
                'category_id' => 5,
                'image_key' => "products-image/Limpiavidrios.jpg",
                'measurement' => "L"
            ],
            [
                'name' => 'Esponjas para lavar platos',
                'description' => 'Esponjas de cocina para lavar platos',
                'price' => 1.75,
                'category_id' => 5,
                'image_key' => "products-image/Esponjas-para-lavar-platos.webp",
                'measurement' => "unit"
            ],
            [
                'name' => 'Desinfectante multiusos',
                'description' => 'Desinfectante en spray para superficies',
                'price' => 3.99,
                'category_id' => 5,
                'image_key' => "products-image/Desinfectante-multiusos.jpg",
                'measurement' => "L"
            ],
            [
                'name' => 'Toallas de papel',
                'description' => 'Toallas de papel absorbente',
                'price' => 4.99,
                'category_id' => 5,
                'image_key' => "products-image/Toallas-de-papel.jpg",
                'measurement' => "unit"
            ],
            [
                'name' => 'Bolsas de basura',
                'description' => 'Bolsas de basura resistentes',
                'price' => 1.99,
                'category_id' => 5,
                'image_key' => "products-image/Bolsas-de-basura.jpg",
                'measurement' => "unit"
            ],
            [
                'name' => 'Desodorante de ambiente',
                'description' => 'Desodorante de ambiente en aerosol',
                'price' => 2.49,
                'category_id' => 5,
                'image_key' => "products-image/Desodorante-de-ambiente.webp",
                'measurement' => "unit"
            ],
            [
                'name' => 'Escoba',
                'description' => 'Escoba con cerdas resistentes',
                'price' => 8.99,
                'category_id' => 5,
                'image_key' => "products-image/Escoba.jpg",
                'measurement' => "unit"
            ],
            [
                'name' => 'Recogedor',
                'description' => 'Recogedor de polvo y basura',
                'price' => 3.75,
                'category_id' => 5,
                'image_key' => "products-image/Recogedor.jpg",
                'measurement' => "unit"
            ],
            [
                'name' => 'Lavandina',
                'description' => 'Lavandina desinfectante',
                'price' => 2.99,
                'category_id' => 5,
                'image_key' => "products-image/Lavandina.jpg",
                'measurement' => "L"
            ],
            [
                'name' => 'Limpiador de baño',
                'description' => 'Limpiador de baño con aroma fresco',
                'price' => 3.49,
                'category_id' => 5,
                'image_key' => "products-image/Limpiador-de-baño.jpg",
                'measurement' => "L"
            ],
        ]);
    }
}
