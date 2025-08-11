<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Research;
use App\Models\Extension;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Models\Notification;

class ExtensionController extends Controller
{
    public function index()
    {
        $extensions = Extension::latest()->get();
        $ongoingResearches = Research::all();
        $users = User::all();
        return view("forms.extension_list", compact("extensions", "ongoingResearches", "users"));
    }

    public function create()
    {
        return view("forms.extension");
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'project_type' => 'required|string|max:100',
           
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'months' => 'nullable|integer',
            'status' => 'nullable|string',
            'description' => 'nullable|string',
            'proponents' => 'nullable|string|max:255',

            // Replacing document_link with multiple fields
            'terminal_report' => 'nullable|url',
            'moa' => 'nullable|url',
            'mou' => 'nullable|url',
        ]);

        $extension = new Extension($validated);
        $extension->status = $validated['status'] ?? 'Ongoing';
        $extension->save();

        // Save multiple team members if provided
        if ($request->has('user_ids')) {
            $extension->teamMembers()->sync($request->user_ids);
        }


        return redirect()->route('extensions.index')->with('success', 'Extension submitted successfully!');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'project_type' => 'required|in:Extension,Outreach',
            'proponents' => 'nullable|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'months' => 'nullable|integer',
            'description' => 'nullable|string',
            'status' => 'required|in:pending,approved,ongoing,rejected,declined,completed',
            

            // Replacing document_link with multiple fields
            'terminal_report' => 'nullable|url',
            'moa' => 'nullable|url',
            'mou' => 'nullable|url',
        ]);

            $extension = Extension::findOrFail($id);
            $extension->update($validated);

            if ($request->has('user_ids')) {
                $extension->teamMembers()->sync($request->user_ids);
            }


        return redirect()->route('extensions.index')->with('success', 'Extension updated successfully!');
    }

    public function destroy($id)
    {
        $extension = Extension::findOrFail($id);
        $extension->delete();

        return redirect()->route("extensions.index")->with("success", "Extension deleted successfully.");
    }
}
