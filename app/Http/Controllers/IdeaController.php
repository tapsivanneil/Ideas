<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Idea;
use App\Models\UserLike;
use App\Models\UserComment;

use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    public function shareIdea(Request $request){

        $user = Auth::user();

        $idea = Idea::create([
            'idea' => $request->idea_content,
            'likes' => 0,
            'user_id' => $user->id,
        ]);

        return redirect('/');
    }

    public function showFeed(){
        $user = Auth::user();

        return view('/dashboard', [

            'ideas' => Idea::join('users', 'users.id', '=', 'ideas.user_id')->select('ideas.*', 'ideas.id', 'ideas.idea', 'users.username')
            ->orderby('ideas.id', 'desc')
            ->get(),
            'liked' => UserLike::where('user_id', $user->id)->get(),
        ] );
    }

    public function likeIdea($id){

        $user = Auth::user();

        $like = Idea::find($id);
        $like->increment('likes');

        $liked_idea = UserLike::create([
            'user_id' => $user->id,
            'idea_id' => $id,
        ]);

        return redirect('/');

    }


    public function unlikeIdea($id){

        $user = Auth::user();

        $unliked_idea = UserLike::where('user_id', $user->id)
                                ->where('idea_id', $id)
                                ->delete();

        if($unliked_idea){
            $like = Idea::find($id);
            $like->decrement('likes');
        }

        return redirect('/');

    }

    public function viewComments($id){
        return view('feed.comment', [
            'comments' =>  UserComment::join('users', 'users.id', '=', 'user_comments.user_id')
            ->select('user_comments.*', 'users.username')
            ->orderby('user_comments.id', 'desc')
            ->where('user_comments.idea_id', $id)
            ->get(),
        ]);
    }

    public function sendComment(Request $request, $id){

        $user = Auth::user();

        $error = $request->validate([
            'user_comment' => 'required'
        ]);


        $sendComment = UserComment::create([
            'user_id' => $user->id,
            'idea_id' => $id,
            'comment_likes' => 0,
            'comment' => $request->user_comment
        ]);

        return redirect(route('idea.view.comment', ['id' => $id]));

    }

}
