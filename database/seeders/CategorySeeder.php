<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'comic', 'novel', 'fiction', 'drama',
            'action', 'romance', 'sport', 'horror',
            'slice of lite', 'thiller', 'comedy'
        ];

        foreach ($data as $value)
        {
            Category::insert([
                'name' =>$value
            ]);
        }
    }
}
