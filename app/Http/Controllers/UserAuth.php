<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserAuth extends Controller
{
    public function index()
    {
        $users = User::all();

        return view("users.users_list", compact("users"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:users,email," . $id,
            "password" => "nullable|string|min:6|confirmed",
            "role" => "nullable|in:0,1", 
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled("password")) {
            $user->password = Hash::make($request->password);
        }

        if ($request->has("role")) {
            $user->role = $request->role; 
        }

        $user->save();

        return redirect()
            ->route("users.index")
            ->with("success", "User updated successfully!");
    }

    public function login(Request $request)
    {
        $request->validate([
            "email" => "required|string",
            "password" => "required|min:6",
        ]);

        $loginInput = $request->input("email"); 
        $password = $request->input("password");

        $fieldType = filter_var($loginInput, FILTER_VALIDATE_EMAIL)
            ? "email"
            : "name";

        if (
            Auth::attempt([$fieldType => $loginInput, "password" => $password])
        ) {
            session(["user_id" => Auth::id(), "role" => Auth::user()->role]);

            if (Auth::user()->role === 0) {
                return redirect()
                    ->route("dashboard")
                    ->with("success", "Login Successful!");
            } else {
                return redirect()
                    ->route("welcome")
                    ->with("success", "Login Successful!");
            }
        }

        return back()
            ->withErrors(["email" => "Invalid email or username or password!"])
            ->withInput();
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()
            ->route("users.index")
            ->with("success", "User deleted successfully!");
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view("users.edit", compact("user"));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect("/signin")->with(
            "success",
            "You have been logged out!"
        );
    }

    public function register(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:users,email",
            "password" => "required|string|min:6|confirmed",
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "role" => 1, 
        ]);

        return redirect("dashboard/users")->with(
            "success",
            "Registration successful. Please login."
        );
    }
}
