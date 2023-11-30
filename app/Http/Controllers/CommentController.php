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
        $validated['content'] = $request->comment;

        $validated['user_id'] = auth()->id();
        $validated['dialog_id'] = $dialog->id;

        Comment::create($validated);

        return redirect()->route('dialogues.show', $dialog->id)->with('success', "Comment posted successfully!");
    }

    public function destroy(Dialog $dialog, Comment $comment)
    {
        $this->authorize('delete', $comment);

        
        $comment->delete();

        return redirect()->back()->with('success', "Comment deleted successfully!");
    }
}
