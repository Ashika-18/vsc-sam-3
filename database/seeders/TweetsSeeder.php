<?php

namespace Database\Seeders;

use App\Models\Tweet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TweetsSeeder extends Seeder
{
    
    public function run()
    {
        Tweet::factory()->count(10)->create();

        Tweet::create([
            "content" => "－投稿１です！－",
        ]);

        Tweet::create([
            "content" => "-投稿2です!-",
        ]);
    }
}
