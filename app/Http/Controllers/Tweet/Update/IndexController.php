<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Models\Tweet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $tweetId = (int) $request->route("tweetId");
        $tweet = Tweet::where("id", $tweetId)->firstOrFail();

        return view("tweet.update")->with("tweet", $tweet);
    }
}
