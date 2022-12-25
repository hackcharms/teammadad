<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\District;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('blogs')->delete();
        $districts=District::all();
        foreach($districts as $dist)
        {
        factory(App\User::class,5)->create()->each(
            function($user)
            {
                $user->blogs()->saveMany(factory(App\Blog::class,rand(3,5))->make())
                ->each(function ($blog){
                    $blog->comments()->saveMany(factory(App\Comment::class,rand(2,5))->make());
                }
            );
            }
            );
        }
    }
}
