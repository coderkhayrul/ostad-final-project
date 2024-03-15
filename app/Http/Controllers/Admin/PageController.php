<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::all();
        return view('admin.components.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.components.page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Page::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'thumbnail' => saveImage($request->thumbnail, 'uploads/pages/'),
            'content' => $request->content,

        ]);
        $notification = [
            'message' => 'Page Created Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('admin.pages.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //    $pages = Page::get();
        //     return view('admin.components.page.show', compact('pages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        return view('admin.components.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        if ($request->hasFile('old_Img')) {
            deleteImage($page->thumbnail);
            $image = saveImage($request->thumbnail, 'uploads/pages/');
        } else {
            $image = $page->thumbnail;
        }
        $page->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'thumbnail' => $image,
            'content' => $request->content,

        ]);

        $notification = [
            'message' => 'page Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('admin.pages.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        File::delete($page);
        $page->delete();

        return response()->json([
            'status' => true,
            'message' => 'Page Deleted Successfully',
        ]);
    }
}
