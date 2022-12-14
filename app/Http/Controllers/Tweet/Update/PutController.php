<?php

namespace App\Http\Controllers\Tweet\Update;


use App\Models\Tweet;
use App\Http\Requests\Tweet\UpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PutController extends Controller
{
    public function __invoke(UpdateRequest $request) {
        $tweet = Tweet::where("id", $request->id())->firstOrFail();
        $tweet->content = $request->tweet();
        $tweet->save();

        return redirect()
            ->route("tweet.update.index", ["tweetId" => $tweet->id])
            ->with("feedback.success", "つぶやきを編集しました！");
    }
}
