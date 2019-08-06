<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'ASUS TUF Gaming FX505',
            'details' => '15.6 GTX 1060 2.2kg',
            'price' => '51590',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eos harum hic ipsum minima nesciunt quo quod quos saepe ut.'
        ]);

        Product::create([
            'name' => 'DELL INSPIRON 5370',
            'details' => '13.3 Intel HD 620 1.4kg',
            'price' => '34350',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dignissimos fugit, id in iusto nam necessitatibus quod quos repudiandae vel?'
        ]);

        Product::create([
            'name' => 'Xiaomi Mi Gaming Laptop',
            'details' => '15.6 GTX 1060 2.7kg',
            'price' => '69990',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolores ea eos minus reiciendis? Blanditiis cupiditate dolorum id qui quia.'
        ]);

        Product::create([
            'name' => 'Xiaomi Mi Notebook Air 2018',
            'details' => '13.3 MX150 1.3kg',
            'price' => '52900',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ducimus eveniet ipsam magni odit optio pariatur perferendis qui quibusdam, recusandae.'
        ]);

        Product::create([
            'name' => 'ASUS ZenBook 15 UX533FD',
            'details' => '15.6 GTX1050 1.59kg',
            'price' => '77400',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto beatae corporis culpa cum dignissimos enim minima obcaecati quasi, reiciendis voluptatibus.'
        ]);

        Product::create([
            'name' => 'HP 250 G6',
            'details' => '15.6 Intel HD 620 1.86kg',
            'price' => '16480',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium debitis deserunt eaque fugiat molestias, nobis nulla odio quasi quod reprehenderit.'
        ]);

        Product::create([
            'name' => 'DELL Vostro 5481',
            'details' => '14 Intel HD 620 1.55kg',
            'price' => '37392',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam atque corporis deleniti dignissimos maxime modi natus perferendis perspiciatis similique vero.'
        ]);

        Product::create([
            'name' => 'Acer ASPIRE 3',
            'details' => '15.6 Radeon R2 620 2.1kg',
            'price' => '14760',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse in incidunt voluptatem. Ad atque placeat tenetur voluptates. Cumque, enim error.'
        ]);

        Product::create([
            'name' => 'Lenovo Ideapad S530 13',
            'details' => '13.3 Intel UHD 620 1.25kg',
            'price' => '49340',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cum cumque dolor dolorum eius nemo porro quibusdam quisquam quos ut!'
        ]);

        //        10
        Product::create([
            'name' => 'DELL G3 15 3579',
            'details' => '15.6 GTX 1050Ti 2.53kg',
            'price' => '53680',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi dicta ipsam modi mollitia omnis recusandae reiciendis rem repudiandae voluptatibus!'
        ]);

        Product::create([
            'name' => 'Acer Nitro 5',
            'details' => '15.6 GTX 1060 2.7kg',
            'price' => '58750',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cumque eius, ipsam soluta suscipit totam vel vero voluptatum! Ullam, vel.'
        ]);

        Product::create([
            'name' => 'HUAWEI MateBook X Pro',
            'details' => '13.9 MX150 1.33kg',
            'price' => '98500',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ]);
    }
}
