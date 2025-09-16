<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(SettingTableSeeder::class);

        // Create some sample categories manually
        \App\Category::create([
            'name' => 'Technology',
            'slug' => 'technology',
            'description' => 'Posts about technology and programming'
        ]);
        
        \App\Category::create([
            'name' => 'Lifestyle',
            'slug' => 'lifestyle',
            'description' => 'Posts about lifestyle and personal experiences'
        ]);
        
        \App\Category::create([
            'name' => 'Business',
            'slug' => 'business',
            'description' => 'Posts about business and entrepreneurship'
        ]);
    }
}
