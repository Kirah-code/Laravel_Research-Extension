<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExtensionController;
use App\Models\Research;
use App\Models\User;
use App\Models\Extension;

Route::get("/", function () {
    return view("signin");
});
Route::get("/signin", function () {
    return view("signin");
});
Route::get("/signup", function () {
    return view("signup");
});

Route::post("/login", [UserAuth::class, "login"])->name("login");
Route::post("/signup", [UserAuth::class, "register"])->name("register");

Route::middleware(["auth"])->group(function () {
    Route::get("/welcome", [WelcomeController::class, "index"])->name(
        "welcome"
    );
    Route::get("/dashboard", function () {
        $users = User::all();
        $researches = Research::all();
        return view("dashboard", compact("ongoingResearches"));
    })->name("dashboard");

    Route::get("/dashboard/upload", function () {
        $ongoingResearches = Research::all();
        $extensions = Extension::all();
        $users = User::all();
        return view("forms.forms", compact("ongoingResearches", "extensions", "users"));
    });

    Route::get("/dashboard/extension", function () {
        $ongoingResearches = Research::all();
        $extensions = Extension::all();
        $users = User::all();
        return view("forms.extension", compact("ongoingResearches", "users", "extensions"));
    });

        Route::get("/dashboard/add_user", function () {
        $ongoingResearches = Research::all();
        $extensions = Extension::all();
        $users = User::all();
        return view("users.users_add", compact("ongoingResearches", "users", "extensions"));
    });


    Route::get("/dashboard/users", function () {
        $ongoingResearches = Research::all();
        $extensions = Extension::all();
        $users = User::all(); 
        return view("users.users_list", compact("ongoingResearches", "users", "extensions"));
    })->name("users.index");

    Route::get("/dashboard/division", function () {
        $ongoingResearches = Research::all();
        $extensions = Extension::all();
        $users = User::all();
        return view(
            "division.research_extension",
            compact("ongoingResearches", "extensions")
        );
    });

    Route::get("dashboard/users/{user}/edit", [UserAuth::class, "edit"])->name(
        "users.edit"
    );
    Route::put("dashboard/users/{user}", [UserAuth::class, "update"])->name(
        "users.update"
    );
    Route::delete("dashboard/users/{user}", [UserAuth::class, "destroy"])->name(
        "users.destroy"
    );

    Route::get("dashboard/list", [ResearchController::class, "index"])->name(
        "researches.index"
    );

    Route::get("dashboard/extension_list", [
        ExtensionController::class,
        "index",
    ])->name("extensions.index");

    Route::get("/dashboard", [DashboardController::class, "index"])->name(
        "dashboard"
    );

    Route::get("dashboard/list/{research}/download", [
        ResearchController::class,
        "download",
    ])->name("researches.download");

    Route::get("/dashboard/search", [
        DashboardController::class,
        "search",
    ])->name("dashboard.search");
    Route::get("/dashboard/live-search", [
        DashboardController::class,
        "liveSearch",
    ])->name("dashboard.liveSearch");
    
    Route::post("/notifications/mark-as-read", [
        NotificationController::class,
        "markAsRead",
    ])->name("notifications.markAsRead");
    Route::resource("researches", ResearchController::class);

    Route::post("/logout", [UserAuth::class, "logout"])->name("logout");

    Route::get("/extensions", [ExtensionController::class, "index"])->name(
        "extensions.index"
    );
    Route::get("/extensions/create", [
        ExtensionController::class,
        "create",
    ])->name("extensions.create");
    Route::post("/extensions", [ExtensionController::class, "store"])->name(
        "extensions.store"
    );
    Route::resource("extensions", ExtensionController::class);
});
