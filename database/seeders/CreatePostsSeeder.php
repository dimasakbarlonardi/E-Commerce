<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class CreatePostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admin::create([
            'name' => 'Eland Jersey',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Admin123'),
        ]);
    }
}
