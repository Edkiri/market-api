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
                'image_key' => "products-image/Ternera.jpg"
            ],
            [
                'name' => 'Salmón',
                'description' => 'Filete de salmón fresco',
                'price' => 10.5,
                'category_id' => 2,
                'image_key' => "products-image/Salmon.jpg"
            ],
            [
                'name' => 'Pollo entero',
                'description' => 'Pollo fresco entero',
                'price' => 5.9,
                'category_id' => 2,
                'image_key' => "products-image/Pollo-entero.jpg"
            ],
            [
                'name' => 'Pescado blanco',
                'description' => 'Filetes de pescado blanco',
                'price' => 8.2,
                'category_id' => 2,
                'image_key' => "products-image/Pescado-blanco.jpg"
            ],
            [
                'name' => 'Chuletas de cerdo',
                'description' => 'Chuletas de cerdo de calidad',
                'price' => 6.5,
                'category_id' => 2,
                'image_key' => "products-image/Chuletas-de-cerdo.jpg"
            ],
            [
                'name' => 'Manzanas',
                'description' => 'Manzanas frescas y jugosas',
                'price' => 1.99,
                'category_id' => 1,
                'image_key' => "products-image/Manzanas.jpg"
            ],
            [
                'name' => 'Plátanos',
                'description' => 'Plátanos maduros y dulces',
                'price' => 1.25,
                'category_id' => 1,
                'image_key' => "products-image/Platanos.webp"
            ],
            [
                'name' => 'Tomates',
                'description' => 'Tomates rojos y sabrosos',
                'price' => 2.49,
                'category_id' => 1,
                'image_key' => "products-image/Tomates.jpg"
            ],
            [
                'name' => 'Lechuga',
                'description' => 'Lechuga fresca y crujiente',
                'price' => 1.75,
                'category_id' => 1,
                'image_key' => "products-image/Lechuga.jpg"
            ],
            [
                'name' => 'Zanahorias',
                'description' => 'Zanahorias orgánicas',
                'price' => 1.89,
                'category_id' => 1,
                'image_key' => "products-image/Zanahorias.jpg"
            ],
            [
                'name' => 'Sandía',
                'description' => 'Sandía jugosa y refrescante',
                'price' => 3.99,
                'category_id' => 1,
                'image_key' => "products-image/Sandia.webp"
            ],
            [
                'name' => 'Frijoles enlatados',
                'description' => 'Frijoles cocidos y enlatados al natural',
                'price' => 0.99,
                'category_id' => 3,
                'image_key' => "products-image/Frijoles-enlatados.jpg"
            ],
            [
                'name' => 'Tomates enlatados',
                'description' => 'Tomates pelados y enlatados',
                'price' => 1.25,
                'category_id' => 3,
                'image_key' => "products-image/Tomates-enlatados.jpg"
            ],
            [
                'name' => 'Atún enlatado',
                'description' => 'Atún enlatado en agua',
                'price' => 2.49,
                'category_id' => 3,
                'image_key' => "products-image/Atun-enlatado.webp"
            ],
            [
                'name' => 'Puré de patatas enlatado',
                'description' => 'Puré de patatas instantáneo enlatado',
                'price' => 1.75,
                'category_id' => 3,
                'image_key' => "products-image/Pure-de-patatas-enlatado.jpg"
            ],
            [
                'name' => 'Maíz enlatado',
                'description' => 'Maíz dulce enlatado',
                'price' => 1.89,
                'category_id' => 3,
                'image_key' => "products-image/Maiz-enlatado.jpg"
            ],
            [
                'name' => 'Pimientos enlatados',
                'description' => 'Pimientos rojos asados y enlatados',
                'price' => 3.99,
                'category_id' => 3,
                'image_key' => "products-image/Pimientos-enlatados.jpg"
            ],
            [
                'name' => 'Agua mineral',
                'description' => 'Agua embotellada natural',
                'price' => 0.75,
                'category_id' => 4,
                'image_key' => "products-image/Agua-mineral.jpg"
            ],
            [
                'name' => 'Jugo de naranja',
                'description' => 'Jugo de naranja 100% natural',
                'price' => 2.49,
                'category_id' => 4,
                'image_key' => "products-image/Jugo-de-naranja.jpg"
            ],
            [
                'name' => 'Refresco de cola',
                'description' => 'Refresco de cola carbonatado',
                'price' => 1.25,
                'category_id' => 4,
                'image_key' => "products-image/Refresco-de-cola.jpg"
            ],
            [
                'name' => 'Té verde',
                'description' => 'Té verde orgánico',
                'price' => 1.75,
                'category_id' => 4,
                'image_key' => "products-image/Te-verde.webp"
            ],
            [
                'name' => 'Café molido',
                'description' => 'Café molido de tueste medio',
                'price' => 4.99,
                'category_id' => 4,
                'image_key' => "products-image/Cafe-molido.jpg"
            ],
            [
                'name' => 'Cerveza lager',
                'description' => 'Cerveza lager de 330 ml',
                'price' => 2.89,
                'category_id' => 4,
                'image_key' => "products-image/Cerveza-lager.jpg"
            ],
            [
                'name' => 'Agua de coco',
                'description' => 'Agua de coco natural',
                'price' => 3.25,
                'category_id' => 4,
                'image_key' => "products-image/Agua-de-coco.jpg"
            ],
            [
                'name' => 'Jugo de piña',
                'description' => 'Jugo de piña 100% natural',
                'price' => 1.99,
                'category_id' => 4,
                'image_key' => "products-image/Jugo-de-piña.jpg"
            ],
            [
                'name' => 'Refresco de limón',
                'description' => 'Refresco de limón con gas',
                'price' => 1.49,
                'category_id' => 4,
                'image_key' => "products-image/Refresco-de-limon.jpg"
            ],
            [
                'name' => 'Café instantáneo',
                'description' => 'Café instantáneo soluble',
                'price' => 3.49,
                'category_id' => 4,
                'image_key' => "products-image/Cafe-instantaneo.jpg"
            ],
            [
                'name' => 'Detergente líquido',
                'description' => 'Detergente líquido para ropa',
                'price' => 4.99,
                'category_id' => 5,
                'image_key' => "products-image/Detergente-liquido.jpg"
            ],
            [
                'name' => 'Jabón en barra',
                'description' => 'Jabón en barra multiusos',
                'price' => 1.25,
                'category_id' => 5,
                'image_key' => "products-image/Jabon-en-barra.webp"
            ],
            [
                'name' => 'Limpiavidrios',
                'description' => 'Limpiavidrios en aerosol',
                'price' => 2.49,
                'category_id' => 5,
                'image_key' => "products-image/Limpiavidrios.jpg"
            ],
            [
                'name' => 'Esponjas para lavar platos',
                'description' => 'Esponjas de cocina para lavar platos',
                'price' => 1.75,
                'category_id' => 5,
                'image_key' => "products-image/Esponjas-para-lavar-platos.webp"
            ],
            [
                'name' => 'Desinfectante multiusos',
                'description' => 'Desinfectante en spray para superficies',
                'price' => 3.99,
                'category_id' => 5,
                'image_key' => "products-image/Desinfectante-multiusos.jpg"
            ],
            [
                'name' => 'Toallas de papel',
                'description' => 'Toallas de papel absorbente',
                'price' => 4.99,
                'category_id' => 5,
                'image_key' => "products-image/Toallas-de-papel.jpg"
            ],
            [
                'name' => 'Bolsas de basura',
                'description' => 'Bolsas de basura resistentes',
                'price' => 1.99,
                'category_id' => 5,
                'image_key' => "products-image/Bolsas-de-basura.jpg"
            ],
            [
                'name' => 'Desodorante de ambiente',
                'description' => 'Desodorante de ambiente en aerosol',
                'price' => 2.49,
                'category_id' => 5,
                'image_key' => "products-image/Desodorante-de-ambiente.webp"
            ],
            [
                'name' => 'Escoba',
                'description' => 'Escoba con cerdas resistentes',
                'price' => 8.99,
                'category_id' => 5,
                'image_key' => "products-image/Escoba.jpg"
            ],
            [
                'name' => 'Recogedor',
                'description' => 'Recogedor de polvo y basura',
                'price' => 3.75,
                'category_id' => 5,
                'image_key' => "products-image/Recogedor.jpg"
            ],
            [
                'name' => 'Lavandina',
                'description' => 'Lavandina desinfectante',
                'price' => 2.99,
                'category_id' => 5,
                'image_key' => "products-image/Lavandina.jpg"
            ],
            [
                'name' => 'Limpiador de baño',
                'description' => 'Limpiador de baño con aroma fresco',
                'price' => 3.49,
                'category_id' => 5,
                'image_key' => "products-image/Limpiador-de-baño.jpg"
            ],
        ]);
    }
}
