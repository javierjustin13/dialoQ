<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Comment;
use App\Models\Dialog;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(CreateCommentRequest $request, Dialog $dialog)
    {
        $validated = $request->validated();

        $validated['user_id'] = auth()->id();
        $validated['dialog_id'] = $dialog->id;

        Comment::create($validated);

        return redirect()->route('dialogues.show', $dialog->id)->with('success', "Comment posted successfully!");
    }
}
