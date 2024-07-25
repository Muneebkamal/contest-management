<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contest;
use Illuminate\Http\Request;

class ContestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contests = Contest::all();
        return view('admin.contest.contest', compact('contests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contest.add-contest');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contest = new Contest;
        $contest->name = $request->name;
        $contest->categories = $request->categories;
        $contest->start_date = $request->start_date;
        $contest->end_date = $request->end_date;
        $contest->description = $request->description;
        $contest->save();

        return redirect('contest');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Contest::where('id', $id)->first();
        return view('admin.contest.edit-contest', compact('user'));
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
        $contest = Contest::where('id', $id)->first();
        $contest->name = $request->name;
        $contest->categories = $request->categories;
        $contest->start_date = $request->start_date;
        $contest->end_date = $request->end_date;
        $contest->description = $request->description;
        $contest->save();

        return redirect('contest');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contest = Contest::where('id', $id)->first();
        $contest->delete();

        return redirect('contest');
    }
}
