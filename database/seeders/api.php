<?php

namespace Database\Seeders;

use App\Models\comment;
use App\Models\subscribe;
use Illuminate\Database\Seeder;


use App\Models\category;
use App\Models\post;

class api extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        post::factory()->count(10)->create();
        subscribe::factory()->count(5)->create();

        comment::create([
                'post_id' => 1,
                'user_id' => 1,
                'comment' => 'First comment',
        ]);

        comment::factory()->count(10)->create();

    }
}
