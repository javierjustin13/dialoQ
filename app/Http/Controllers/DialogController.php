<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateDialogRequest;
use App\Models\Dialog;
use App\Models\User;
use Illuminate\Support\Facades\URL;

class DialogController extends Controller
{
    public function show(Dialog $dialog)
    {
        $users = User::all();
        return view('dialogues.show', compact('dialog', 'users'));
    }

    public function edit(Dialog $dialog)
    {
        $this->authorize('update', $dialog);

        $users = User::all();
        return view('dialogues.edit', compact('dialog', 'users'));
    }

    public function update(UpdateDialogRequest $request, Dialog $dialog)
    {
        $this->authorize('update', $dialog);

        $validated = $request->validated();

        $validated['title'] = $request->new_title;
        $validated['content'] = $request->new_content;

        $dialog->update($validated);

        return redirect()->route('dialogues.show', $dialog)->with('success', 'Dialog updated successfully !');
    }

    public function destroy(Dialog $dialog)
    {
        $this->authorize('delete', $dialog);

        $dialog->delete();

        if(URL::previous() == route('dialogues.show', $dialog) || URL::previous() == route('dialogues.edit', $dialog)) {
            return redirect()->route('home')->with('success', 'Dialog deleted successfully!');
        }
        return redirect()->back()->with('success','Dialog deleted successfully!');
    }
}
