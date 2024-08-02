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
        $child->birthdate = Carbon::createFromFormat('d-m-Y', $validated['birthdate'])->format('Y-m-d');
    
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $child->image = $imageName;
        }
    
        $child->save();
    
        return response()->json(['success' => 'Child saved successfully']);
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
