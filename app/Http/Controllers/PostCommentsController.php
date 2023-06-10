<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\Perspective;

class PostCommentsController extends Controller
{
    public function store(Post $post){

        request()->validate([
            'body' => 'required',
        ]);

        $comment = request('body');

        $perspectiveResponse = Perspective::cURLperspective($comment, 'spam');


        if(isset($perspectiveResponse['attributeScores']['SPAM'])){
            $spanScores = $perspectiveResponse['attributeScores']['SPAM'];

            if(isset($spanScores['spanScores'])){
                $spanScores = $spanScores['spanScores'];

                foreach($spanScores as $span){
                    // dd($perspectiveResponse);
                    if($span['score']['value'] <= 0.5){

                    $post->comments()->create([
                        'user_id' => auth()->id(),
                        'body' => request('body')
                    ]);

                    }
                }
                return back();
            }
        }
    }
}
