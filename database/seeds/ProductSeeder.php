<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Kylo Ren',
                'price' => 12,
                'image_path' => 'https://images-na.ssl-images-amazon.com/images/I/41OU4%2BAyrKL._AC_.jpg',
                'category_id' => 1,
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sailor Moon',
                'price' => 11,
                'image_path' => 'https://cdn11.bigcommerce.com/s-0kvv9/images/stencil/1280x1280/products/233847/323735/funkosailormoon__99368.1519958126.jpg?c=2&imbypass=on',
                'category_id' => 1,
                'user_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
