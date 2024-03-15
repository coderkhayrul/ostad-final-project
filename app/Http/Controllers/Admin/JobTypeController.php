<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobTypes = JobType::get();

        return view('admin.components.jobType.index', compact('jobTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jobType = new JobType();
        $jobType->name = $request->name;
        $jobType->slug = Str::slug($request->name);
        $jobType->remarks = $request->remarks;
        $jobType->save();
        $notification = [
            'message' => 'Job Type Created Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(JobType $jobType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobType $jobType)
    {
        return response()->json($jobType);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobType $jobType)
    {
        $jobType->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'remarks' => $request->remarks,
        ]);

        $notification = [
            'message' => 'JobType Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobType $jobType)
    {
        $jobType->delete();

        return response()->json([
            'status' => true,
            'message' => 'Job Type Deleted Successfully',
        ]);
    }
}
