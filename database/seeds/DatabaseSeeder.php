<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
//        $this->call(EventsTableSeeder::class);
//        $this->call(SermonsTableSeeder::class);
//        $this->call(PostsTableSeeder::class);
//        $this->call(PastorsTableSeeder::class);
//        $this->call(PhotoTableSeeder::class);
//        $this->call(VideoTableSeeder::class);
//        $this->call(BibleTableSeeder::class);
//        $this->call(RolesTableSeeder::class);
////        $this->call(CommentsTableSeeder::class);
//        $this->call(PermissionsTableSeeder::class);
//        $this->call(CausesTableSeeder::class);
//        $this->call(TestimoniesTableSeeder::class);

    }
}
