<?php

use Illuminate\Database\Seeder;

class ForumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        factory(App\Forum::class, 5)->create()->each(function($forum) {
            $forum->topics()->save(factory(App\Topic::class)->make());
        });

    }
}
