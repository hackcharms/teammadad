<?php

use App\Blog;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs=Blog::all();
        foreach($blogs as $blog)
        {
            $blog->comments->make(factory(App\Comment::class,3)->create());
        }
    }
}
