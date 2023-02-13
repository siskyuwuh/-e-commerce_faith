<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = [
            [

                'product_name' => 'EVANGELION Tactital Totebag',
                'product_desc' => '
Size :
Width : 38 cm
Heigth : 35 cm
Diameter : 13 cm

- Free Sticker Pack Evangelion
- Licensed Certificate

- Nylon Materials',
                'product_price' => 4500000,
                'product_stock' => 50,
            ],
            [

                'product_name' => 'Faith Industries Crewneck "Joker"',
                'product_desc' => '
                Sizing Measurement:

Medium : 67 CM x 56 CM (sleeve 69)
Large : 69 CM x 58 CM (sleeve 71)
Extra Large : 71 CM x 60 CM (sleeve 73)
Double Extra Large : 73 CM x 62 CM (sleeve 75)

- Cotton Fleece 330 GSM
- Sticker Pack
- Keychain
- Sleeve',
                'product_price' => 543210,
                'product_stock' => 100,
            ],
            [

                'product_name' => 'Faith Industries Coach Jacket "Mad Dog of Shimano"',
                'product_desc' => 'M : 67 CM x 56 CM (sleeve 69)',
                'product_price' => 250000,
                'product_stock' => 50,
            ],
            [

                'product_name' => 'Faith Industries Pullover Hoodie "Dragon of Dojima"',
                'product_desc' => '
                Large : 69 CM x 58 CM
Extra Large : 71 CM x 60 CM',
                'product_price' => 200000,
                'product_stock' => 50,
            ],
            [

                'product_name' => 'EVANGELION Oversized "Unit-01" T-shirt',
                'product_desc' => '
                Sizing Measurement Oversize tshirt :
(Width x Length)

Medium : 55 cm x 70 cm
Large : 57 cm x 72 cm
Extra Large : 60 cm x 74 cm
Double Extra Large : 62 cm x 76 cm

- Free Sticker Evangelion Pack
- Licensed Certificate

- Cotton Combed 24s
- Printed Tshirt',
                'product_price' => 250000,
                'product_stock' => 100,
            ],
            [

                'product_name' => 'Faith Industries Sukajan Jacket "Mad Dog of Shimano"',
                'product_desc' => '
                Sizing Measurement Sukajan :
(Length - Width - Sleeve)

Medium : 73 cm x 56 cm x 62 cm
Large : 75 cm x 58 cm x 63 cm
Xtra Large : 77 cm x 60 cm x 63 cm
Double Xtra Large 79 cm x 62 m x 63 cm

- Embroidery
- Satin Silk

- Free sticker
- Free descial Sleeve Box',
                'product_price' => 350000,
                'product_stock' => 50,
            ],
            [

                'product_name' => 'Faith Industries Varsity Jacket "Dragon of Dojima"',
                'product_desc' => '
                Sizing Measurement Varsity :
(Length - Width - Sleeve)

Medium : 73 cm x 56 cm x 62 cm
Large : 75 cm x 58 cm x 63 cm
Xtra Large : 77 cm x 60 cm x 63 cm
Double Xtra Large 79 cm x 62 m x 63 cm

- Embroidery

- Free sticker
- Free descial Sleeve Box',
                'product_price' => 850000,
                'product_stock' => 50,
            ],
            [

                'product_name' =>  'Faith Industries Tshirt "Chen The Holungday"',
                'product_desc' => 'Sizing Measurement Oversize :
(Length x Width)

M : 73 cm x 56 cm
L : 75 cm x 58 cm
XL : 77 cm x 59 cm
XXL : 79 cm 63 cm

- Cotton Combed 24s
- Print

- Free Sticker',
                'product_price' => 225000,
                'product_stock' => 100,
            ],
            [

                'product_name' => 'Faith Industries Tshirt "SilverAsh"',
                'product_desc' => '
                Sizing Measurement Oversize :
(Length x Width)

M : 73 cm x 56 cm
L : 75 cm x 58 cm
XL : 77 cm x 59 cm
XXL : 79 cm 63 cm

- Cotton Combed 24s
- Print

- Free Sticker',
                'product_price' => 225000,
                'product_stock' => 100,
            ],
            [

                'product_name' => 'Faith Industries Crewneck "Awaken Akira"',
                'product_desc' => '
Sizing Measurement:
Medium : 67 CM x 56 CM (sleeve 69)
Large : 69 CM x 58 CM (sleeve 71)
Extra Large : 71 CM x 60 CM (sleeve 73)
Double Extra Large : 73 CM x 62 CM (sleeve 75)

- Cotton Fleece 330 GSM
- Sticker Pack
- Keychain',
                'product_price' => 555555,
                'product_stock' => 100,
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
