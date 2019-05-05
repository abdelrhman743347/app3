<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Post::create([
            'title' => 'Reboot' ,
            'description' => 'For improved cross-browser rendering',
            'content' =>'Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.
            Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.',
            'category_id' => 1,
            'writer_id' => 1,
        ]);

        Post::create([
            'title' => 'Reboot' ,
            'description' => 'For improved cross-browser rendering',
            'content' =>'Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.
            Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.',
            'category_id' => 1,
            'writer_id' => 1,
        ]);
        Post::create([
            'title' => 'Reboot' ,
            'description' => 'For improved cross-browser rendering',
            'content' =>'Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.
            Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.',
            'category_id' => 1,
            'writer_id' => 1,
        ]);
        Post::create([
            'title' => 'Reboot' ,
            'description' => 'For improved cross-browser rendering',
            'content' =>'Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.
            Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.',
            'category_id' => 2,
            'writer_id' => 1,
        ]);
        Post::create([
            'title' => 'Reboot' ,
            'description' => 'For improved cross-browser rendering',
            'content' =>'Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.
            Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.',
            'category_id' => 3,
            'writer_id' => 1,
        ]);
        Post::create([
            'title' => 'Reboot' ,
            'description' => 'For improved cross-browser rendering',
            'content' =>'Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.
            Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.',
            'category_id' => 3,
            'writer_id' => 1,
        ]);
        Post::create([
            'title' => 'Reboot' ,
            'description' => 'For improved cross-browser rendering',
            'content' =>'Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.
            Reboot, a collection of element-specific CSS changes in a single file, kickstart Bootstrap to provide an elegant, consistent, and simple baseline to build upon.',
            'category_id' => 3,
            'writer_id' => 1,
        ]);
    }
}
