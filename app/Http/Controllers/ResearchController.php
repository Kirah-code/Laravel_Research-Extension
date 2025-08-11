<?php

namespace App\Http\Controllers;

use App\Models\Research;
use App\Models\Extension;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use TCPDF;

class ResearchController extends Controller
{
    public function index()
    {
        $ongoingResearches = Research::where("status", "ongoing")
            ->latest()
            ->take(6)
            ->get();

        $researches = Research::all();
        $extensions = Extension::all();
        $users = User::where("role", "!=", 0)->get();

        return view("forms.list", compact("researches", "ongoingResearches", "extensions", "users"));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'project_type' => 'required|string|max:255',
            'status' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'months' => 'nullable|numeric',
            'description' => 'nullable|string',
            // 'user_id' => 'required|exists:users,id',
            'proponents' => 'nullable|string',

            'imrad_link' => 'nullable|url',
            'moa_link' => 'nullable|url',
            'mou_link' => 'nullable|url',

            // Yearly report links
            'year1_q1_link' => 'nullable|url',
            'year1_q2_link' => 'nullable|url',
            'year1_q3_link' => 'nullable|url',
            'year1_q4_link' => 'nullable|url',
            'year2_q1_link' => 'nullable|url',
            'year2_q2_link' => 'nullable|url',
            'year2_q3_link' => 'nullable|url',
            'year2_q4_link' => 'nullable|url',
            'year3_q1_link' => 'nullable|url',
            'year3_q2_link' => 'nullable|url',
            'year3_q3_link' => 'nullable|url',
            'year3_q4_link' => 'nullable|url',
        ]);

        // Normalize proponents input
        if ($request->filled('proponents')) {
            $proponentsArray = preg_split('/[\r\n,]+/', $request->proponents, -1, PREG_SPLIT_NO_EMPTY);
            $validated['proponents'] = implode(', ', array_map('trim', $proponentsArray));
        }

        $research = Research::create($validated);

            if ($request->has('user_ids')) {
                $research->users()->sync($request->user_ids); // Save multiple team members
            }
        return redirect()->route('researches.index')->with('success', 'Research created successfully.');
    }

    public function edit(Research $research)
    {
        return view("forms.edit", compact("research"));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'project_type' => 'required|string|max:255',
            'status' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'months' => 'nullable|numeric',
            'description' => 'nullable|string',
            'proponents' => 'nullable|string',

            'imrad_link' => 'nullable|url',
            'moa_link' => 'nullable|url',
            'mou_link' => 'nullable|url',

            'year1_q1_link' => 'nullable|url',
            'year1_q2_link' => 'nullable|url',
            'year1_q3_link' => 'nullable|url',
            'year1_q4_link' => 'nullable|url',
            'year2_q1_link' => 'nullable|url',
            'year2_q2_link' => 'nullable|url',
            'year2_q3_link' => 'nullable|url',
            'year2_q4_link' => 'nullable|url',
            'year3_q1_link' => 'nullable|url',
            'year3_q2_link' => 'nullable|url',
            'year3_q3_link' => 'nullable|url',
            'year3_q4_link' => 'nullable|url',
        ]);

        // Normalize proponents input
        if ($request->filled('proponents')) {
            $proponentsArray = preg_split('/[\r\n,]+/', $request->proponents, -1, PREG_SPLIT_NO_EMPTY);
            $validated['proponents'] = implode(', ', array_map('trim', $proponentsArray));
        }

        $research = Research::findOrFail($id);
        $research->update($validated);

        return redirect()->route('researches.index')->with('success', 'Research updated successfully!');
    }

    public function destroy(Research $research)
    {
        $research->delete();
        return redirect()->route('researches.index')->with('success', 'Research deleted successfully.');
    }

    public function download(Research $research)
    {
        $pdf = new TCPDF();
        $pdf->AddPage();
        $pdf->SetFont("helvetica", "", 12);

        $pdf->Write(0, "Research Title: {$research->title}\n\n");
        $pdf->Write(0, "Project Type: {$research->project_type}\n");
        $pdf->Write(0, "Proponents: {$research->proponents}\n");
        $pdf->Write(0, "Duration: {$research->start_date} to {$research->end_date} ({$research->months} months)\n\n");
        $pdf->Write(0, "Description:\n{$research->description}\n\n");

        $pdf->Write(0, "Document Links:\n");
        $pdf->Write(0, "IMRAD: {$research->imrad_link}\n");
        $pdf->Write(0, "MOA: {$research->moa_link}\n");
        $pdf->Write(0, "MOU: {$research->mou_link}\n");

        foreach (['year1', 'year2', 'year3'] as $year) {
            foreach (['q1', 'q2', 'q3', 'q4'] as $q) {
                $field = "{$year}_{$q}_link";
                $label = strtoupper($year) . ' ' . strtoupper($q);
                if (!empty($research->$field)) {
                    $pdf->Write(0, "$label: {$research->$field}\n");
                }
            }
        }

        return $pdf->Output("Research_{$research->id}.pdf", "D");
    }
}
