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
            'slug' => 'asus-tuf-gaming',
            'details' => '15.6 GTX 1060 2.2kg',
            'price' => '51590',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eos harum hic ipsum minima nesciunt quo quod quos saepe ut.'
        ])->categories()->attach(1);

        Product::create([
            'name' => 'DELL INSPIRON 5370',
            'slug' => 'dell-inspiron',
            'details' => '13.3 Intel HD 620 1.4kg',
            'price' => '34350',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dignissimos fugit, id in iusto nam necessitatibus quod quos repudiandae vel?'
        ])->categories()->attach(1);

        Product::create([
            'name' => 'Xiaomi Mi Gaming Laptop',
            'slug' => 'xiaomi-mi-gaming-laptop',
            'details' => '15.6 GTX 1060 2.7kg',
            'price' => '69990',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolores ea eos minus reiciendis? Blanditiis cupiditate dolorum id qui quia.'
        ])->categories()->attach(1);

        Product::create([
            'name' => 'Xiaomi Mi Notebook Air 2018',
            'slug' => 'xiaomi-mi-notebook-air',
            'details' => '13.3 MX150 1.3kg',
            'price' => '52900',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ducimus eveniet ipsam magni odit optio pariatur perferendis qui quibusdam, recusandae.'
        ])->categories()->attach(1);

        Product::create([
            'name' => 'ASUS ZenBook 15 UX533FD',
            'slug' => 'asus-zenbook-15',
            'details' => '15.6 GTX1050 1.59kg',
            'price' => '77400',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto beatae corporis culpa cum dignissimos enim minima obcaecati quasi, reiciendis voluptatibus.'
        ])->categories()->attach(1);

        Product::create([
            'name' => 'HP 250 G6',
            'slug' => 'hp-250-g6',
            'details' => '15.6 Intel HD 620 1.86kg',
            'price' => '16480',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium debitis deserunt eaque fugiat molestias, nobis nulla odio quasi quod reprehenderit.'
        ])->categories()->attach(1);

        Product::create([
            'name' => 'DELL Vostro 5481',
            'slug' => 'dell-vostro',
            'details' => '14 Intel HD 620 1.55kg',
            'price' => '37392',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam atque corporis deleniti dignissimos maxime modi natus perferendis perspiciatis similique vero.'
        ])->categories()->attach(1);

        Product::create([
            'name' => 'Acer ASPIRE 3',
            'slug' => 'acer-aspire-3',
            'details' => '15.6 Radeon R2 620 2.1kg',
            'price' => '14760',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse in incidunt voluptatem. Ad atque placeat tenetur voluptates. Cumque, enim error.'
        ])->categories()->attach(1);

        Product::create([
            'name' => 'Lenovo Ideapad S530 13',
            'slug' => 'lenovo-ideapad-s530',
            'details' => '13.3 Intel UHD 620 1.25kg',
            'price' => '49340',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cum cumque dolor dolorum eius nemo porro quibusdam quisquam quos ut!'
        ])->categories()->attach(1);

        //        10
        Product::create([
            'name' => 'DELL G3 15 3579',
            'slug' => 'dell-g3-15',
            'details' => '15.6 GTX 1050Ti 2.53kg',
            'price' => '53680',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi dicta ipsam modi mollitia omnis recusandae reiciendis rem repudiandae voluptatibus!'
        ])->categories()->attach(1);

        Product::create([
            'name' => 'Acer Nitro 5',
            'slug' => 'acer-nitro-5',
            'details' => '15.6 GTX 1060 2.7kg',
            'price' => '58750',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi cumque eius, ipsam soluta suscipit totam vel vero voluptatum! Ullam, vel.'
        ])->categories()->attach(1);

        Product::create([
            'name' => 'HUAWEI MateBook X Pro',
            'slug' => 'huawei-matebook-x-pro',
            'details' => '13.9 MX150 1.33kg',
            'price' => '98500',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(1);

        Product::create([
            'name' => 'Lenovo Yoga 530-14',
            'slug' => 'lenovo-yoga-530-14',
            'details' => '14 Intel HD 610 1.6kg',
            'price' => '32628',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(1);

        Product::create([
            'name' => 'Lenovo Yoga 530-14',
            'slug' => 'lenovo-yoga-530-14',
            'details' => '14 Intel HD 610 1.6kg',
            'price' => '32628',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(1);

        Product::create([
            'name' => 'ASUS ROG GL504',
            'slug' => 'asus-rog-gl504',
            'details' => '15.6 GTX 1060 2.4kg',
            'price' => '82890',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(1);

        Product::create([
            'name' => 'MSI GF63 8RC',
            'slug' => 'msi-gf63',
            'details' => '15.6 GTX 1050 1.86kg',
            'price' => '49990',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(1);

        // ********
        // Desktops
        // ********
        Product::create([
            'name' => 'Lenovo IdeaCentre 510S',
            'slug' => 'lenovo-ideacentre-510s',
            'details' => '4GB IntelB360',
            'price' => '25750',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(2);

        Product::create([
            'name' => 'ASUS Pro E520',
            'slug' => 'asus-pro-e520',
            'details' => '4GB i3',
            'price' => '26088',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(2);

        Product::create([
            'name' => 'IRU Home 120 MT',
            'slug' => 'iru-home-120mt',
            'details' => '4GB Mini-Tower',
            'price' => '10100',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(2);

        Product::create([
            'name' => 'MSI Trident A',
            'slug' => 'msi-trident-a',
            'details' => '16GB i7',
            'price' => '141990',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(2);

        Product::create([
            'name' => 'ASUS E510',
            'slug' => 'asus-e510',
            'details' => '4GB Intel Celeron',
            'price' => '12000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(2);

        // ********
        // Mobile Phones
        // ********

        Product::create([
            'name' => 'Xiaomi Redmi 7',
            'slug' => 'xiaomi-redmi-7',
            'details' => '3/32GB',
            'price' => '9900',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(3);

        Product::create([
            'name' => 'Xiaomi Mi 9 SE',
            'slug' => 'xiaomi-mi-9-se',
            'details' => '6/64GB',
            'price' => '19890',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(3);

        Product::create([
            'name' => 'Samsung Galaxy S10e',
            'slug' => 'samsung-galaxy-s10e',
            'details' => '6/128GB',
            'price' => '36490',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(3);

        Product::create([
            'name' => 'Samsung Galaxy A40',
            'slug' => 'samsung-galaxy-a40',
            'details' => '4/64GB',
            'price' => '14990',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(3);

        Product::create([
            'name' => 'Xiaomi Mi 9T',
            'slug' => 'xiaomi-mi-9t',
            'details' => '6/128GB',
            'price' => '24990',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(3);


        // ********
        // Tablets
        // ********

        Product::create([
            'name' => 'Xiaomi MiPad 4',
            'slug' => 'xiaomi-mipad-4',
            'details' => '4/64GB',
            'price' => '16490',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(4);

        Product::create([
            'name' => 'Apple iPad 2018',
            'slug' => 'apple-ipad-2018',
            'details' => '2/32GB',
            'price' => '22490',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(4);

        Product::create([
            'name' => 'Samsung Galaxy Tab A',
            'slug' => 'samsung-galaxy-tab-a',
            'details' => '2/32GB',
            'price' => '15490',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(4);

        Product::create([
            'name' => 'Huawei MediaPad M5',
            'slug' => 'huawei-mediapad-m5',
            'details' => '3/32GB',
            'price' => '15980',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(4);

        Product::create([
            'name' => 'Apple iPad Air 2019',
            'slug' => 'apple-ipad-air-2019',
            'details' => '4/64GB',
            'price' => '39990',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(4);


        // ********
        // TVs
        // ********

        Product::create([
            'name' => 'Philips 50PUT6023',
            'slug' => 'philips-50put6023',
            'details' => '127cm 4k',
            'price' => '24340',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(5);

        Product::create([
            'name' => 'Samsung UE32N5000AU',
            'slug' => 'samsung-ue32n5000au',
            'details' => '80cm 1080p',
            'price' => '19020',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(5);

        Product::create([
            'name' => 'Samsung UE43NU7090U',
            'slug' => 'samsung-ue43nu7090u',
            'details' => '109cm 4k',
            'price' => '33650',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(5);

        Product::create([
            'name' => 'Samsung T24H390SI',
            'slug' => 'samsung-t24h390si',
            'details' => '60cm 1080p',
            'price' => '14600',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(5);

        Product::create([
            'name' => 'LG 32LJ500V',
            'slug' => 'lg-32lj500v',
            'details' => '81cm 1080p',
            'price' => '14600',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(5);


        // ********
        // Digital Cameras
        // ********

        Product::create([
            'name' => 'Canon EOS M50',
            'slug' => 'canon-eos-m50',
            'details' => '',
            'price' => '39990',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(6);

        Product::create([
            'name' => 'Nikon D3500',
            'slug' => 'nikon-d3500',
            'details' => '',
            'price' => '27930',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(6);

        Product::create([
            'name' => 'Canon EOS 4000D',
            'slug' => 'canon-eos-4000d',
            'details' => '',
            'price' => '17190',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(6);

        Product::create([
            'name' => 'Fujifilm X-T30',
            'slug' => 'fujifilm-x-t30',
            'details' => '',
            'price' => '69990',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(6);

        Product::create([
            'name' => 'Canon Powershot G9X',
            'slug' => 'canon-powershot-g9x',
            'details' => '',
            'price' => '23490',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur exercitationem laboriosam pariatur possimus, quis voluptatum. Eaque inventore, qui? Ab, reprehenderit.'
        ])->categories()->attach(6);
    }
}
