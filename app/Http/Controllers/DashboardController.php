<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Research;
use App\Models\Extension;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        $usersCount = $users->count();
        $researchCount = Research::count();
        $extensionCount = Extension::count();
        $researches = Research::all();
        $extensions = Extension::all();
        $allResearches = Research::latest()->get();
        $completedResearches = Research::where("status", "completed")
            ->latest()
            ->get();
        $completedExtensions = Extension::where("status", "completed")
            ->latest()
            ->get();
        $ongoingResearches = Research::where("status", "ongoing")
            ->latest()
            ->take(6)
            ->get();

        return view(
            "dashboard",
            compact(
                "users",
                "usersCount",
                "researchCount",
                "allResearches",
                "researches",
                "completedResearches",
                "ongoingResearches",
                "extensions",
                "extensionCount",
                "completedExtensions"
            )
        );
    }

    public function liveSearch(Request $request)
    {
        $query = $request->input("query");

        if (strlen($query) < 2) {
            return response()->json(["results" => []]);
        }

        
        $researchResults = Research::with("user")
            ->where("title", "like", "%{$query}%")
            ->orWhere("description", "like", "%{$query}%")
            ->limit(5)
            ->get(["id", "title", "user_id"]);

        
        $userResults = User::where("name", "like", "%{$query}%")
            ->orWhere("email", "like", "%{$query}%")
            ->limit(5)
            ->get(["id", "name"]);

        
        $extensionResults = Extension::with("user")
            ->where("title", "like", "%{$query}%")
            ->limit(5)
            ->get(["id", "title", "user_id"]);

       
        $formattedResearch = $researchResults->map(function ($r) {
            return [
                "type" => "research",
                "id" => $r->id,
                "title" => $r->title,
                "user_name" => $r->user ? $r->user->name : "",
            ];
        });

        
        $formattedUsers = $userResults->map(function ($u) {
            return [
                "type" => "user",
                "id" => $u->id,
                "title" => $u->name,
            ];
        });

        
        $formattedExtensions = $extensionResults->map(function ($e) {
            return [
                "type" => "extension",
                "id" => $e->id,
                "title" => $e->title,
                "user_name" => $e->user ? $e->user->name : "",
            ];
        });

        $combinedResults = $formattedResearch
            ->concat($formattedUsers)
            ->concat($formattedExtensions);

        return response()->json(["results" => $combinedResults]);
    }
}
