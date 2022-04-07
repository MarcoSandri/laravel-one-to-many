<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Calcio', 'Tennis', 'Basket', 'Motori', 'Ciclismo'];
        
        foreach($categories as $category) {

            $newcategory =  new Category();
            $newcategory->name = $category;
            $newcategory->slug = Str::slug($category);
            $newcategory->save();

        }
        
    }
}
