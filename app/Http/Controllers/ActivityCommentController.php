<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivityComment;
use App\Models\Comment;
use App\Models\Activity;

class ActivityCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($activity_id)
    {
        $comment_id = ActivityComment::where('activity_id', $activity_id)->pluck('comment_id');
        $comments = Comment::with('user')->whereIn('id', $comment_id)->get();
        $activity = Activity::find($activity_id);
        return view('activities.comments')->with('comments', $comments)->with('activity', $activity);
    }

    public function store(Request $request, $activity_id)
    {
        $comment = new Comment;
        $comment->content = $request->content;
        $comment->user_id = auth()->id();
        $comment->commented_at = now();
        $comment->save();

        $activityComment = new ActivityComment();
        $activityComment->activity_id = $activity_id;
        $activityComment->comment_id = $comment->id;
        $activityComment->save();

        return redirect()->route('activities.comments.index', $activity_id)->with('success', 'Comentario agregado exitosamente');
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
