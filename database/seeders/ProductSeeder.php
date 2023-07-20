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
                'category_id' => 2
            ],
            [
                'name' => 'Salmón',
                'description' => 'Filete de salmón fresco',
                'price' => 10.5,
                'category_id' => 2
            ],
            [
                'name' => 'Pollo entero',
                'description' => 'Pollo fresco entero',
                'price' => 5.9,
                'category_id' => 2
            ],
            [
                'name' => 'Pescado blanco',
                'description' => 'Filetes de pescado blanco',
                'price' => 8.2,
                'category_id' => 2
            ],
            [
                'name' => 'Chuletas de cerdo',
                'description' => 'Chuletas de cerdo de calidad',
                'price' => 6.5,
                'category_id' => 2
            ],
            [
                'name' => 'Manzanas',
                'description' => 'Manzanas frescas y jugosas',
                'price' => 1.99,
                'category_id' => 1
            ],
            [
                'name' => 'Plátanos',
                'description' => 'Plátanos maduros y dulces',
                'price' => 1.25,
                'category_id' => 1
            ],
            [
                'name' => 'Tomates',
                'description' => 'Tomates rojos y sabrosos',
                'price' => 2.49,
                'category_id' => 1
            ],
            [
                'name' => 'Lechuga',
                'description' => 'Lechuga fresca y crujiente',
                'price' => 1.75,
                'category_id' => 1
            ],
            [
                'name' => 'Zanahorias',
                'description' => 'Zanahorias orgánicas',
                'price' => 1.89,
                'category_id' => 1
            ],
            [
                'name' => 'Sandía',
                'description' => 'Sandía jugosa y refrescante',
                'price' => 3.99,
                'category_id' => 1
            ],
            [
                'name' => 'Frijoles enlatados',
                'description' => 'Frijoles cocidos y enlatados al natural',
                'price' => 0.99,
                'category_id' => 3
            ],
            [
                'name' => 'Tomates enlatados',
                'description' => 'Tomates pelados y enlatados',
                'price' => 1.25,
                'category_id' => 3
            ],
            [
                'name' => 'Atún enlatado',
                'description' => 'Atún enlatado en agua',
                'price' => 2.49,
                'category_id' => 3
            ],
            [
                'name' => 'Puré de patatas enlatado',
                'description' => 'Puré de patatas instantáneo enlatado',
                'price' => 1.75,
                'category_id' => 3
            ],
            [
                'name' => 'Maíz enlatado',
                'description' => 'Maíz dulce enlatado',
                'price' => 1.89,
                'category_id' => 3
            ],
            [
                'name' => 'Pimientos enlatados',
                'description' => 'Pimientos rojos asados y enlatados',
                'price' => 3.99,
                'category_id' => 3
            ],
            [
                'name' => 'Agua mineral',
                'description' => 'Agua embotellada natural',
                'price' => 0.75,
                'category_id' => 4
            ],
            [
                'name' => 'Jugo de naranja',
                'description' => 'Jugo de naranja 100% natural',
                'price' => 2.49,
                'category_id' => 4
            ],
            [
                'name' => 'Refresco de cola',
                'description' => 'Refresco de cola carbonatado',
                'price' => 1.25,
                'category_id' => 4
            ],
            [
                'name' => 'Té verde',
                'description' => 'Té verde orgánico',
                'price' => 1.75,
                'category_id' => 4
            ],
            [
                'name' => 'Café molido',
                'description' => 'Café molido de tueste medio',
                'price' => 4.99,
                'category_id' => 4
            ],
            [
                'name' => 'Cerveza lager',
                'description' => 'Cerveza lager de 330 ml',
                'price' => 2.89,
                'category_id' => 4
            ],
            [
                'name' => 'Agua de coco',
                'description' => 'Agua de coco natural',
                'price' => 3.25,
                'category_id' => 4
            ],
            [
                'name' => 'Jugo de piña',
                'description' => 'Jugo de piña 100% natural',
                'price' => 1.99,
                'category_id' => 4
            ],
            [
                'name' => 'Refresco de limón',
                'description' => 'Refresco de limón con gas',
                'price' => 1.49,
                'category_id' => 4
            ],
            [
                'name' => 'Café instantáneo',
                'description' => 'Café instantáneo soluble',
                'price' => 3.49,
                'category_id' => 4
            ],
            [
                'name' => 'Detergente líquido',
                'description' => 'Detergente líquido para ropa',
                'price' => 4.99,
                'category_id' => 5
            ],
            [
                'name' => 'Jabón en barra',
                'description' => 'Jabón en barra multiusos',
                'price' => 1.25,
                'category_id' => 5
            ],
            [
                'name' => 'Limpiavidrios',
                'description' => 'Limpiavidrios en aerosol',
                'price' => 2.49,
                'category_id' => 5
            ],
            [
                'name' => 'Esponjas para lavar platos',
                'description' => 'Esponjas de cocina para lavar platos',
                'price' => 1.75,
                'category_id' => 5
            ],
            [
                'name' => 'Desinfectante multiusos',
                'description' => 'Desinfectante en spray para superficies',
                'price' => 3.99,
                'category_id' => 5
            ],
            [
                'name' => 'Toallas de papel',
                'description' => 'Toallas de papel absorbente',
                'price' => 4.99,
                'category_id' => 5
            ],
            [
                'name' => 'Bolsas de basura',
                'description' => 'Bolsas de basura resistentes',
                'price' => 1.99,
                'category_id' => 5
            ],
            [
                'name' => 'Desodorante de ambiente',
                'description' => 'Desodorante de ambiente en aerosol',
                'price' => 2.49,
                'category_id' => 5
            ],
            [
                'name' => 'Escoba',
                'description' => 'Escoba con cerdas resistentes',
                'price' => 8.99,
                'category_id' => 5
            ],
            [
                'name' => 'Recogedor',
                'description' => 'Recogedor de polvo y basura',
                'price' => 3.75,
                'category_id' => 5
            ],
            [
                'name' => 'Lavandina',
                'description' => 'Lavandina desinfectante',
                'price' => 2.99,
                'category_id' => 5
            ],
            [
                'name' => 'Limpiador de baño',
                'description' => 'Limpiador de baño con aroma fresco',
                'price' => 3.49,
                'category_id' => 5
            ],
        ]);
    }
}
