<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\TripComment;
use App\Models\Comment;


class TripCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($trip_id)
    {
        $comment_id = TripComment::where('trip_id', $trip_id)->pluck('comment_id');
        $comments = Comment::with('user')->whereIn('id', $comment_id)->get();
        $trip = Trip::find($trip_id);
        return view('trips.comments')->with('comments', $comments)->with('trip', $trip);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $trip_id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $trip_id)
    {

        $comment = new Comment;
        $comment->content = $request->content;
        $comment->user_id = auth()->id();
        $comment->commented_at = now();
        $comment->save();

        $tripComment = new TripComment;
        $tripComment->trip_id = $trip_id;
        $tripComment->comment_id = $comment->id;
        $tripComment->save();

        return redirect()->route('trips.comments.index', $trip_id)->with('success', 'Comentario agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $comment = TripComment::find($id);
        $comment->delete();
        return redirect()->route('trips.comments.index', $comment->trip_id);
    }
}
