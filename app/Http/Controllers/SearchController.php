<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\User;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        if (!$query) {
            return redirect()->back()->with('error', 'Please enter a search term.');
        }

        // Search Notifications by message
        $notifications = Notification::where('message', 'like', '%' . $query . '%')->get();

        // Search Users by name or email
        $users = User::where('name', 'like', '%' . $query . '%')
                     ->orWhere('email', 'like', '%' . $query . '%')
                     ->get();

        // You can add more models to search similarly

        return view('search.results', compact('notifications', 'users', 'query'));
    }
}
