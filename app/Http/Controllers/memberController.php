<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class memberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($name)
    {
       $user =  User::where('name' , $name)->first();
        return view('front.member', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
    
        $request->validate([
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'user_id' => 'required|exists:users,id',
        ]);
    
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }
    
        if ($request->hasFile('profile_image')) {
            try {
                // Check if user already has an image
                if ($user->image) {
                    // Delete the existing image
                    $existingImagePath = storage_path('app/public/' . $user->image);
                    if (file_exists($existingImagePath)) {
                        unlink($existingImagePath);
                    }
                }
        
                $file = $request->file('profile_image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
        
                // Create a user-specific folder name
                $folder = 'user_img/user_' . $user->id;
        
                // Store the file in the user-specific folder
                $path = $file->storeAs($folder, $filename, 'public');
        
                // Update user's profile image
                $user->image = $path; // Save the relative path
                $user->save();
        
                return response()->json(['success' => 'Profile image updated successfully']);
            } catch (\Exception $e) {
                return response()->json(['error' => 'File upload failed', 'message' => $e->getMessage()], 500);
            }
        } else {
            return response()->json(['error' => 'No file uploaded'], 400);
        }        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
