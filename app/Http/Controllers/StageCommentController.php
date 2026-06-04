<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StageComment;
use App\Models\Comment;
use App\Models\Stage;

class StageCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($stage_id)
    {
        $comment_id = StageComment::where('stage_id', $stage_id)->pluck('comment_id');
        $comments = Comment::with('user')->whereIn('id', $comment_id)->get();
        $stage = Stage::find($stage_id);
        return view('stages.comments')->with('comments', $comments)->with('stage', $stage);
    }

    public function store(Request $request, $stage_id)
    {
        $comment = new Comment;
        $comment->content = $request->content;
        $comment->user_id = auth()->id();
        $comment->commented_at = now();
        $comment->save();

        $stageComment = new StageComment;
        $stageComment->stage_id = $stage_id;
        $stageComment->comment_id = $comment->id;
        $stageComment->save();

        return redirect()->route('stages.comments.index', $stage_id)->with('success', 'Comentario agregado exitosamente');
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
