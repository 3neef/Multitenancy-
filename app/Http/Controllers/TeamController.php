<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $table = strtolower(auth()->user()->tenants->first()->table_name);

        $members = DB::table($table)->get();

        return view('profile.index' ,compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('profile.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $table = strtolower(auth()->user()->tenants->first()->table_name);

        DB::table($table)->insert([
            'full_name' => $request->full_name,
            'department' => $request->department,
            'level' => $request->level,
            'position' => $request->position,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('team');
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
