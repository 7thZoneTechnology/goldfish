<?php

use Illuminate\Database\Seeder;
use App\Brand;
class BrandSeeder extends Seeder
{

    $brands= ["Epson", "Toshiba", "Steren", "Asus", "HP", "Pioneer", "Bose", "Sony", "Benq", "Panasonic"];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i < 20; $i++){
            $brand = $brands[rand(0,count($brands)-1)];
        	Brand::create([
        		'name' => $brand,
        		]);

        }
    }
}
