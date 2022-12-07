<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request)
    {

        $validated = $request->validated();

        Movie::find($validated['movie_id'])->addComment($validated['content']);

        return redirect('/movies/' . $validated['movie_id']);
    }
}
