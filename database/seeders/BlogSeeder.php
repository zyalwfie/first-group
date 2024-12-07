<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::factory(100)
            ->recycle(User::factory(10)->create())
            ->recycle(Tag::factory(20)->create())
            ->create();
    }
}
