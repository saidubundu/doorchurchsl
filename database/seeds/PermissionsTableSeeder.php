<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('permissions')->truncate();
        //crud user
        $crudUser = new Permission();
        $crudUser->name = "crud-user";
        $crudUser->save();

        //crud pastors
        $crudPastor = new Permission();
        $crudPastor->name = "crud-pastor";
        $crudPastor->save();

        //crud cause
        $crudCause = new Permission();
        $crudCause->name = "crud-cause";
        $crudCause->save();

        //crud events
        $crudEvent = new Permission();
        $crudEvent->name = "crud-event";
        $crudEvent->save();

        //crud sermons
        $crudSermon = new Permission();
        $crudSermon->name = "crud-sermon";
        $crudSermon->save();

        //crud post
        $crudPost = new Permission();
        $crudPost->name = "crud-post";
        $crudPost->save();

        //update others post
        $updateOthersPost = new Permission();
        $updateOthersPost->name = "update-others-post";
        $updateOthersPost->save();

        //delete others post
        $deleteOthersPost = new Permission();
        $deleteOthersPost->name = "delete-others-post";
        $deleteOthersPost->save();

        //crud bible
        $crudBible = new Permission();
        $crudBible->name = "crud-bible";
        $crudBible->save();

        //crud gallery
        $crudGallery = new Permission();
        $crudGallery->name = "crud-gallery";
        $crudGallery->save();

        //crud testimony
        $crudTestimony = new Permission();
        $crudTestimony->name = "crud-testimony";
        $crudTestimony->save();

        //crud livestream
        $crudStream = new Permission();
        $crudStream->name = "crud-liveStream";
        $crudStream->save();

        //attach role permission
        $admin =  Role::whereName('admin')->first();
        $editor = Role::whereName('editor')->first();
        $author = Role::whereName('author')->first();

        $admin->detachPermissions([$crudUser, $crudPastor, $crudCause , $crudStream, $crudEvent, $crudSermon, $crudPost, $updateOthersPost, $deleteOthersPost, $crudBible, $crudGallery, $crudTestimony]);
        $admin->attachPermissions([$crudUser, $crudPastor, $crudCause , $crudStream, $crudEvent, $crudSermon, $crudPost, $updateOthersPost, $deleteOthersPost, $crudBible, $crudGallery, $crudTestimony]);

        $editor->detachPermissions([ $crudCause, $crudEvent, $crudPost, $updateOthersPost, $deleteOthersPost, $crudBible, $crudGallery, $crudTestimony]);
        $editor->attachPermissions([ $crudCause, $crudEvent, $crudPost, $updateOthersPost, $deleteOthersPost, $crudBible, $crudGallery, $crudTestimony]);

        $author->detachPermissions([$crudPost, $crudBible, $crudGallery]);
        $author->attachPermissions([$crudPost, $crudBible, $crudGallery]);
    }
}
