<?php

namespace App\Http\Controllers\Tweet;

use App\Models\Tweet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Request $request)
    {
        $tweetId = (int) $request->route("tweetId");
        $tweet = Tweet::where("id", $tweetId);
        $tweet->delete();

        return redirect()
        ->route("tweet.index")
        ->with("feedback.success", "つぶやきを削除しました！");
    }
}
