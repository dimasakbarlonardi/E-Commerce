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
            'name' => 'Dimas Akbar',
            'email' => 'dimas.akbar.lonardi@gmail.com',
            'password' => bcrypt('qwerty123'),
        ]);
    }
}
