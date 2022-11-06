<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        //Call User seeder
        $this->call(UserSeeder::class);
        //Call module seeder
        $this->call(ModuleSeeder::class);
        //Call enrollment seeder
        $this->call(EnrollmentSeeder::class);
        //Call post seeder
        $this->call(PostSeeder::class);
        //Call comment seeder
        $this->call(CommentSeeder::class);
        //Call like seeder
        $this->call(LikeablesSeeder::class);
    }
}
