<?php

namespace App\Http\Controllers;

use App\Models\child;
use Carbon\Carbon;
use COM;
use Illuminate\Http\Request;

class childrenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $uniqueName = $this->generateUniqueName($request['name']);
        $validated = $request->validate([
            'gender' => 'required|in:girl,boy',
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'birthdate' => 'required|date_format:d-m-Y',
            // other validation rules
        ]);
    
        $child = new Child;
        $child->user_id = auth()->user()->id;
        $child->gender = $validated['gender'];
        $child->name = $validated['name'];
        $child->unique_name = $uniqueName;
        $child->birthdate = Carbon::createFromFormat('d-m-Y', $validated['birthdate'])->format('Y-m-d');
    
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            // Move the file to 'public/storage/children_img'
            $request->image->move(public_path('storage/children_img'), $imageName);
            // Ensure the correct path format
            $child->image = 'children_img/' . $imageName;
        }
    
        $child->save();
    
        return response()->json(['success' => 'Child saved successfully']);
    }
    private function generateUniqueName($name)
    {
        // Convert the name to lowercase and remove spaces
        $baseName = strtolower(preg_replace('/\s+/', '', $name));
        // Append 2 or 3 random digits
        $uniqueName = $baseName . random_int(10, 99); // 2 digits

        // Ensure the unique name is not already in use
        while (child::where('unique_name', $uniqueName)->exists()) {
            $uniqueName = $baseName . random_int(100, 999); // 3 digits
        }

        return $uniqueName;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $unique_name)
    {
        $child = Child::where('unique_name', $unique_name)->first();
        if (!$child) {
            return redirect()->route('children.index')->with('error', 'Child not found');
        }

        return view('front.child', compact('child'));
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
        $child = Child::where('id', $id)->first();

        $child->description = $request->description;
        $child->save();
        return redirect()->route('children.show', $child->unique_name)->with(['success' => 'Child saved successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
