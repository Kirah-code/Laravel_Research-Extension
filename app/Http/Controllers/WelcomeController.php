<?php

namespace App\Http\Controllers;

use App\Models\Research;
use App\Models\Extension;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Direct researches (user_id = current user)
        $userResearches = Research::where('user_id', $userId)
            ->latest()
            ->get();

        // Team member researches
        $teamMemberResearches = Research::whereHas('teamMembers', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->latest()->get();

        // Merge and remove duplicates
        $combinedResearches = $userResearches->merge($teamMemberResearches)->unique('id');

        // Direct extensions (user_id = current user)
        $userExtensions = Extension::where('user_id', $userId)
            ->latest()
            ->get();

        // Team member extensions
        $teamMemberExtensions = Extension::whereHas('teamMembers', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->latest()->get();

        // Merge and remove duplicates
        $combinedExtensions = $userExtensions->merge($teamMemberExtensions)->unique('id');

        return view('welcome', [
            'researches' => $combinedResearches,
            'extensions' => $combinedExtensions,
            'userResearches' => $userResearches,
            'userExtensions' => $userExtensions,
        ]);
    }
}
