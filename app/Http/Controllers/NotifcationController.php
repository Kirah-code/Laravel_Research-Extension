<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function markAsRead(Request $request)
    {
        Notification::where('read', false)->update(['read' => true]);

        return response()->json(['success' => true]);
    }
}