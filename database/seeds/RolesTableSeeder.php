<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->delete();

        $admin = new Role();
        $admin->name = "admin";
        $admin->display_name = "Admin";
        $admin->save();

        $editor = new Role();
        $editor->name = "editor";
        $editor->display_name = "Editor";
        $editor->save();

        $author = new Role();
        $author->name = "author";
        $author->display_name = "Author";
        $author->save();

        //attach Roles

        $user1 = User::first();
        $user1->detachRole($admin);
        $user1->attachRole($admin);

        if (env('APP_ENV') === 'local')
        {
            // second user as editor
            $user2 = User::find(2);
            $user2->detachRole($editor);
            $user2->attachRole($editor);

            // third user as author
            $user3 = User::find(3);
            $user3->detachRole($author);
            $user3->attachRole($author);
        }
    }
}
