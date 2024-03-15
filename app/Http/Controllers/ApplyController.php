<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.components.applies.index', [
            'applies' => Apply::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function statusApprove($id)

    {
        $apply = Apply::find($id);
        $apply->status = 'approved';
        $apply->save();
        return redirect()->back()->with('success', 'Apply status updated successfully');
    }

    public function statusRejected($id)

    {
        $apply = Apply::find($id);
        $apply->status = 'rejected';
        $apply->save();
        return redirect()->back()->with('success', 'Apply status updated successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Apply $apply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apply $apply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apply $apply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apply $apply)
    {
        //
    }
}
